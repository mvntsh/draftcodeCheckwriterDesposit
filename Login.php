<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model("login_m");
		}

		function index(){
			$this->load->view("common/header_v");
			$this->load->view("login_v");
			$this->load->view("common/footer_v");
		}

		function userlogin_c(){
			$data["success"] = false;

			$idno = $this->input->post("txtIdnumber");
			$password = $this->input->post("txtPassword");

			$response = $this->login_m->userlogin_m($idno,$password);

			if(count($response)>0){
				$data["success"] = true;
				$this->session->set_userdata($response);
			}
			echo json_encode($data);
		}
	}
?>