<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kebaikan extends MY_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->session('Guru');
                $this->session('Kepala Sekolah');
                $this->load->model(array('Kebaikan_model', 'Guru_model', 'Kategorikebaikan_model'));
        }
        // ==== Kebaikan ==== //
        public function index()
        {
                $keyword = $this->db->escape_str(filter($this->input->get('search', true)));
                $config['per_page'] = 20;  //show record per halaman
                $config['base_url'] = site_url('kebaikan/index');
                $config['total_rows'] = $this->Kebaikan_model->TotalDataKebaikan(['tb_siswa.nisn' => $keyword]);
                $per_page = $config['per_page'];
                $config['uri_segment'] = 3;  // uri parameter
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
                $data['list'] = $this->Kebaikan_model->DataKebaikan($config['per_page'], $data['uri'], ['tb_siswa.nisn' => $keyword]);
                $data['page'] = 'List Kebaikan';
                $data['login'] = $this->data_user();
                $data['point'] = $this->db->get_where('tb_website', ['id' => '1'])->row('point');
                $data['total_rows'] = $config['total_rows'];
                $data['pagination'] = $this->pagination->create_links();
                $data['is_kepala_sekolah'] = $this->data_user()->level == 'Kepala Sekolah';
                if ($this->data_user()->level == 'Admin') {
                        $this->template_admin('admin/list-kebaikan', $data);
                } else {
                        $this->template('list-kebaikan', $data);
                }
        }


        public function tambah()
        {
                log_message('debug', 'Kebaikan tambah dipanggil');
                if ($this->input->post()) {
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
                        $this->form_validation->set_rules('siswa', 'Siswa', 'required');
                        $this->form_validation->set_rules('pelapor', 'Pelapor', 'required');
                        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
                        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

                        if ($this->form_validation->run() == true) {
                                $post_kelas = $this->input->post('kelas', true);
                                $post_siswa = $this->input->post('siswa', true);
                                $post_pelapor = $this->input->post('pelapor', true);
                                $post_kategori = $this->input->post('kategori', true);
                                $post_catatan = $this->input->post('catatan', true);

                                // Lakukan pengecekan data yang diperlukan
                                // Misalnya, pastikan kelas, siswa, pelapor, dan kategori ada dalam database
                                $data_guru = db_query('tb_guru', array('id' => $post_pelapor));
                                $data_kelas = db_query('tb_kelas', array('id' => $post_kelas));
                                $data_siswa = db_query('tb_siswa', array('id' => $post_siswa));
                                $data_kategori = db_query('tb_tipe_kebaikan', array('id' => $post_kategori));
                                $data_wali = db_query('tb_wali', array('id' => $post_siswa));

                                if ($data_kelas['count'] == 0) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Data Kelas Tidak Tersedia']);
                                } else if ($data_siswa['count'] == 0) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Data Siswa Tidak Tersedia']);
                                } else if ($data_guru['count'] == 0) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Data Guru Tidak Tersedia']);
                                } else if ($data_kategori['count'] == 0) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Data Kategori Tidak Tersedia']);
                                } else {
                                        // Semua data tersedia, lakukan penambahan data ke tabel
                                        $data = [
                                                'nisn' => $data_siswa['rows']['nisn'],
                                                'student_id' => $data_siswa['rows']['id'],
                                                'class_id' => $data_kelas['rows']['id'],
                                                'teacher_id' => $data_guru['rows']['id'],
                                                'wali_id' => $data_wali['rows']['id'],
                                                'type_id' => $data_kategori['rows']['id'],
                                                'note' => $post_catatan,
                                                'point' => $data_kategori['rows']['poin_kebaikan'],
                                                'reported_on' => date('Y-m-d')
                                        ];
                                        $insert = $this->Kebaikan_model->insert($data);
                                        if ($insert == true) {
                                                $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil', 'msg' => 'Kebaikan Baru Berhasil Ditambahkan']);
                                                redirect('kebaikan');
                                        } else {
                                                $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal', 'msg' => 'Terjadi Kesalahan']);
                                        }
                                }
                        } else {
                                // Form validation failed
                                // Handle errors or display message
                        }
                } else {
                        // No POST data received
                        // Display form
                        $data['login'] = $this->data_user();
                        $data['page'] = 'Tambah Kebaikan';
                        $data['guru'] = $this->Guru_model->view()->result();
                        $data['kategori'] = $this->Kategorikebaikan_model->view();
                        if ($this->data_user()->level == 'Admin') {
                                $this->template_admin('admin/kebaikan/add', $data);
                        } else {
                                $this->template('kebaikan/add', $data);
                        }
                }
        }


        public function edit($id = null)
        {
                if (count($this->uri->segment_array()) > 3) {
                        redirect('admin');
                }
                if (!isset($id)) {
                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                        redirect('kebaikan');
                }

                if (!is_numeric($id)) {
                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                        redirect('kebaikan');
                }

                $data_kebaikan = $this->Kebaikan_model->getByID($this->db->escape_str(filter($id, true)));

                if ($data_kebaikan->num_rows() == 0) {
                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                        redirect('kebaikan');
                }
                if (count($this->input->post())) {
                        if ($this->form_validation('kebaikan') == true) {
                                $post_kelas = $this->db->escape_str(filter($this->input->post('kelas', true)));
                                $post_siswa = $this->db->escape_str(filter($this->input->post('siswa', true)));
                                $post_pelapor = $this->db->escape_str(filter($this->input->post('pelapor', true)));
                                $post_kategori = $this->db->escape_str(filter($this->input->post('kategori', true)));
                                $post_catatan = $this->db->escape_str(filter($this->input->post('catatan', true)));

                                if (empty($post_kelas)) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Kelas wajib dipilih.']);
                                        redirect('kebaikan/edit/' . $id);
                                }
                                if (empty($post_siswa)) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Siswa wajib dipilih.']);
                                        redirect('kebaikan/edit/' . $id);
                                }
                                if (empty($post_pelapor)) {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Pelapor wajib dipilih.']);
                                        redirect('kebaikan/edit/' . $id);
                                }

                                $data_guru = db_query('tb_guru', array('id' => $post_pelapor));
                                $data_kelas = db_query('tb_kelas', array('id' => $post_kelas));
                                $data_siswa = db_query('tb_siswa', array('id' => $post_siswa));
                                $data_kategori = db_query('tb_tipe_kebaikan', array('id' => $post_kategori));
                                $data_wali = db_query('tb_wali', array('id' => $post_siswa));

                                $data = [
                                        'nisn' => $data_siswa['rows']['nisn'],
                                        'student_id' => $data_siswa['rows']['id'],
                                        'class_id' => $data_kelas['rows']['id'],
                                        'teacher_id' => $data_guru['rows']['id'],
                                        'wali_id' => $data_wali['rows']['id'],
                                        'type_id' => $data_kategori['rows']['id'],
                                        'note' => $post_catatan,
                                        'point' => $data_kategori['rows']['get_point'],
                                        'reported_on' => date('Y-m-d H:i:s')
                                ];
                                $update = $this->Kebaikan_model->update($data, $this->db->escape_str(filter($id, true)));

                                if ($update == true) {
                                        $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil!', 'msg' => 'Data Berhasil Di Ubah.']);
                                        redirect('kebaikan');
                                } else {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Terjadi Kesalahan.']);
                                }
                        }
                }
                $data['kategori'] = $this->Kebaikan_model->getAllKategori();
                $data['kebaikan'] = $data_kebaikan->row();
                $data['page'] = 'Edit Kebaikan';
                $data['login'] = $this->data_user();
                if ($this->data_user()->level == 'Admin') {
                        $this->template_admin('admin/kebaikan/edit', $data);
                } else {
                        $this->template('kebaikan/edit', $data);
                }
        }

        public function hapus()
        {
                if (count($this->input->post())) {
                        $post_id = $this->input->post($this->db->escape_str(filter('id', true)));
                        $data_kebaikan =  $this->Kebaikan_model->getByID($post_id);
                        if ($data_kebaikan->num_rows() == 0) {
                                $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                                redirect('kebaikan');
                        } else {
                                $delete = $this->Kebaikan_model->delete($post_id);
                                if ($delete == true) {
                                        $this->session->set_flashdata('result', ['alert' => 'success', 'title' => 'Berhasil!', 'msg' => 'Data Berhasil Di Hapus.']);
                                        redirect('kebaikan');
                                } else {
                                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Terjadi Kesalahan.']);
                                        redirect('kebaikan');
                                }
                        }
                }
        }

        public function print_kebaikan($id)
        {

                if (!isset($id)) {
                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                        redirect('kebaikan');
                }
                $data_kebaikan = $this->Kebaikan_model->getByID($this->db->escape_str(filter($id, true)));

                if ($data_kebaikan->num_rows() == 0) {
                        $this->session->set_flashdata('result', ['alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Data tidak ditemukan.']);
                        redirect('kebaikan');
                }
                $data['login'] = $this->data_user();
                $data['title'] = 'Cetak Laporan Kebaikan';
                $data['kebaikan'] = $this->Kebaikan_model->DataKebaikanPrint($id)->row();
                if ($this->data_user()->level == 'Admin') {
                        $this->load->view('admin/kebaikan/print', $data);
                } else {
                        $this->load->view('admin/kebaikan/print', $data);
                }
        }
}
