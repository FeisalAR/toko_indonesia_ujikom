<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No cheeky hax0rz allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Method extends REST_Controller{
	function __construct($config = 'rest'){
		parent::__construct($config);
	}

	function index_get(){
		$nama = $this->get('nama');
		$this->response($nama);
	}

	function index_post(){
		$nama = $this->post('nama');
		$this->response($nama);
	}

	function index_put(){
		$nama = $this->put('nama');
		$this->response($nama);
	}

	function index_patch(){
		$nama = $this->patch('nama');
		$this->response($nama);
	}

	function index_delete(){
		$nama = $this->delete('nama');
		$this->response($nama.'deleted');
	}




}










?>
