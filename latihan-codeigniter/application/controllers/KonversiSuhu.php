<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonversiSuhu extends CI_Controller {
    function index() {
        $this->load->view('konversi');
    }
}
