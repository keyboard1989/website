<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ssp extends CI_Controller {

	public function index()
	{
		$this->load->view('ssp/customer');
    }
}
