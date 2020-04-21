<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Carousel;
use App\Service;

class WelcomeController extends Controller
{
    public function index() {
        $header = Header::all();
        $carousel = Carousel::all();
        $service = Service::orderBy('id', 'desc')->take(3)->get();
        $serviceNeuf = Service::orderBy('id', 'desc')->take(9)->get();
        return view('welcome', compact('header', 'carousel', 'service', 'serviceNeuf'));
    }
}
