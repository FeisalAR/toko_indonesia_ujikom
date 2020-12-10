<?php

class barang_model extends CI_Model{
	public $table = 't_barang';

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		return $this->db->insert($this->table, $data);
	}

	public function update($id, $data){
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

	public function findAll(){
		return $this->db->get($this->table)->result_array();
	}

		public function findById($id){
		return $this->db->get_where($this->table, ['id' => $id])->result_array();
	}

	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}






}















?>
