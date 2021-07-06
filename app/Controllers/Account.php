<?php

namespace App\Controllers;

class Account extends BaseController
{
	public function login()
	{
		return view('pages/AccountLogin');
	}

    public function register()
    {
        return view('pages/AccountRegister');
    }
}
