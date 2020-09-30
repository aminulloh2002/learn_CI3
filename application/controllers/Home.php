<?php 
class Home extends CI_Controller {
	public function index($nama = 'aminulloh'){
		$data['judul'] = 'Halaman Home';
		$data['nama'] = "nama saya ".$nama; 
		$this->load->view('templates/header.php',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer.php');
	}
}

 ?>