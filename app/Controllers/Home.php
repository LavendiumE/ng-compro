<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact'); // Pastikan file contact.php ada di folder Views
    }

    public function portofolio()
    {
        return view('portofolio'); // Pastikan file contact.php ada di folder Views
    }

    public function product()
    {
        return view('product'); // Pastikan file contact.php ada di folder Views
    }
}
