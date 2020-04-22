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
use App\User;

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
        $ceo = User::where('roles_id', '=', '4')->first();
        $users = User::inRandomOrder('')->where('roles_id', '!=', '4')->where('roles_id', '!=', '1')->where('roles_id', '!=', '10')->take(2)->get();
        return view('welcome', compact('header', 'carousel', 'service', 'serviceNeuf', 'discover', 'testimonial', 'roles', 'contact', 'titres', 'readies', 'footer', 'users', 'ceo'));
    }
}
