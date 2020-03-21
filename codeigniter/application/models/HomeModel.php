<?php

class HomeModel extends CI_Model {
    public function getData() {
        $data= array(
            'Nama'      => 'Saryanto',
            'Kampus'    => 'STMIK JABAR',
            'Website'   => 'https://stmik-jabar.ac.id'
        );
        return $data;
    }
}
