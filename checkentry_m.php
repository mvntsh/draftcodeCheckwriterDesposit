<?php 
	/**
	 * 
	 */
	class checkentry_m extends CI_Model
	{
		function insert_m($values){
			$this->db->insert("tblbanktransaction",$values);

			if($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}

		function exactamount_m($checkno){
			$query = $this->db->query("SELECT * FROM `tblbanktransaction` WHERE amount LIKE '%.00%' AND checkno='$checkno'")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}

		function checkdate_m($date){
			$query = $this->db->query("SELECT DATE_FORMAT('$date', '%m %d %Y') AS dateinw;")->result_array();

				if(count($query)>0){
					return $query;
				}else{
					return array();
				}
		}

		function getbranch_m($bank){
			$query = $this->db->query("SELECT * FROM `tblbank` WHERE bank='$bank';")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}

		function getbank_m($bank,$department){
			$query = $this->db->query("SELECT * FROM `tblbank` WHERE bank='$bank' AND department='$department' GROUP BY bank ORDER BY bank ASC;")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}

		function existingcheckno_m($checkno){
			$query = $this->db->query("SELECT checkno FROM `tblbanktransaction` WHERE checkno='$checkno'")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}

		function viewAccountno_m($accountno,$bank){
			$query = $this->db->query("SELECT * FROM `tblbanktransaction` WHERE accountno LIKE '$accountno%' AND bank='$bank' GROUP BY accountno ORDER BY accountname ASC;")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}

		function getlastCheckno_m($bank){
			$query = $this->db->query("SELECT * FROM `tblbanktransaction` WHERE bank='$bank' ORDER BY transaction_id DESC LIMIT 1;")->result_array();

			if(count($query)>0){
				return $query;
			}else{
				return array();
			}
		}
	}
?>