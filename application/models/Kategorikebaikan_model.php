<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategorikebaikan_model extends CI_Model
{

    private $table = 'tb_tipe_kebaikan';
    private $id = 'id';
    private $orderBy = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }

    public function totalDataKategoriKebaikan($value = null)
    {
        if (!empty($value)) {
            $this->db->like($value);
        }
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function dataKategoriKebaikan($limit, $start, $value = null)
    {
        if (!empty($value)) {
            $this->db->like($value);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by($this->id, $this->orderBy);
        $query = $this->db->get($this->table);
        return $query->result(); // returning result set as an array
    }

    public function view()
    {
        $query = $this->db->get($this->table);
        return $query->result(); // returning result set as an array
    }

    public function getByID($id)
    {
        return $this->db->get_where($this->table, [$this->id => $id]);
    }

    public function insert($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id(); // returning the last inserted ID
        } else {
            log_message('error', 'Insert failed: ' . $this->db->last_query());
            return false;
        }
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        if ($this->db->update($this->table, $data)) {
            return true;
        } else {
            log_message('error', 'Update failed: ' . $this->db->last_query());
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->delete($this->table);
    }
}
