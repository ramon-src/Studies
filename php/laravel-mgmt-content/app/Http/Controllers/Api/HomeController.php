<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setPageTitle('Dashboard');

        return view('api/home');
    }
}
