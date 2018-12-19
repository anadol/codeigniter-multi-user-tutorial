<?php 

class Users extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("User_model");
	}

	public function index(){

		echo "deneme";
	}


	public function login(){

		$this->load->library("form_validation");

		$this->form_validation->set_rules("eposta", "E-posta", "required|trim|valid_email");
		$this->form_validation->set_rules("sifre", "Şifre", "required|trim");

		$this->form_validation->set_message(array(
			"required"		 => "<b>{field}</b> alanını boş bırakamazsınız",
			"valid_email" 	 => "Lütfen geçerli bir <b>e-posta</b> adresi giriniz"
		));

		if ($this->form_validation->run() == FALSE) {

			$viewData = new stdClass();
			$viewData->form_error = true;

			$this->load->view("Login_v", $viewData);
			
		}

		else{
			$user = $this->User_model->get(
				array(
					"email" 	=> $this->input->post("eposta"),
					"password"	=> md5($this->input->post("sifre"))
				));

			if ($user) {

				if ($this->session->userdata("user_list")) {
					
					$user_list = $this->session->userdata("user_list");
				}

				else{

					$user_list = array();
				}
				
				$user_list[$user->email] = $user;
				$this->session->set_userdata("user_list", $user_list);
				print_r($user_list);

			} else {
				
				$this->load->view("Login_v");
			}


			//print_r($user);
		}

		// $this->load->view("Homepage_v");
	}


	public function login_form(){

		$this->load->view("Login_v");
	}



}

 ?>