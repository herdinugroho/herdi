<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}


	function index()
	{	$this->load->model('M_Login');
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	public function ar_subsidi()
	{	
		$this->load->model('M_Subsidi');
		$data['ar_subsidi'] = $this->M_Subsidi->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_subsidi',$data);
		$this->load->view('admin/footer');
	}

	public function ar_cluster()
	{	
		$this->load->model('M_Cluster');
		$data['ar_cluster'] = $this->M_Cluster->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_cluster',$data);
		$this->load->view('admin/footer');
	}

	public function ar_ruko()
	{	
		$this->load->model('M_Ruko');
		$data['ar_ruko'] = $this->M_Ruko->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_ruko',$data);
		$this->load->view('admin/footer');
	}

	public function ar_rukost()
	{	
		$this->load->model('M_Rukost');
		$data['ar_rukost'] = $this->M_Rukost->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_rukost',$data);
		$this->load->view('admin/footer');
	}

	public function ar_kavling()
	{	
		$this->load->model('M_Kavling');
		$data['ar_kavling'] = $this->M_Kavling->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_kavling',$data);
		$this->load->view('admin/footer');
	}

	public function ar_kontak()
	{	
		$this->load->model('M_Kontak');
		$data['ar_kontak'] = $this->M_Kontak->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_kontak',$data);
		$this->load->view('admin/footer');
	}

	public function ar_profil()
	{	
		$this->load->model('M_Profil');
		$data['ar_profil'] = $this->M_Profil->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_profil',$data);
		$this->load->view('admin/footer');
	}

	public function ar_news()
	{	
		$this->load->model('M_News');
		$data['ar_news'] = $this->M_News->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_news',$data);
		$this->load->view('admin/footer');
	}

	public function v_tambah_akun(){
		$this->load->model('M_Login');
		$data['v_tambah_akun'] = $this->M_Login->tampil_data()-> result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambah_akun',$data);
		$this->load->view('admin/footer');
	}	

}
