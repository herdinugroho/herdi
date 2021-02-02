<?php
	class Ar_cluster extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_Cluster');
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
		$this->M_Cluster->input_data($data,'tb_cluster');
		redirect('admin/ar_cluster');
		
	}

	public function hapus($id_cluster){

        $this->load->model('M_Cluster');
		$where = array('id_cluster' => $id_cluster);
		$this->M_Cluster->hapus_data($where,'tb_cluster');
		redirect('admin/ar_cluster');
	}

	public	function edit($id_cluster){

        $this->load->model('M_Cluster');	
		$where = array('id_cluster' => $id_cluster);
		$data['tb_cluster'] = $this->M_Cluster->edit_data($where,'tb_cluster')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_cluster_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_Cluster');
		$id_cluster 	   = $this->input->post('id_cluster');
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
				'id'      => $id,
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
				'id_cluster' => $id_cluster
			);

			$this->M_Cluster->update_data($where,$data,'tb_cluster');
			redirect('admin/ar_cluster');
	}

	public function detail_cluster($id_cluster){

		$this->load->model('M_Cluster');
		$detail_cluster = $this->M_Cluster->detail_data($id_cluster);
		$data['detail_cluster'] = $detail_cluster;		
		$this->load->view('home/header');
		$this->load->view('home/detail_cluster',$data);
		$this->load->view('home/footer');	
	
	}


}
