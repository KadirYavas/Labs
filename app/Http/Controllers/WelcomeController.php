<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Carousel;
use App\Service;
use App\Discover;
use App\User;
use App\Role;
use App\Contact;
use App\Titre;
use App\Readies;

class WelcomeController extends Controller
{
    public function index() {
        $header = Header::all();
        $carousel = Carousel::all();
        $service = Service::orderBy('id', 'desc')->take(3)->get();
        $serviceNeuf = Service::orderBy('id', 'desc')->take(9)->get();
        $discover = Discover::all();
        $user = User::all();
        $roles = Role::all();
        $contact = Contact::all();
        $titres = Titre::first();
        $readies = Readies::all();
        return view('welcome', compact('header', 'carousel', 'service', 'serviceNeuf', 'discover', 'user', 'roles', 'contact', 'titres', 'readies'));
    }
}
