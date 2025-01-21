<?php 
	/**
	 * 
	 */
	class Checkentry extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model("checkentry_m");
		}

		function index(){
			$this->load->view("common/header_v");
			$this->load->view("common/navbar_v");
			$this->load->view("checkentry_v");
			$this->load->view("common/footer_v");
		}

		function insert_c(){
			$data["success"] = false;

			$values = array(
				'department' =>$this->input->post("txtnmDepartment"),
				'bank' => $this->input->post("txtnmBank"),
				'bankdeposited' => $this->input->post("txtBranch"),
				'checkno' => $this->input->post("txtCheckno"),
				'checkstatus' => $this->input->post("txtnmCheckstatus"),
				'accountno' => $this->input->post("txtnmAccountno"),
				'accountname' => $this->input->post("txtAccountname"),
				'checkdate' => $this->input->post("txtCheckdate"),
				'amount' => $this->input->post("txtAmount"),
				'entryby' => $this->input->post("txtnmFullname")
			);

			$response = $this->checkentry_m->insert_m($values);

			if($response){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function exactamount_c(){
			$data["success"] = false;

			$checkno = $this->input->post("txtCheckno");
			$data["data"] = $this->checkentry_m->exactamount_m($checkno);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function checkdate_c(){
			$data["success"] = false;

			$date = $this->input->post("txtCheckdate");
			$data["data"] = $this->checkentry_m->checkdate_m($date);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function getbranch_c(){
			$data["success"] = false;

			$bank = $this->input->post("txtnmBank");
			$data["data"] = $this->checkentry_m->getbranch_m($bank);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function getbank_c(){
			$data["success"] = false;

			$bank = $this->input->post("txtnmBank");
			$department = $this->input->post("txtnmDepartment");

			$data["data"] = $this->checkentry_m->getbank_m($bank,$department);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function existingcheckno_c(){
			$data["success"] = false;

			$checkno = $this->input->post("txtCheckno");
			$response = $this->checkentry_m->existingcheckno_m($checkno);

			if($response){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function viewAccountno_c(){
			$data["success"] = false;

			$accountno = $this->input->post("txtnmAccountno");
			$bank = $this->input->post("txtnmBank");

			$data["data"] = $this->checkentry_m->viewAccountno_m($accountno,$bank);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}

		function getlastCheckno_c(){
			$data["success"] = false;

			$bank = $this->input->post("txtnmBank");

			$data["data"] = $this->checkentry_m->getlastCheckno_m($bank);

			if(count($data["data"])>0){
				$data["success"] = true;
			}
			echo json_encode($data);
		}
	}
?>