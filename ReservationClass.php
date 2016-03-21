<?php 

$db = new Database;

Class Reservation
{
	public $table = "Reservation";
	// Custormer Mail Content
	private $Res_customerMsg = "";
	// Admin Mail Content
	private $Res_adminMsg = "";
	private $Res_adminMail = "";
	private $Occ_table = "";
	private $Occ_status = false;
	
	public function Res_Occ($Occ_id, $User_id)
	{
		if ($Occ_id && $User_id)
		{
			$val = array($Occ_id,$User_id);
			if ($db->connect())
			{
				$query = $db->db_insert($table, $val);
			}else 
				return false;
		}
	}
	
	// Method to send mail.
	private function Res_mail($email, $name, $Occ_name, $Res_msg)
	{
		if ($email && $name && $Occ_name && $Res_msg)
		{
			/*script to send mail*/
			return true;
		}else 
			return false;
	}
	
	
	// Method to invoke function to send mail and update the table;
	public function Res_sendMail($Occ_id, $User_email, $User_name, $Occ_name)
	{
		if ($Id && $User_email && $User_name && $Occ_name)
		{
			// Send mail for Custormer
			if ($Res_customerMsg)
			{
				$this->Cmail_status = Res_mail($Occ_id, $User_email, $User_name, $Occ_name, $Res_customerMsg);
				
			}
			// send mail for admin	
			if ($Res_adminMsg)
			{
				if ($this->Cmail_status)
				{
					$this->Amail_status =  Res_mail($Occ_id, $User_email, $User_name, $Occ_name, $Res_adminMsg);
				}
			}
			// If both mail has been sent update the table status.
			if ($this->Cmail_status && $this->Amail_status)
			{
				$Res_mail = true;
				// Update Reservation table status
				if($db->db_update($table, $Res_mail))
				{	
					$Occ_status = true;
					// Upadate Occasion status as booked.
					$where = ' Occ_id = "'.$Occ_id.'"';
					if ($db->db_update($Occ_table, "status", $Occ_status, $where))
						return true;
					else 
						return false;
				}else 
					return false;
			}else
				return false;				
		}else 
			return false;
	}
}
