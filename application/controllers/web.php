<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
        // $this->load->view('welcome_message');
        echo "ini controller web";
    }
    
    public function html()
    {
        echo "Saya function html";
    }

    public function php()
    {
        echo "Saya Function PHP";
    }
	
}