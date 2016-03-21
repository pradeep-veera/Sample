<?php

Class Validation
{
	private $Name = "";
	private $Email = "";
	private $telefon = "";
	public $msg = "";
	
	// Name validation checks
	public function Valid_name($name)
	{
		return true;
	}
	
	// Email validation checks
	public function Valid_Email($email)
	{
		return true;
	}

	// Telefon validation checks
	public function Valid_telefon($number)
	{
		return true;
	}	
}


?>
