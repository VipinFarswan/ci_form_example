<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_model 
{
	// Will use this model in future to store and fetch form data.
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