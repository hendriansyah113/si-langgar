<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    private $table = 'tb_users';
    public $id = 'id';
    public $order_by = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    // ========================== Check Data Users
    function CheckDataUser($username)
    {
        $this->db->where("username = '$username'");
        return $this->db->get($this->table);
    }

    function VerifPass($username, $password)
    {
        $this->db->where("username = '$username'");
        $CekUser = $this->db->get($this->table)->result_array();
        foreach ($CekUser as $DataUser) {
        }
        //Verif Password
        if (password_verify($password, $DataUser['password'])) {
            return true;
        } else {
            return false;
        }
    }
    // ambil data berdasarkan cookie
    function get_by_cookie($cookie)
    {
        $this->db->where('remember_me', $cookie);
        return $this->db->get($this->table);
    }

    function change_password($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    function update_cookie($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    public function TotalDataUsers($conditions = [])
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

    public function DataUsers($limit, $start, $conditions = [])
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
}
