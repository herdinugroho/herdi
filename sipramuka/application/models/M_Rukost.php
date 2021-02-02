<?php 

 class M_Rukost extends CI_Model{
 	public function tampil_data()
 	{
 		return $this->db->get('tb_rukost');
 	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

 
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);

	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function detail_data($id_rukost = NULL){
		$query = $this->db->get_where('tb_rukost', array('id_rukost' => $id_rukost))->row();
		return $query;
	}
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_rukost');
		$this->db->like('namarumah',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('peta',$keyword);
		return $this->db->get()->result();
	}
 } 