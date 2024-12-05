<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran_model extends CI_Model
{

    private $table = 'tb_pelanggaran';
    public $table_join1 = 'tb_guru';
    public $table_join2 = 'tb_wali';
    public $table_join3 = 'tb_kelas';
    public $table_join4 = 'tb_tipe_pelanggaran';
    public $table_join5 = 'tb_siswa';
    public $join1 = 'tb_guru.nik = tb_pelanggaran.nik';
    public $join2 = 'tb_wali.id = tb_pelanggaran.wali_id';
    public $join3 = 'tb_kelas.id = tb_pelanggaran.class_id';
    public $join4 = 'tb_tipe_pelanggaran.id = tb_pelanggaran.tipe_id';
    public $join5 = 'tb_siswa.nisn = tb_pelanggaran.nisn';
    public $field_student = 'nisn';
    public $id = 'id';
    public $id_order_by = 'tb_pelanggaran.id';
    public $order_by = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }



    public function TopPelanggaran()
    {
        $this->db->select('tb_pelanggaran.id');
        $this->db->select('count(tb_pelanggaran.id) as total_pelanggaran');
        $this->db->select('tb_pelanggaran.tipe_id');
        $this->db->select('tb_tipe_pelanggaran.nama_pelanggaran');
        $this->db->from('tb_pelanggaran');
        $this->db->join('tb_tipe_pelanggaran', 'tb_pelanggaran.tipe_id = tb_tipe_pelanggaran.id');
        $this->db->group_by('tb_pelanggaran.tipe_id');
        $this->db->order_by('total_pelanggaran', 'desc');
        $this->db->limit(5);
        $query = $this->db->get();

        return $query->result();
    }

    public function TopMurid()
    {
        $this->db->select('SUM(tb_pelanggaran.poin) as total_poin');
        $this->db->select('count(tb_pelanggaran.id) as total_pelanggaran');
        $this->db->select('tb_pelanggaran.tipe_id');
        $this->db->select('tb_siswa.nama_siswa');
        $this->db->select('tb_siswa.nisn');
        $this->db->from('tb_pelanggaran');
        $this->db->join('tb_siswa', 'tb_pelanggaran.nisn = tb_siswa.nisn', 'left');
        $this->db->group_by('tb_pelanggaran.nisn');
        $this->db->order_by('total_poin', 'desc');
        $this->db->limit(5);
        $query = $this->db->get();

        return $query->result();
    }

    public function TotalDataPelanggaran($conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start(); // Mulai grup untuk kondisi pencarian
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value); // Tambahkan kondisi LIKE
            }
            $this->db->group_end(); // Tutup grup
        }

        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function DataPelanggaran($limit, $start, $conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start();
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value);
            }
            $this->db->group_end();
        }
        $this->db->select($this->table . '.*, ' . $this->table_join5 . '.nisn as violation_id, siswa.nama_siswa, kelas.nama_kelas, guru.nama_guru, wali.nama_wali, kelas.wali_kelas, tipe_pelanggaran.nama_pelanggaran');
        $this->db->join($this->table_join5, $this->join5);
        $this->db->join('tb_siswa siswa', 'siswa.nisn = ' . $this->table . '.nisn', 'left');
        $this->db->join('tb_kelas kelas', 'siswa.class_id = kelas.id', 'left');
        $this->db->join('tb_guru guru', 'guru.nik = ' . $this->table . '.nik', 'left');
        $this->db->join('tb_wali wali', 'wali.id = ' . $this->table . '.wali_id', 'left');
        $this->db->join('tb_tipe_pelanggaran tipe_pelanggaran', 'tipe_pelanggaran.id = ' . $this->table . '.tipe_id', 'left');
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->order_by($this->id_order_by, $this->order_by);
        $query = $this->db->get();
        return $query;
    }

    function DataPelanggaranPrint($id)
    {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_pelanggaran.id' => $id]);
        $query = $this->db->get();
        return $query;
    }

    public function CariTotalPelanggaranSiswa($id)
    {
        $this->db->select('SUM(poin) AS poin');
        $this->db->from('tb_pelanggaran');
        $this->db->where('nisn', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row(); // Return a single row
        } else {
            return null; // Return null if no rows found
        }
    }

    function getByID($id)
    {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_pelanggaran.id' => $id]);
        $query = $this->db->get();
        return $query;
    }

    public function getAllKategori()
    {
        $this->db->from('tb_tipe_pelanggaran');
        $query = $this->db->get();
        return $query->result();
    }

    // Check Data
    function CheckPelanggaranByID($id)
    {
        return $this->db->get_where($this->table_2, ['nisn' => 'nisn']); //Cek Data Pada Tabel Pelanggaran
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
}
