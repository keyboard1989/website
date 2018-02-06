<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sspdata extends CI_Controller {

	public function index()
	{
		$this->load->view('ssp/sspdata');
    }
}
