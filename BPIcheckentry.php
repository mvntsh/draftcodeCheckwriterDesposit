<?php 
	/**
	 * 
	 */
	class BPIcheckentry extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			$this->load->view("common/header_v");
			$this->load->view("common/navbar_v");
			$this->load->view("BPIcheckentry_v");
			$this->load->view("common/footer_v");
		}
	}
?>