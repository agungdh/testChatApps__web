<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		$test = $this->db->get('users')->result();

		var_dump($test);
	}
}
