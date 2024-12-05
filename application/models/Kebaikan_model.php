<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kebaikan_model extends CI_Model
{

    private $table = 'tb_kebaikan';
    private $table_join1 = 'tb_guru';
    private $table_join2 = 'tb_wali';
    private $table_join3 = 'tb_kelas';
    private $table_join4 = 'tb_tipe_kebaikan';
    private $table_join5 = 'tb_siswa';
    private $join1 = 'tb_guru.nik = tb_kebaikan.nik';
    private $join2 = 'tb_wali.id = tb_kebaikan.wali_id';
    private $join3 = 'tb_kelas.id = tb_kebaikan.class_id';
    private $join4 = 'tb_tipe_kebaikan.id = tb_kebaikan.tipe_id';
    private $join5 = 'tb_siswa.nisn = tb_kebaikan.nisn';
    private $id = 'id';
    private $id_order_by = 'tb_kebaikan.id';
    private $order_by = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }

    public function TopKebaikan()
    {
        $this->db->select('tb_kebaikan.id, count(tb_kebaikan.id) as total_kebaikan, tb_kebaikan.tipe_id, tb_tipe_kebaikan.violation_name');
        $this->db->from($this->table);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->group_by('tb_kebaikan.tipe_id');
        $this->db->order_by('total_kebaikan', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function TopMurid()
    {
        $this->db->select('SUM(tb_kebaikan.point) as total_poin, count(tb_kebaikan.id) as total_kebaikan, tb_kebaikan.tipe_id, tb_siswa.nama_siswa, tb_siswa.nisn');
        $this->db->from($this->table);
        $this->db->join($this->table_join5, $this->join5, 'left');
        $this->db->group_by('tb_kebaikan.nisn');
        $this->db->order_by('total_poin', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function TotalDataKebaikan($conditions = [])
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

    public function DataKebaikan($limit, $start, $conditions = [])
    {
        if (!empty($conditions)) {
            $this->db->group_start();
            foreach ($conditions as $field => $value) {
                $this->db->or_like($field, $value);
            }
            $this->db->group_end();
        }
        $this->db->select("$this->table.*, $this->table_join5.nisn as kebaikan_id, siswa.nama_siswa, kelas.nama_kelas, guru.nama_guru, wali.nama_wali, kelas.wali_kelas, tipe_kebaikan.nama_kebaikan");
        $this->db->join($this->table_join5, $this->join5, 'left');
        $this->db->join('tb_siswa siswa', 'siswa.nisn = ' . $this->table . '.nisn', 'left');
        $this->db->join('tb_kelas kelas', 'siswa.class_id = kelas.id', 'left');
        $this->db->join('tb_guru guru', 'guru.nik = ' . $this->table . '.nik', 'left');
        $this->db->join('tb_wali wali', 'wali.id = ' . $this->table . '.wali_id', 'left');
        $this->db->join('tb_tipe_kebaikan tipe_kebaikan', 'tipe_kebaikan.id = ' . $this->table . '.tipe_id', 'left');
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->order_by($this->id_order_by, $this->order_by);
        $query = $this->db->get();
        return $query;
    }

    public function DataKebaikanPrint($id)
    {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_kebaikan.id' => $id]);
        return $this->db->get();
    }

    public function CariTotalKebaikanSiswa($id)
    {
        $this->db->select('SUM(point) AS point');
        $this->db->from($this->table);
        $this->db->where('nisn', $id);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->row() : null;
    }

    public function getByID($id)
    {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_kebaikan.id' => $id]);
        return $this->db->get();
    }

    public function getAllKategori()
    {
        $this->db->from('tb_tipe_kebaikan');
        $query = $this->db->get();
        return $query->result();
    }

    public function CheckKebaikanByID($id)
    {
        return $this->db->get_where($this->table, ['nisn' => $id]);
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array($this->id => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array($this->id => $id));
    }

    public function delete_kebaikan($id)
    {
        return $this->db->delete($this->table, array($this->class_id => $id));
    }
}
