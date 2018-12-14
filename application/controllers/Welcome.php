<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		if (!$this->session->user) {
			$this->load->view('login');
		} else {
			$this->load->view('home');
		}
	}

	public function doLogin() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$getUser = $this->db->get_where('users', compact(['username', 'password']))->row();

		if ($getUser) {
			$this->session->set_userdata('user', $getUser);
		} else {
			$this->session->set_flashdata('toAlert', 'User Not Found !!!');
		}

		redirect(base_url());
	}

	public function logout() {
		$this->session->sess_destroy();
		
		redirect(base_url());
	}
}
