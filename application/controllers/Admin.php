<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->session('Admin');
        $this->load->model(array('Main_model', 'Pelanggaran_model', 'Siswa_model', 'Kebaikan_model'));
    }

    public function index()
    {
        $data = [
            'page' => 'Admin Dashboard',
            'login' => $this->data_user(),
            'total_siswa' => $this->db->count_all('tb_siswa'),
            'total_guru' => $this->db->count_all('tb_guru'),
            'total_wali' => $this->db->count_all('tb_wali'),
            'total_pelanggaran' => $this->db->count_all('tb_pelanggaran'),
            'top_pelanggaran' => $this->Pelanggaran_model->TopPelanggaran(),
            'top_kebaikan' => $this->Kebaikan_model->TopKebaikan(),
            'top_murid' => $this->Pelanggaran_model->TopMurid(),
            'top_murid_kebaikan' => $this->Kebaikan_model->TopMurid()
        ];
        $this->template_admin('admin/dashboard', $data);
    }

    // ==== SEARCH ==== //
    public function search($nisn)
    {
        if (!isset($nisn)) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('admin/dashboard');
        }
        if (count($this->uri->segment_array()) > 4) {
            redirect('admin/dashboard');
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
        $config['base_url'] = site_url('admin/search/' . $nisn . '');
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
        $data['total_poin'] = $this->Pelanggaran_model->CariTotalPelanggaranSiswa($siswa->id)->poin;
        $data['login'] = $this->data_user();
        $this->template_admin('search', $data);
    }

    public function search_kebaikan($nisn)
    {
        if (!isset($nisn)) {
            $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
            redirect('admin/dashboard');
        }
        if (count($this->uri->segment_array()) > 4) {
            redirect('admin/dashboard');
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
        $config['base_url'] = site_url('admin/search/' . $nisn . '');
        $config['total_rows'] = $this->Siswa_model->TotalDataKebaikanSiswa(['nisn' => $nisn]);
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
        $data['list'] = $this->Siswa_model->DataKebaikanSiswa($config['per_page'], $data['uri'], ['nisn' => $nisn]);
        $data['total_rows'] = $config['total_rows'];
        $data['pagination'] = $this->pagination->create_links();
        $data['page'] = 'Search ' . $nisn;
        $data['siswa'] = $siswa;
        $data['total_poin'] = $this->Kebaikan_model->CariTotalKebaikanSiswa($siswa->id)->poin;
        $data['login'] = $this->data_user();
        $this->template_admin('search_kebaikan', $data);
    }
}
