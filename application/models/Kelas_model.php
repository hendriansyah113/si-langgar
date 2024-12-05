<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

    private $table = 'tb_kelas'; // Table Utama
    private $table_2 = 'tb_pelanggaran'; // Table Pelanggaran
    private $table_3 = 'tb_siswa'; // Table Siswa
    public $id = 'id';
    public $class_id = 'class_id'; // Field Yang Terdapat Di Pada Table 2 Dan 3
    public $nama_kelas = 'nama_kelas';
    public $order_by = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }

    public function TotalDataKelas($conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start(); // Mulai grup untuk kondisi pencarian
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value); // Tambahkan kondisi LIKE
            }
            $this->db->group_end(); // Tutup grup
        }

        $this->db->from($this->table);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function DataKelas($limit, $start, $conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start();
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value);
            }
            $this->db->group_end();
        }
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->order_by($this->id, $this->order_by);
        $query = $this->db->get();
        return $query;
    }

    // Get Data
    function getByID($id)
    {
        return $this->db->get_where($this->table, [$this->id => $id]);
    }

    function getByName($name)
    {
        return $this->db->get_where($this->table, [$this->nama_kelas => $name]);
    }

    // Check Data
    function CheckPelanggaranByID($id)
    {
        return $this->db->get_where($this->table_2, [$this->class_id => $id]); //Cek Data Pada Tabel Pelanggaran
    }

    function CheckSiswaByID($id)
    {
        return $this->db->get_where($this->table_3, [$this->class_id => $id]); //Cek Data Pada Tabel Siswa
    }

    function getJsonBySub($sub)
    {
        $this->db->where(['sub_class' => $sub]);
        $this->db->from($this->table);
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function update($data, $id)
    {
        return $this->db->update($this->table, $data, array($this->id => $id));
    }

    function delete($id)
    {
        return $this->db->delete($this->table, array($this->id => $id));
    }

    function delete_pelanggaran($id)
    {
        return $this->db->delete($this->table_2, array($this->class_id => $id)); // Hapus Data Pada Table Pelanggaran
    }

    function delete_siswa($id)
    {
        return $this->db->delete($this->table_3, array($this->class_id => $id)); // Hapus Data Pada Table Siswa
    }
}
