<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Home page
    public function index()
    {
        return view('pages/home');
    }

    // Manifesto Page
    public function manifesto()
    {
        return view('pages/manifesto');
    }
}
