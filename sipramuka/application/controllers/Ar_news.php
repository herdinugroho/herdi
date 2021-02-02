<?php
	class Ar_news extends CI_Controller{
		 
	public function tambah_aksi(){

        $this->load->model('M_News');
		$judul  	   = $this->input->post('judul');
		$singkat		=$this->input->post('singkat');
		$detail   = $this->input->post('detail');
		$detail1		= $this->input->post('detail1');
		$tanggal		= $this->input->post('tanggal');
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
				'judul'    => $judul,
				'singkat' => $singkat,
				'detail' => $detail,
				'detail1'=> $detail1,
				'tanggal'=> $tanggal,
 				'foto'    => $foto,
					);
		$this->M_News->input_data($data,'tb_news');
		redirect('admin/ar_news');
		
	}

	public function hapus($id_news){

        $this->load->model('M_News');
		$where = array('id_news' => $id_news);
		$this->M_News->hapus_data($where,'tb_news');
		redirect('admin/ar_news');
	}

	public	function edit($id_news){

        $this->load->model('M_News');	
		$where = array('id_news' => $id_news);
		$data['tb_news'] = $this->M_News->edit_data($where,'tb_news')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ar_news_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

        $this->load->model('M_News');
		$id_news 	   = $this->input->post('id_news');
		$judul  	   = $this->input->post('judul');
		$singkat		=$this->input->post('singkat');
		$detail   = $this->input->post('detail');
		$detail1		= $this->input->post('detail1');
		$tanggal		= $this->input->post('tanggal');
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
				'judul'    => $judul,
				'singkat' => $singkat,
				'detail' => $detail,
				'detail1'=> $detail1,
				'tanggal'=> $tanggal,
 				'foto'    => $foto,
					);
			$where = array(
				'id_news' => $id_news
			);

			$this->M_News->update_data($where,$data,'tb_news');
			redirect('admin/ar_news');
	}

		public function detail_news($id_news){
		$this->load->model('M_News');
		$detail_news = $this->M_News->detail_data($id_news);
		$data['detail_news'] = $detail_news;		
		$this->load->view('home/header');
		$this->load->view('home/detail_news',$data);
		$this->load->view('home/footer');	
	
	}


	public function kirimKomen() {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $isi_komentar = $this->input->post('isi_komentar');
    $this->db->query("INSERT INTO tb_komentar VALUES('','0','$nama','$email','$isi_komentar')");
    redirect('','refresh');
} 

public function balasKomen() {
 $id_komen = $this->input->post('id_komen');
 $nama = $this->input->post('nama');
 $email = $this->input->post('email');
 $isi_komentar = $this->input->post('isi_komentar');
 $this->db->query("INSERT INTO tb_komentar VALUES('','$id_komen','$nama','$email','$isi_komentar')");
 redirect('','refresh');
}


}
