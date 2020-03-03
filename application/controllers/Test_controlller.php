<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controlller extends CI_Controller 
{
    public function __construct() {
    	parent::__construct();
    	$this->load->helper('form');
    	$this->load->model('Test_model');  
    }
	public function index()
	{
		echo "<br>";
		echo "Welcome to CI";
		echo "<br>";
		$this->Test_model->getData();
	}
	public function getForm() 
	{
		echo "Form Submitted";
	}
	public function setForm() 
	{
		$this->load->view('getForm');
	}
}
?>