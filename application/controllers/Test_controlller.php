<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controlller extends CI_Controller 
{
    public function __construct() {
    	parent::__construct();
    	$this->load->library('session');
    	$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->load->model('Test_model');
    	$this->load->helper('url');  
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
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Oops! password is empty.'));
		$this->form_validation->set_rules('email', 'Email', 'required', array('required' => 'Oops! email is empty.'));
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('getForm');
        }
        else
        {	$this->session->set_flashdata('successMessage', 'Form Submitted Succesfully.');
    		redirect('form');
        	//echo "Form Submitted";
        }
	}
	public function setForm() 
	{
		$this->load->view('getForm');
	}
}
?>