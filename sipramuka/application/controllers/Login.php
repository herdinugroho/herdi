<?php

 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');
		$this->load->helper('url'); 


	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_Login->cek_login("tb_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'password' => $password,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

	
	public function tambah_aksi(){
		$this->load->model('M_Login');
    	$username  	   = $this->input->post('username');
		$password		=$this->input->post('password');
		
		$data = array(
				'username'    => $username,
				'password' => md5($password),
				
					);
		$this->M_Login->input_data($data,'tb_admin');
		redirect('admin/v_tambah_akun');
		
	}

		public function hapus($id_user){

        $this->load->model('M_Login');
		$where = array('id_user' => $id_user);
		$this->M_Login->hapus_data($where,'tb_admin');
		redirect('admin/v_tambah_akun');
	}


	public	function edit($id_user){

        $this->load->model('M_Login');	
		$where = array('id_user' => $id_user);
		$data['tb_admin'] = $this->M_Login->edit_data($where,'tb_admin')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_edit_akun',$data);
		$this->load->view('admin/footer');
	}

	public function update(){
	$id_user 	   = $this->input->post('id_user');
		$username  	   = $this->input->post('username');
		$password   = $this->input->post('password');
		
			$data = array(
				'id_user'      => $id_user,
				'username'    => $username,
				'password' => md5($password),
					);
			$where = array(
				'id_user' => $id_user
			);

			$this->M_Login->update_data($where,$data,'tb_admin');
			redirect('admin/v_tambah_akun');
	}




}