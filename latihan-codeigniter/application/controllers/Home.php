<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function index() {
		//
		$this->load->model('HomeModel');
		//
		$tampilkanData= $this->HomeModel->getData();

		echo "Nama: ".$tampilkanData['Nama'] ."<br>";
		echo "Kampus: ".$tampilkanData['Kampus'] ."<br>";
		echo "Website: ".$tampilkanData['Website'] ."<br>";
	}
}
