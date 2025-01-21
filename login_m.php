<?php 
	/**
	 * 
	 */
	class login_m extends CI_Model
	{
		function userlogin_m($idno,$password){
			$query = $this->db->query("SELECT * FROM tbluser WHERE idnumber='$idno' AND password='$password'")->result_array();

			if(count($query)>0){
				return $query[0];
			}else{
				return array();
			}
		}
	}
?>