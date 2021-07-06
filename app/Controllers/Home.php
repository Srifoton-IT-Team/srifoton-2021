<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    $session = session();
		return view('pages/LandingPage');
	}
}
