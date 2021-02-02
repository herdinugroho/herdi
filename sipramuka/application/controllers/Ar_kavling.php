<?php
	class Ar_kavling extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_Kavling');
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
		$this->M_Kavling->input_data($data,'tb_kavling');
		redirect('admin/ar_kavling');
		
	}

	public function hapus($id_kavling_kavling){

        $this->load->model('M_Kavling');
		$where = array('id_kavling' => $id_kavling);
		$this->M_Kavling->hapus_data($where,'tb_kavling');
		redirect('admin/ar_kavling');
	}

	public	function edit($id_kavling){

        $this->load->model('M_Kavling');	
		$where = array('id_kavling' => $id_kavling);
		$data['tb_kavling'] = $this->M_Kavling->edit_data($where,'tb_kavling')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_kavling_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_Kavling');
		$id_kavling 	   = $this->input->post('id_kavling');
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
				'id_kavling'      => $id_kavling,
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
				'id_kavling' => $id_kavling
			);

			$this->M_Kavling->update_data($where,$data,'tb_kavling');
			redirect('admin/ar_kavling');
	}

	public function detail_kavling($id_kavling){

		$this->load->model('M_Kavling');
		$detail_kavling = $this->M_Kavling->detail_data($id_kavling);
		$data['detail_kavling'] = $detail_kavling;		
		$this->load->view('home/header');
		$this->load->view('home/detail_kavling',$data);
		$this->load->view('home/footer');	
	
	}


}
