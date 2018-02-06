<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dsp extends CI_Controller {

	public function index()
	{
		$this->load->view('dsp/customer');
    }
}
