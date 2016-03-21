<?php 

	$db = new Database;


Class Occasion
{
	
	public $Occ_name;
	public $Occ_id;
	public $Occ_place;
	public $Occ_date;
	public $Occ_des;
	
	public function Occ_view($type, $table)
	{
		//echo "Occ_view";
		$db = new Database;
		$query = "";
		if ($type && $table)
		{
			if($db->db_connect())
			{
				$query = $db->db_select($type, $table);
				if ($query)
				{
					$this->result = $db->db_getResult();

					return true;
				}else
					return false;	
			}else{ 
				echo "gotit";
				return false;
			}	
		}else 
			return false;
	}
	
	public function Occ_order($type, $table, $order)
	{
		//echo "Occ_order";
		$db = new Database;
		$query = "";
		if($type && $table && $order)
		{
			if($db->db_connect())
			{

				$query = $db->db_select($type, $table, $order);
				if ($query)
				{
					$this->result = $db->db_getResult();
					return true;
				}else
					return false;	
			}else{ 
				return false;
			}
		}else	
			return false;
		
	}
	
	public function Occ_getResult()
	{
		return $this->result;
	}
}

?>
