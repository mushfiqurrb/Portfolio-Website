<?php

namespace App\Http\Controllers;

use App\Main;
use App\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $main = Main::first();
        $portfolios = Portfolio::all();
        return view('pages.index', compact('main','portfolios'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
    


}
