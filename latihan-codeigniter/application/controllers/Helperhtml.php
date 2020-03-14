<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helperhtml extends CI_Controller {
    function __construct()
	{
        parent::__construct();
        $this->load->helper('html'); //memanggil helper html
        
    }
    function index() {
        //memanggil view v_helperhtml di folder view
        $this->load->view('v_helperhtml');

    }
}
