<?php 

class Siswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');
		$this->jurusan = ['Rekayasa Perangkat Lunak','Teknik Elektronika Industri','Teknik Komputer dan Jaringan','Teknik Sepeda Motor','Teknik Kendaraan Ringan'];
	}
	public function index()
	{
		$data['judul'] = 'daftar siswa';
		$data['siswa'] = $this->Siswa_model->getAllsiswa();
		if ($this->input->post('keyword')) {
			$data['siswa'] = $this->Siswa_model->cariDataSiswa();
		} 
		$this->load->view('templates/header',$data);
		$this->load->view('siswa/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['jurusan'] = $this->jurusan;
		$data['judul'] = 'tambah data siswa';
		$this->form_validation->set_rules('nama','nama','required'); // nama yang ke dua adalah untuk nama alias
		$this->form_validation->set_rules('nisn','nisn','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');
		
		if ($this->form_validation->run()== FALSE) {
		$this->load->view('templates/header',$data);
		$this->load->view('siswa/tambah');
		$this->load->view('templates/footer');
		} else {
			$this->Siswa_model->tambahDataSiswa();
			$this->session->set_flashdata('flash','ditambahkan!');
			redirect('siswa');
		}
		

	}

	public function hapus($id){
		$this->Siswa_model->hapusDataSiswa($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('siswa');
	}
	public function detail($id)
	{
		$data['judul'] = 'detail data siswa';
		$data['siswa'] = $this->Siswa_model->getSiswaById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('siswa/detail',$data);
		$this->load->view('templates/footer');
	}

		public function ubah($id)
	{
		$data['jurusan'] = $this->jurusan;
		$data['judul'] = 'ubah data siswa';
		$data['siswa'] = $this->Siswa_model->getSiswaById($id);
		$this->form_validation->set_rules('nama','nama','required'); // nama yang ke dua adalah untuk nama alias
		$this->form_validation->set_rules('nisn','nisn','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');
		if ($this->form_validation->run()== FALSE) {
		$this->load->view('templates/header',$data);
		$this->load->view('siswa/ubah',$data);
		$this->load->view('templates/footer');
		} else {
			$this->Siswa_model->ubahDataSiswa();
			$this->session->set_flashdata('flash','diubah!');
			redirect('siswa');
		}
		

	}
}


 ?>