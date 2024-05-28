<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $showmenuAdmin = auth()-> user ()-> isAdmin();
        return view('pages.dashboard', compact('showmenuAdmin'));
    }
}


