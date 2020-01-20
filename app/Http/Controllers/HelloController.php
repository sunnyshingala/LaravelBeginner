<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){

        return view('about');

    }   
    public function services(){
        $services = [
            'services 1',
            'services 2',
            // 'services 3',
            // 'services 4',
        ];
        return view('services', compact('services'));

    }   
}