<?php
	class Ar_profil extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_Profil');
		$nama_marketing  	   = $this->input->post('nama_marketing');
		$jabatan		=$this->input->post('jabatan');
		$wa   = $this->input->post('wa');
		$nohp		= $this->input->post('nohp');
		$foto	   = $this->input->post('foto');

		if ($foto=''){}else{
			$config['upload_path']	 = './assets/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{

				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
				'nama_marketing'    => $nama_marketing,
				'jabatan' => $jabatan,
				'wa' => $wa,
				'nohp'=> $nohp,
 				'foto'    => $foto,
					);
		$this->M_Profil->input_data($data,'tb_profil');
		redirect('admin/ar_profil');
		
	}

	public function hapus($id_profil){

        $this->load->model('M_Profil');
		$where = array('id_profil' => $id_profil);
		$this->M_Profil->hapus_data($where,'tb_profil');
		redirect('admin/ar_profil');
	}

	public	function edit($id_profil){

        $this->load->model('M_Profil');	
		$where = array('id_profil' => $id_profil);
		$data['tb_profil'] = $this->M_Profil->edit_data($where,'tb_profil')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_profil_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_Profil');
		$id_profil 	   = $this->input->post('id_profil');
		$nama_marketing  	   = $this->input->post('nama_marketing');
		$jabatan   = $this->input->post('jabatan');
		$wa   = $this->input->post('wa');
		$nohp	= $this->input->post('nohp');
		$foto	   = $_FILES['foto'];
		
		if ($foto=''){}else{
			$config['upload_path']	 = './assets/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{

				$foto=$this->upload->data('file_name');
			}

		}

			$data = array(
				'id_profil'      => $id_profil,
				'nama_marketing'    => $nama_marketing,
				'jabatan' => $jabatan,
				'wa' => $wa,
				'nohp' => $nohp,
				'foto'    => $foto,
					);
			$where = array(
				'id_profil' => $id_profil
			);

			$this->M_Profil->update_data($where,$data,'tb_profil');
			redirect('admin/ar_profil');
	}

	

}
