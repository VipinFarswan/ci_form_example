<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_model 
{

	public function __construct() 
	{
		//echo "Constructer Call";
	}

	public function getData() 
	{
		echo "GetData Call";
	}
	public function setData() {
		echo "setData Call";
	}


}

?>