<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function Portfolio()
    {
        return view('portfolio');
    }
    public function Contacts()
    {
        return view('contacts');
    }
}
