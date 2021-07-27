<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'SRIFOTON 2021',
            'footer_top' => '200vh'
        ];
        return view('pages/LandingPage', $data);
    }
}
