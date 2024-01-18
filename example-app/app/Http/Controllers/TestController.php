<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Portfolio()
    {
        return view('portfolio');
    }
    public function Contacts()
    {
        return view('contacts');
    }
}
