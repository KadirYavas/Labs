<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Carousel;
use App\Service;
use App\Discover;
use App\Testimonial;
use App\Role;
use App\Contact;
use App\Titre;
use App\Readies;
use App\Footer;

class WelcomeController extends Controller
{
    public function index() {
        $header = Header::all();
        $carousel = Carousel::all();
        $service = Service::orderBy('id', 'desc')->take(3)->get();
        $serviceNeuf = Service::inRandomOrder()->take(9)->get();
        $discover = Discover::all();
        $testimonial = Testimonial::orderBy('id', 'desc')->take(6)->get();
        $roles = Role::all();
        $contact = Contact::all();
        $titres = Titre::first();
        $readies = Readies::all();
        $footer = Footer::all();
        return view('welcome', compact('header', 'carousel', 'service', 'serviceNeuf', 'discover', 'testimonial', 'roles', 'contact', 'titres', 'readies', 'footer'));
    }
}
