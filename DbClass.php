<?php

Class Database
{
/*

	private $db_host = "sql7.freemysqlhosting.net";
	private $db_user = "sql7111284";
	private $db_pass = "fvdLuE5W6E";
	private $db_name = "sql7111284";
*/
	private $db_host = "localhost";
	private $db_user = "meddevlic_user";
	private $db_pass = "#Dr2meddev";
	private $db_name = "meddevlic";	
	
	public $query;
	public $result;
	public $msg;
	
	public function db_connect()
	{
		//echo "db_connect";
		if(!$this->con)
		{
			$this->myconn = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
			if($this->myconn)
			{
				$seldb = mysql_select_db($this->db_name, $this->myconn);
				if ($seldb)
				{
					$this->con = true;
					return true;
				}else{
					return false;
				}
			}else {
				return false;
			}
		}else {
			return false;
		}
	}
	
	public function db_disconnect()
	{
		if($this->con)
		{
			if(mysql_close())
			{
				$this->con = false;
				return true;
			}else 
				return false;
		}else
			return false;
	}
	
	public function db_checktable($table)
	{
		$query = mysql_query('SHOW TABLES LIKE "'.$table.'" ');
		if($query)
		{
			if(mysql_num_rows($query)==1)
				return true;
			else 
				return false;
		}
	}
	
	// Function to search 
	public function db_search($term, $row_name ,$table, $where)
	{
		$query = mysql_query('Select "'.$row_name.'" From "'.$table.'" "'.$where.'"');
		if ($query)
		{
			$i = 0;
		}
	}
	
	public function db_insert($table,$values,$rows = null)
	{
		$this->result = "";
        if($this->tableExists($table))
        {
            $insert = 'INSERT INTO '.$table;
            if($rows != null)
            {
                $insert .= ' ('.$rows.')'; 
            }
            for($i = 0; $i < count($values); $i++)
            {
                if(is_string($values[$i]))
                    $values[$i] = '"'.$values[$i].'"';
            }
            $values = implode(',',$values);
            $insert .= ' VALUES ('.$values.')';	
            $ins = @mysql_query($insert);  
            if($ins)
            {
                return true; 
            }
            else
            {
                return false; 
            }
        }	
	}
	
	public function db_select($type, $table, $where = null ,$order = null)
	{
		//echo "db_select";
		if ($type && ($this->db_checktable($table)))
		{
			$q = 'SELECT "'.$type.'" from '.$table.'';
			if($where != null)
				$q .= ' WHERE '.$where;
			if ($order != null)
				$q .= ' ORDER BY '.$order;
			if($q)
			{
				//echo $q;
				$query = mysql_query($q);
				if ($query)
				{
					$i = 0;
					while($row = mysql_fetch_array($query))
					{
						$this->result[$i] = $row[$i];
						$i++;
					}
					return true;
				}else 
					return false;
			}
		}
		

	}
	
	public function db_update($table, $row_name, $row_value, $where)
	{
		$this->result = "";	
	    if($this->tableExists($table))
        {
            $update = 'UPDATE '.$table.' SET ';

			if(($row_name && $row_value) && (count($row_name) == count($row_value)))
			{
				$i = count($row_name); 
				while($i>0) {
					$i--;
					if ($i != 0)
						$value .= $row_name[$i].' = "'.$row_value[$i].'",';
					else 
						$value .= $row_name[$i].' = "'.$row_value[$i].'"';	
				}
				$update .=$value;
			}
            $update .= ' WHERE '.$where;
            $query = @mysql_query($update);
            if($query)
            {
                return true; 
            }
            else
            {
                return false; 
            }
        }
        else
        {
            return false; 
        }
	}
	
	public function db_getResult()
	{
		return $this->result;
	}
}


?>
