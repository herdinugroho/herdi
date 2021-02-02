<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	

       $this->load->view('home/header');
       $this->load->view('home/index');
       $this->load->view('home/footer');

	}

	public function r_subsidi()
	{
		$this->load->model('M_Subsidi');
		$data['ar_subsidi'] = $this->M_Subsidi->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/r_subsidi',$data);
		$this->load->view('home/footer');

	}

	public function searchsubsidi(){
		$this->load->model('M_Subsidi');
		$keyword = $this->input->post('keyword');
		$data ['ar_subsidi']=$this->M_Subsidi->get_keyword($keyword);
		$this->load->view('home/header');
		$this->load->view('home/r_subsidi',$data);
		$this->load->view('home/footer');
	}


	public function r_cluster()
	{
		$this->load->model('M_Cluster');
		$data['ar_cluster'] = $this->M_Cluster->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/r_cluster',$data);
		$this->load->view('home/footer');
	}

	public function searchcluster(){
		$this->load->model('M_Cluster');
		$keyword = $this->input->post('keyword');
		$data ['ar_cluster']=$this->M_Cluster->get_keyword($keyword);
		$this->load->view('home/header');
		$this->load->view('home/r_cluster',$data);
		$this->load->view('home/footer');
	}



	public function r_ruko()
	{
		$this->load->model('M_Ruko');
		$data['ar_ruko'] = $this->M_Ruko->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/r_ruko',$data);
		$this->load->view('home/footer');
	}
	public function searchruko(){
		$this->load->model('M_Ruko');
		$keyword = $this->input->post('keyword');
		$data ['ar_ruko']=$this->M_Ruko->get_keyword($keyword);
		$this->load->view('home/header');
		$this->load->view('home/r_ruko',$data);
		$this->load->view('home/footer');
	}




	public function r_rukost()
	{
		$this->load->model('M_Rukost');
		$data['ar_rukost'] = $this->M_Rukost->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/r_rukost',$data);
		$this->load->view('home/footer');
	}
	public function searchrukpst(){
		$this->load->model('M_Rukost');
		$keyword = $this->input->post('keyword');
		$data ['ar_rukost']=$this->M_Rukost->get_keyword($keyword);
		$this->load->view('home/header');
		$this->load->view('home/r_rukost',$data);
		$this->load->view('home/footer');
	}




	public function r_kavling()
	{
		$this->load->model('M_Kavling');
		$data['ar_kavling'] = $this->M_Kavling->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/r_kavling',$data);
		$this->load->view('home/footer');
	}
	public function searchkavling(){
		$this->load->model('M_Kavling');
		$keyword = $this->input->post('keyword');
		$data ['ar_kavling']=$this->M_Kavling->get_keyword($keyword);
		$this->load->view('home/header');
		$this->load->view('home/r_kavling',$data);
		$this->load->view('home/footer');
	}



	public function profil()
	{
		$this->load->model('M_Profil');
		$data['ar_profil'] = $this->M_Profil->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/profil',$data);
		$this->load->view('home/footer');
	
	}

	public function kontak()
	{
		$this->load->model('M_Kontak');
		$data['ar_kontak'] = $this->M_Kontak->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/kontak',$data);
		$this->load->view('home/footer');
	
	}

	public function news1()
	{
		$this->load->model('M_News');
		$data['ar_news'] = $this->M_News->tampil_data()-> result();
		$this->load->view('home/header');
		$this->load->view('home/news1',$data);
		$this->load->view('home/footer');
	
	}

	

	
}
