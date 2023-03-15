<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        //Imagine we are retrieving data from database
        $animals = ['Milo', 'BamBam', 'Ayu', 'Teyzos', 'Beyaz'];
        $ourName = 'Ali';

        return view('homepage', ['name' => $ourName, 'dogname' => 'Milo', 'allAnimals' => $animals]);
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
