<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct() {}
    public function church()
    {
        return view('aboutus.church') ;
    }
    public function sundayschool()
    {
        return view('aboutus.sundayschool') ;
    }
    public function mgocsm()
    {
        return view('aboutus.mgocsm') ;
    }
    public function prayer()
    {
        return view('aboutus.prayer') ;
    }
}
