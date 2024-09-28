<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();   
        $this->load->model(array('Pelanggaran_model', 'Siswa_model'));
		if(!$this->session->userdata('login') == true) {
			redirect('auth/login', 'refresh');
		}
	}

	public function index(){
		$data = [	'page' => 'Dashboard',
					'login' => $this->data_user(),
					'total_siswa' => $this->db->count_all('tb_siswa'),
					'total_guru' => $this->db->count_all('tb_guru'),
					'total_wali' => $this->db->count_all('tb_wali'),
					'total_pelanggaran' => $this->db->count_all('tb_pelanggaran'),
					'top_pelanggaran' => $this->Pelanggaran_model->TopPelanggaran(),
					'top_murid' => $this->Pelanggaran_model->TopMurid()
				];
		$this->template('dashboard', $data);
	}

    public function search($nisn){
        if (!isset($nisn)) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('dashboard');
        } 
        if (count($this->uri->segment_array()) > 4) {
            redirect('dashboard');
        }
        if (http_build_query($_GET, '', "&")) {
            $config['suffix'] = '?' . http_build_query($_GET, '', "&"); 
        } else {
            $config['suffix'] = '' . http_build_query($_GET, '', "&");    
        }
    
        $cek_siswa = $this->Siswa_model->CariSiswa($this->db->escape_str(filter($nisn)));
        $siswa = $cek_siswa->row();
        if ($cek_siswa->num_rows() == 0) {
            $data['hasil'] = 'Tidak Ditemukan';
        } else {
            $data['hasil'] = 'Ditemukan';
        }
    
        $config['per_page'] = 20;  //show record per halaman
        $config['base_url'] = site_url('dashboard/search/'.$nisn.'');
        $config['total_rows'] = $this->Siswa_model->TotalDataPelanggaranSiswa(['nisn' => $nisn]);  
        $per_page = $config['per_page'];
        $config['uri_segment'] = 4;  // uri parameter
        $choice = $config['total_rows'] / $per_page;
        $config['num_links'] = 2;
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<ul class="pagination"><li class="page-item">';
        $config['full_tag_close'] = '</ul></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
    
        $this->pagination->initialize($config);
        $data['uri'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['list'] = $this->Siswa_model->DataPelanggaranSiswa($config['per_page'], $data['uri'], ['nisn' => $nisn]);
        $data['total_rows'] = $config['total_rows'];
        $data['pagination'] = $this->pagination->create_links();
        $data['page'] = 'Search ' . $nisn;
        $data['siswa'] = $siswa;
        $total_point_query = $this->Pelanggaran_model->CariTotalPelanggaranSiswa($siswa->id);
        $data['total_point'] = $total_point_query ? $total_point_query->point : 0;
        $data['login'] = $this->data_user();
        $this->template('search', $data);
    }    
}
