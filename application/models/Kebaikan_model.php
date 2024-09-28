<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebaikan_model extends CI_Model {

    private $table = 'tb_kebaikan';
    private $table_join1 = 'tb_guru';
    private $table_join2 = 'tb_wali';
    private $table_join3 = 'tb_kelas';
    private $table_join4 = 'tb_tipe_kebaikan';
    private $table_join5 = 'tb_siswa';
    private $join1 = 'tb_guru.id = tb_kebaikan.teacher_id';
    private $join2 = 'tb_wali.id = tb_kebaikan.wali_id';
    private $join3 = 'tb_kelas.id = tb_kebaikan.class_id';
    private $join4 = 'tb_tipe_kebaikan.id = tb_kebaikan.type_id';
    private $join5 = 'tb_siswa.id = tb_kebaikan.student_id';
    private $id = 'id';
    private $id_order_by = 'tb_kebaikan.id';
    private $order_by = 'DESC';

    public function __construct() {
        parent::__construct();
    }

    public function TopKebaikan() {
        $this->db->select('tb_kebaikan.id, count(tb_kebaikan.id) as total_kebaikan, tb_kebaikan.type_id, tb_tipe_kebaikan.violation_name');
        $this->db->from($this->table);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->group_by('tb_kebaikan.type_id');
        $this->db->order_by('total_kebaikan', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function TopMurid() {
        $this->db->select('SUM(tb_kebaikan.point) as total_poin, count(tb_kebaikan.id) as total_kebaikan, tb_kebaikan.type_id, tb_siswa.std_name, tb_siswa.nisn');
        $this->db->from($this->table);
        $this->db->join($this->table_join5, $this->join5, 'left');
        $this->db->group_by('tb_kebaikan.student_id');
        $this->db->order_by('total_poin', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function TotalDataKebaikan($value = null) {
        if ($value) {
            $this->db->like($value);
        }
        $this->db->from($this->table);
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        return $this->db->count_all_results();
    }

    public function DataKebaikan($limit, $start, $value = null) {
        if ($value) {
            $this->db->like($value);
        }
        $this->db->select("$this->table.*, $this->table_join5.id as kebaikan_id, siswa.std_name, kelas.class_name, guru.teacher_name, wali.parent_name, kelas.wali_name, tipe_kebaikan.nama_kebaikan");
        $this->db->join($this->table_join5, $this->join5, 'left');
        $this->db->join('tb_siswa siswa', 'siswa.id = ' . $this->table . '.student_id', 'left');
        $this->db->join('tb_kelas kelas', 'siswa.class_id = kelas.id', 'left');
        $this->db->join('tb_guru guru', 'guru.id = ' . $this->table . '.teacher_id', 'left');
        $this->db->join('tb_wali wali', 'wali.id = ' . $this->table . '.wali_id', 'left');
        $this->db->join('tb_tipe_kebaikan tipe_kebaikan', 'tipe_kebaikan.id = ' . $this->table . '.type_id', 'left');
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->order_by($this->id_order_by, $this->order_by);
        return $this->db->get();
    }

    public function DataKebaikanPrint($id) {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_kebaikan.id' => $id]);
        return $this->db->get();
    }

    public function CariTotalKebaikanSiswa($id) {
        $this->db->select('SUM(point) AS point');
        $this->db->from($this->table);
        $this->db->where('student_id', $id);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->row() : null;
    }

    public function getByID($id) {
        $this->db->join($this->table_join1, $this->join1);
        $this->db->join($this->table_join2, $this->join2);
        $this->db->join($this->table_join3, $this->join3);
        $this->db->join($this->table_join4, $this->join4);
        $this->db->join($this->table_join5, $this->join5);
        $this->db->from($this->table);
        $this->db->where(['tb_kebaikan.id' => $id]);
        return $this->db->get();
    }

    public function getAllKategori() {
        $this->db->from('tb_tipe_kebaikan');
        $query = $this->db->get();
        return $query->result();
    }

    public function CheckKebaikanByID($id) {
        return $this->db->get_where($this->table, ['student_id' => $id]);
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id) {
        return $this->db->update($this->table, $data, array($this->id => $id));
    }

    public function delete($id) {
        return $this->db->delete($this->table, array($this->id => $id));
    }

    public function delete_kebaikan($id) {
        return $this->db->delete($this->table, array($this->class_id => $id));
    }
}
