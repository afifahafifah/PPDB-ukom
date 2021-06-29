<?php namespace App\Controllers;

class Umhijau extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index(){
        $mhijau =new \App\Models\MhijauModel();
        $model = $mhijau->findAll();
        return view('umhijau/index',[
            'model' => $model,
        ]);
    }

}