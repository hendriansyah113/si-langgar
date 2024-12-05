<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{

    private $table = 'tb_guru';
    private $table_2 = 'tb_pelanggaran';
    public $nik = 'nik';
    public $id = 'id';
    public $id_pelanggaran = 'nik';
    public $order_by = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }

    public function TotalDataGuru($conditions = [])
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

    public function DataGuru($limit, $start, $conditions = [])
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
        $this->db->order_by($this->nik, $this->order_by);
        $query = $this->db->get();
        return $query;
    }

    function getByID($nik)
    {
        return $this->db->get_where($this->table, [$this->nik => $nik]);
    }

    function getByNIK($nik)
    {
        return $this->db->get_where($this->table, [$this->nik => $nik]);
    }

    function CheckByID($id)
    {
        return $this->db->get_where($this->table_2, [$this->id_pelanggaran => $id]); // Tabel Pelanggaran
    }

    function view()
    {
        return $this->db->get($this->table);
    }

    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function insert_id($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function update($data, $id)
    {
        return $this->db->update($this->table, $data, array($this->nik => $id));
    }

    function delete($nik)
    {
        return $this->db->delete($this->table, array($this->nik => $nik));
    }

    function delete_pelanggaran($nik)
    {
        return $this->db->delete($this->table_2, array($this->id_pelanggaran => $nik));
    }
}
