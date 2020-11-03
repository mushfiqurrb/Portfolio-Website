<?php

namespace App\Http\Controllers;

use App\Main;
use App\About;
use App\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $main = Main::first();
        $portfolios = Portfolio::all();
        $abouts = About::all();
        return view('pages.index', compact('main','portfolios','abouts'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
    


}
