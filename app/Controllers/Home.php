<?php

namespace App\Controllers;
use App\Models\modelbarang;
class Home extends BaseController
{
    function __construct() {
        $this->model = new modelbarang();
    }
    public function index()
    {
        $data['models'] =$this->model->findAll();
        return view('home',$data);
    }
    public function detail()
    {
        return view('Detail');
    }
    public function shop()
    {
        return view('shop');
    }
}
