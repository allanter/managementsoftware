<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    //public means can access outside the class
        return view('pages.index');
        // return index in pages folder
    }

    public function registration() {
        
        return view('pages.registration');
            
        }

    public function login() {
        
        return view('pages.login');
            
        }
    public function downloads() {
        
        return view('pages.downloads');
                
        }
}

//created with php artisan make:controller PagesController