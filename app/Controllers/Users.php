<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsiaModel;

class Users extends BaseController
{
    protected $UsiaModel;
    public function __construct()
    {
        $this->UsiaModel = new UsiaModel();
    }

    // Halaman user auth
    public function index()
    {
        $data = [
            'title' => 'Halaman User'
        ];
        return view('users/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Halaman Edit'
        ];
        return view('users/index', $data);
    }
    // end user Auth

    // Halaman data 
    public function data()
    {
        
        $data = [
            'title' => 'Page Data',
            'data_umur' => $this->UsiaModel->findAll(),
        ];

        return view('users/data', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail data',
            'data_umur' => $this->UsiaModel->findAll(),
        ];

        return view('users/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data'
        ];
        return view('users/form_data/tambah', $data);
    }
    // end Halaman data
}
