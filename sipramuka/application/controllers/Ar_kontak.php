<?php
	class Ar_kontak extends CI_Controller{
		 

	 function __construct(){
		parent::__construct();		
		$this->load->model('M_Kontak');
		$this->load->helper('url');
  }
	
	public function tambah_aksi(){
    	$no_kantor  	   = $this->input->post('no_kantor');
		$email_kantor		=$this->input->post('email_kantor');
		$website   = $this->input->post('website');
		$alamat_kantor		= $this->input->post('alamat_kantor');
		$maps	   = $this->input->post('maps');
		$data = array(
				'no_kantor'    => $no_kantor,
				'email_kantor' => $email_kantor,
				'website' => $website,
				'alamat_kantor'=> $alamat_kantor,
 				'maps'    => $maps,
					);
		$this->M_Kontak->input_data($data,'tb_kontak');
		redirect('admin/ar_kontak');
		
	}

	public function hapus($id_kontak){

        $this->load->model('M_Kontak');
		$where = array('id_kontak' => $id_kontak);
		$this->M_Kontak->hapus_data($where,'tb_kontak');
		redirect('admin/ar_kontak');
	}

	public	function edit($id_kontak){

        $this->load->model('M_Kontak');	
		$where = array('id_kontak' => $id_kontak);
		$data['tb_kontak'] = $this->M_Kontak->edit_data($where,'tb_kontak')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_kontak_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){
	$id_kontak 	   = $this->input->post('id_kontak');
		$no_kantor  	   = $this->input->post('no_kantor');
		$email_kantor   = $this->input->post('email_kantor');
		$website   = $this->input->post('website');
		$alamat_kantor	= $this->input->post('alamat_kantor');
		$maps   = $this->input->post('maps');

		
			$data = array(
				'id_kontak'      => $id_kontak,
				'no_kantor'    => $no_kantor,
				'email_kantor' => $email_kantor,
				'website' => $website,
				'alamat_kantor' => $alamat_kantor,
				'maps'    => $maps,
					);
			$where = array(
				'id_kontak' => $id_kontak
			);

			$this->M_Kontak->update_data($where,$data,'tb_kontak');
			redirect('admin/ar_kontak');
	}

	

}
