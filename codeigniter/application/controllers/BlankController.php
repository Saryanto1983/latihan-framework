<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlankController extends CI_Controller {
    function index() {
        //memanggil view v_helperhtml di folder views
        $this->load->view('blank');
    }
}