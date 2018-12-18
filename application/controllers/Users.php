<?php 

class Users extends CI_Controller{

	public function __contruct(){

		parent::__contruct();
	}

	public function index(){

		echo "deneme";
	}


	public function login(){

		$this->load->view("Homepage_v");
	}


	public function login_form(){

		$this->load->view("Login_v");
	}



}

 ?>