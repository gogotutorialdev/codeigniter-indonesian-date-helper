<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('indonesian_date');
		$date = date("Y-m-d");

		//menampilkan tanggal dengan format tanggal indonesia
		echo indonesian_date($date);
	}
	
}

/* application/controllers/Welcome.php */