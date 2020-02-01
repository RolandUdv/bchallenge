<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $title = 'Welcome to the Golf Shop';
        return view('shop.index')->with('title', $title);
    }
    public function categories(){
        $title = 'Welcome to the Golf Shop--Categories page';
        return view('shop.categories')->with('titlee', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Custom balls', 'Custom shirts', 'Events']
        );
        return view('shop.services')->with($data);
    }
    public function about(){
        $title = 'Welcome to the Golf Shop--About page';
        return view('shop.about')->with('titlee', $title);
    }

}
