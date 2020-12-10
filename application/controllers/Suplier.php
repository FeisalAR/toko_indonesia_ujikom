<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No cheeky hax0rz allowed');
require APPPATH . '/libraries/REST_Controller.php';

class suplier extends REST_Controller{
	function __construct(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET');
		parent::__construct();
		$this->load->model('Suplier_model', 'suplier');
	}

	function insert_post(){
		$data = [
			'nama' => $this->post('nama'),
			'alamat' => $this->post('alamat'),
			'kota' => $this->post('kota'),
			'telepon' => $this->post('telepon')
		];

		$res = $this->suplier->insert($data);

		if($res){
			$this->response('insert berhasil', REST_Controller::HTTP_CREATED);
		}
		else{
			$this->response('insert gagal', REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		}
	}


	function update_post(){
		$id = $this->post('id');
		$data = [
			'nama' => $this->post('nama'),
			'alamat' => $this->post('alamat'),
			'kota' => $this->post('kota'),
			'telepon' => $this->post('telepon')
		];

		$res = $this->suplier->update($id, $data);

		if($res){
			$this->response('update berhasil', REST_Controller::HTTP_CREATED);
		}
		else{
			$this->response('update gagal', REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		}
	}


	function delete_post(){
		$id = $this->post('id');
		$res = $this->suplier->delete($id);

		if($res){
			$this->response('delete berhasil', REST_Controller::HTTP_CREATED);
		}
		else{
			$this->response('delete gagal', REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		}
	}


	function all_get(){
		$res = $this->suplier->findAll();

		if($res){
			$this->response($res);
		}
		else{
			$this->response('fetch all data gagal', REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		}
	}


	function byid_get(){
		$id = $this->get('id');
		$res = $this->suplier->findById($id);

		if($res){
			$this->response($res[0]);
		}
		else{
			$this->response('fetch by id gagal', REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
		}
	}








}

?>
