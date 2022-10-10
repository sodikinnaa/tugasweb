<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function profile(){
		$this->load->view('profile');
	}

	public function flex(){
		$this->load->view('flexibox');
	}

	public function flex2(){
		$this->load->view('page_1');
	}

}
