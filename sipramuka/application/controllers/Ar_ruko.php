<?php
	class Ar_ruko extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_Ruko');
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
		$this->M_Ruko->input_data($data,'tb_ruko');
		redirect('admin/ar_ruko');
		
	}

	public function hapus($id_ruko){

        $this->load->model('M_Ruko');
		$where = array('id_ruko' => $id_ruko);
		$this->M_Ruko->hapus_data($where,'tb_ruko');
		redirect('admin/ar_ruko');
	}

	public	function edit($id_ruko){

        $this->load->model('M_Ruko');	
		$where = array('id_ruko' => $id_ruko);
		$data['tb_ruko'] = $this->M_Ruko->edit_data($where,'tb_ruko')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_ruko_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_Ruko');
		$id_ruko 	   = $this->input->post('id_ruko');
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
				'id_ruko'      => $id_ruko,
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
				'id_ruko' => $id_ruko
			);

			$this->M_Ruko->update_data($where,$data,'tb_ruko');
			redirect('admin/ar_ruko');
	}

	public function detail_ruko($id_ruko){

		$this->load->model('M_Ruko');
		$detail_ruko = $this->M_Ruko->detail_data($id_ruko);
		$data['detail_ruko'] = $detail_ruko;		
		$this->load->view('home/header');
		$this->load->view('home/detail_ruko',$data);
		$this->load->view('home/footer');	
	
	}


}
