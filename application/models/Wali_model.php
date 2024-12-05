<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali_model extends CI_Model
{

    private $table = 'tb_wali'; // Table Siswa
    public $table2 = 'tb_pelanggaran'; // Table Pelanggaran
    public $table_join1 = 'tb_kelas';
    public $table_join2 = 'tb_wali';
    public $table_select = 'tb_siswa.*';
    public $table_select2 = 'tb_kelas.*';
    public $join = 'tb_kelas.id = tb_siswa.class_id'; // Join Ke Tabel Kelas
    public $join2 = 'tb_wali.nisn = tb_siswa.nisn'; // Join Ke Tabel Wali
    public $id = 'id';
    public $nisn = 'nisn';
    public $id_siswa = 'tb_siswa.nisn'; // Field ID Table Siswa
    public $student_id = 'nisn';
    public $order_by = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }


    public function CariSiswa($search = null)
    {
        if ($search <> null) {
            $this->db->where('tb_siswa.nisn', $search);
        }
        $this->db->select($this->table_select);
        $this->db->select($this->table_select2);
        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join);
        $query = $this->db->get();

        return $query;
    }

    function TotalDataWali($value = null)
    {
        if ($value <> '') {
            $this->db->like($value);
        }
        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join);
        $this->db->join($this->table_join2, $this->join2);
        return $this->db->count_all_results();
    }

    function DataWali($limit, $start, $value = null)
    {
        if ($value <> '') {
            $this->db->like($value);
        }
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->order_by($this->id_siswa, $this->order_by);
        $this->db->join($this->table_join1, $this->join);
        $this->db->join($this->table_join2, $this->join2);
        $query = $this->db->get();
        return $query;
    }

    // Get Data
    function getByID($id)
    {
        return $this->db->get_where($this->table, [$this->id => $id]);
    }

    function getByNISN($nisn)
    {
        return $this->db->get_where($this->table, ['nisn' => $nisn]);
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

    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function update($data, $nisn)
    {
        return $this->db->update($this->table, $data, array($this->nisn => $nisn));
    }

    function delete($nisn)
    {
        return $this->db->delete($this->table, array($this->nisn => $nisn));
    }
}
