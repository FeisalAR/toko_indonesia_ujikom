<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller{
	function __construct($config = 'rest')
	{
		parent::__construct($config);
	}

	public function index_get(){
		$info = [
			'version' => '0.1-dev',
			'app' => 'rest api',
			'knob' => 'elongated'
		];
		$this->response($info, REST_Controller::HTTP_OK);
	}
}


?>
