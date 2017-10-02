<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct() {}
    public function index()
    {
        return view('gallery.gallery') ;
    }

    public function album()
    {
        return view('gallery.2017.album') ;
    }
    public function item()
    {
        return view('gallery.2017.item') ;
    }
}
