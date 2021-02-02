<?php
	class Ar_rukost extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_Rukost');
		$namarumah  	   = $this->input->post('namarumah');
		$desc		=$this->input->post('desc');
		$detail   = $this->input->post('detail');
		$harga		= $this->input->post('harga');
		$alamat		= $this->input->post('alamat');
		$peta		= $this->input->post('peta');
		$foto	   = $_FILES['foto'];
		$foto1		=$_FILES['foto1'];
		$foto2		=$_FILES['foto2'];
		$foto3	   = $_FILES['foto3'];
		$foto4		=$_FILES['foto4'];
		$foto5		=$_FILES['foto5'];

		if ($foto=''){}else{
			$config['upload_path']	 = './assets/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{

				$foto=$this->upload->data('file_name');
			}

			if(!$this->upload->do_upload('foto1')){
				echo "Upload Gagal"; die();
			}else{

				$foto1=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto2')){
				echo "Upload Gagal"; die();
			}else{

				$foto2=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto3')){
				echo "Upload Gagal"; die();
			}else{

				$foto3=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto4')){
				echo "Upload Gagal"; die();
			}else{

				$foto4=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto5')){
				echo "Upload Gagal"; die();
			}else{

				$foto5=$this->upload->data('file_name');
			}

		}

		$data = array(
				'namarumah'    => $namarumah,
				'desc' => $desc,
				'detail' => $detail,
				'harga'=> $harga,
				'alamat' => $alamat,
				'peta' => $peta,
 				'foto'    => $foto,
 				'foto1'    => $foto1,
 				'foto2'    => $foto2,
 				'foto3'    => $foto3,
 				'foto4'    => $foto4,
 				'foto5'    => $foto5,
					);
		$this->M_Rukost->input_data($data,'tb_rukost');
		redirect('admin/ar_rukost');
		
	}

	public function hapus($id_rukost){

        $this->load->model('M_Rukost');
		$where = array('id_rukost' => $id_rukost);
		$this->M_Rukost->hapus_data($where,'tb_rukost');
		redirect('admin/ar_rukost');
	}

	public	function edit($id_rukost){

        $this->load->model('M_Rukost');	
		$where = array('id_rukost' => $id_rukost);
		$data['tb_rukost'] = $this->M_Rukost->edit_data($where,'tb_rukost')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_rukost_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_Rukost');
		$id_rukost 	   = $this->input->post('id_rukost');
		$namarumah  	   = $this->input->post('namarumah');
		$desc   = $this->input->post('desc');
		$detail   = $this->input->post('detail');
		$harga	= $this->input->post('harga');
		$alamat	= $this->input->post('alamat');
		$peta = $this->input->post('peta');
		$foto	   = $_FILES['foto'];
		$foto1		=$_FILES['foto1'];
		$foto2		=$_FILES['foto2'];
		$foto3		=$_FILES['foto3'];
		$foto4		=$_FILES['foto4'];
		$foto5		=$_FILES['foto5'];
		
		if ($foto=''){}else{
			$config['upload_path']	 = './assets/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{

				$foto=$this->upload->data('file_name');
			}

			if(!$this->upload->do_upload('foto1')){
				echo "Upload Gagal"; die();
			}else{

				$foto1=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto2')){
				echo "Upload Gagal"; die();
			}else{

				$foto2=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto3')){
				echo "Upload Gagal"; die();
			}else{

				$foto3=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto4')){
				echo "Upload Gagal"; die();
			}else{

				$foto4=$this->upload->data('file_name');
			}
			if(!$this->upload->do_upload('foto5')){
				echo "Upload Gagal"; die();
			}else{

				$foto5=$this->upload->data('file_name');
			}
		}

			$data = array(
				'id_rukost'      => $id_rukost,
				'namarumah'    => $namarumah,
				'desc' => $desc,
				'detail' => $detail,
				'harga' => $harga,
				'alamat' => $alamat,
				'peta' => $peta,
				'foto'    => $foto,
				'foto1'    => $foto1,
 				'foto2'    => $foto2,
 				'foto3'    => $foto3,
 				'foto4'    => $foto4,
 				'foto5'    => $foto5,
					);
			$where = array(
				'id_rukost' => $id_rukost
			);

			$this->M_Rukost->update_data($where,$data,'tb_rukost');
			redirect('admin/ar_rukost');
	}

	public function detail_rukost($id_rukost){

		$this->load->model('M_Rukost');
		$detail_rukost = $this->M_Rukost->detail_data($id_rukost);
		$data['detail_rukost'] = $detail_rukost;		
		$this->load->view('home/header');
		$this->load->view('home/detail_rukost',$data);
		$this->load->view('home/footer');	
	
	}


}
