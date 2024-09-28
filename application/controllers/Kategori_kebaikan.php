<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_kebaikan extends MY_Controller {

    function __construct(){
        parent::__construct();   
        $this->session('Admin');
        $this->load->model(array('Kategorikebaikan_model', 'Main_model'));
    }
    
    // ==== Kategori Kebaikan ==== //
    public function index(){
        $keyword = $this->input->get('search', true);
        $keyword = $this->db->escape_str($keyword);
        
        $config['per_page'] = 20;  
        $config['base_url'] = site_url('kategori_kebaikan/index');
        $config['total_rows'] = $this->Kategorikebaikan_model->TotalDataKategoriKebaikan(['nama_kebaikan' => $keyword]);  
        $per_page = $config['per_page'];
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $per_page;
        $config['num_links'] = 2;
        
        if ($keyword <> '') {
            $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        } else if (http_build_query($_GET, '', "&")) {
            $config['suffix'] = '?' . http_build_query($_GET, '', "&"); 
        } else {
            $config['suffix'] = '' . http_build_query($_GET, '', "&");    
        }
    
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<ul class="pagination"><li class="page-item">';
        $config['full_tag_close']   = '</ul></li>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
    
        $this->pagination->initialize($config);
        $data['uri'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['list_kebaikan'] = $this->Kategorikebaikan_model->DataKategoriKebaikan($config['per_page'], $data['uri'], ['nama_kebaikan' => $keyword]);
        $data['page'] = 'List Kategori Kebaikan';
        $data['login'] = $this->data_user();
        $data['total_rows'] = $config['total_rows'];
        $data['pagination'] = $this->pagination->create_links();
        $this->template_admin('admin/list-kategori-kebaikan', $data);
    }    

    public function tambah() {
        if (count($this->uri->segment_array()) > 2) {
            redirect('admin');
        }            
        if (count($this->input->post())) {
            if ($this->form_validation('kategori-kebaikan') == true) { 
                $post_name = $this->db->escape_str($this->input->post('name', true));
                $post_point = $this->db->escape_str($this->input->post('point', true));
    
                $data = [
                    'nama_kebaikan' => $post_name,
                    'poin_kebaikan' => $post_point
                ];   
                
                log_message('info', 'Data to insert: ' . json_encode($data)); // Log the data to insert
    
                $insert = $this->Kategorikebaikan_model->insert($data);
                if ($insert) {
                    $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil', 'msg' => 'Data Baru Berhasil Ditambahkan']);
                    redirect('kategori_kebaikan');
                } else {
                    $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Terjadi Kesalahan']);
                }
            } else {
                log_message('error', 'Form validation failed: ' . validation_errors());
            }
        }
        $data['login'] = $this->data_user();
        $data['page'] = 'Tambah Kategori Kebaikan';
        $this->template_admin('admin/kategori-kebaikan/add', $data);                
    }    

    public function edit($id = null){
        if (count($this->uri->segment_array()) > 3) {
            redirect('admin');
        } 
        if (!isset($id)) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('kategori-kebaikan');
        } 
    
        if (!is_numeric($id)) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('kategori-kebaikan');
        } 
    
        $data_kategori_kebaikan = $this->Kategorikebaikan_model->getByID($this->db->escape_str(filter($id, true)));   
    
        if ($data_kategori_kebaikan->num_rows() == 0) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('kategori-kebaikan');
        }   
        
        if (count($this->input->post())) {
            if ($this->form_validation('kategori-kebaikan') == true) { 
                $post_name = $this->db->escape_str($this->input->post('name', true));
                $post_point = $this->db->escape_str($this->input->post('point', true));
                                
                $update_post = [
                    'nama_kebaikan' => $post_name,
                    'poin_kebaikan' => $post_point
                ];  
                $update = $this->Kategorikebaikan_model->update($update_post, $this->db->escape_str(filter($id, true)));
                if ($update == true) {
                    $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil!', 'msg' => 'Data Berhasil Di Ubah.']);
                    redirect('kategori-kebaikan');
                } else {
                    $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Terjadi Kesalahan.']);
                }
            }
        }
    
        $data['tipe_kebaikan'] = $data_kategori_kebaikan->row();
        $data['page'] = 'Edit Kategori Kebaikan';
        $data['login'] = $this->data_user();
        $this->template_admin('admin/kategori-kebaikan/edit', $data);
    }
                  
    public function hapus(){   
        if (count($this->input->post())) {
            $post_id = $this->input->post($this->db->escape_str(filter('id', true)));
            $data_kategori_kebaikan = $this->Kategorikebaikan_model->getByID($post_id);   
            if ($data_kategori_kebaikan->num_rows() == 0) {
                $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                redirect('kategori-kebaikan');
            } else {
                $delete = $this->Kategorikebaikan_model->delete($post_id);
                if ($delete == true) {
                    $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil!', 'msg' => 'Data Berhasil Di Hapus.']);
                    redirect('kategori-kebaikan');
                } else {
                    $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Terjadi Kesalahan.']);
                    redirect('kategori-kebaikan');
                }
            }
        }
    }               

}
