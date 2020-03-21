<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function index() {
		//memanggil model dari folder HomeModel()
		$this->load->model('HomeModel');
		$this->load->view('Home');
		//menampung fungsi dari getData()
		$tampilkanData= $this->HomeModel->getData();

		echo "Nama: ".$tampilkanData['Nama'] ."<br>";
		echo "Kampus: ".$tampilkanData['Kampus'] ."<br>";
		echo "Website: ".$tampilkanData['Website'] ."<br>";
	}
}
