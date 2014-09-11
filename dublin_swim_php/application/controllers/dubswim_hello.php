<?php

class Dubswim_hello extends CI_Controller {

	
	public function index()
	{
		$this->load->view('hello_message');
	}
}

