<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFoundController extends CI_Controller {

	public function index()
	{
		$data['title'] = "Page Not Found";

		$this->load->view('errors/404', $data);
	}

}
