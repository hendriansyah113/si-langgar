<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    private $table = 'tb_siswa'; // Table Siswa
    public $table_2 = 'tb_pelanggaran'; // Table Pelanggaran
    public $table_join1 = 'tb_kelas';
    public $table_join2 = 'tb_wali';
    public $table_select = 'tb_siswa.*';
    public $table_select2 = 'tb_kelas.*';
    public $join = 'tb_kelas.id = tb_siswa.class_id'; // Join Ke Tabel Kelas
    public $join2 = 'tb_wali.nisn = tb_siswa.nisn'; // Join Ke Tabel Wali
    public $id = 'id';
    public $nisn = 'nisn';
    public $class_id = 'class_id';
    public $id_siswa = 'tb_siswa.nisn'; // Field ID Table Siswa
    public $student_id = 'student_id';
    public $order_by = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }

    public function CariSiswa($search)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa'); // Ganti dengan nama tabel Anda
        $this->db->group_start()
            ->like('nik', $search)          // Pencarian berdasarkan NIK
            ->or_like('nama_siswa', $search)      // Pencarian berdasarkan Nama
            ->or_like('alamat', $search)    // Pencarian berdasarkan Alamat
            ->or_like('nomor_hp', $search)  // Pencarian berdasarkan Nomor HP
            ->group_end();
        return $this->db->get();
    }

    function TotalDataPelanggaranSiswa($where = null)
    {
        $this->db->where($where);
        $this->db->from($this->table_2);
        return $this->db->count_all_results();
    }

    function DataPelanggaranSiswa($limit, $start, $where = null)
    {
        $this->db->order_by($this->id, $this->order_by);
        $this->db->where($where);
        $this->db->limit($limit, $start);
        $this->db->from($this->table_2);
        return $this->db->get();
    }

    public function TotalDataSiswa($conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start(); // Mulai grup untuk kondisi pencarian
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value); // Tambahkan kondisi LIKE
            }
            $this->db->group_end(); // Tutup grup
        }

        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join);
        $this->db->join($this->table_join2, $this->join2);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function DataSiswa($limit, $start, $conditions = [])
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
        $this->db->order_by($this->id_siswa, $this->order_by);
        $this->db->join($this->table_join1, $this->join);
        $this->db->join($this->table_join2, $this->join2);
        $query = $this->db->get();
        return $query;
    }


    // Get Data
    function getByID($nisn)
    {
        return $this->db->get_where($this->table, [$this->nisn => $nisn]);
    }

    function getByID_Join($id)
    {
        $this->db->where([$this->id_siswa => $id]);
        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join);
        $this->db->join($this->table_join2, $this->join2);
        $query = $this->db->get();

        return $query;
    }

    function getByNISN($nisn)
    {
        return $this->db->get_where($this->table, ['nisn' => $nisn]);
    }

    function getJsonForSiswa($id)
    {
        $this->db->where([$this->class_id => $id]);
        $this->db->from($this->table);
        return $this->db->get();
    }

    // Check Data
    function CheckPelanggaranByID($nisn)
    {
        return $this->db->get_where($this->table_2, ['nisn' => $nisn]); //Cek Data Pada Tabel Pelanggaran
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows() > 0; // Mengecek apakah ada perubahan pada database
    }


    function insert_id($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    function update($data, $nisn)
    {
        return $this->db->update($this->table, $data, array($this->nisn => $nisn));
    }

    function delete($nisn)
    {
        return $this->db->delete($this->table, array($this->nisn => $nisn));
    }

    function delete_pelanggaran($id)
    {
        return $this->db->delete($this->table_2, array($this->class_id => $id)); // Hapus Data Pada Table Pelanggaran
    }
}
