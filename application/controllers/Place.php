<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	public function index()
	{
		$this->load->view('ssp/place');
    }
}
