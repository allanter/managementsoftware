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

    public function checklogin(Request $request) {
        // validate the info, create rules for the inputs
        // no need return view, all backend work
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required|alpaNumb|min:3'
        ]);

        // create our user data for the authentication
        $user_data = array(

            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        // attempt to do the login
        if (Auth::attempt($user_data)) {

            return redirect('pages.login'); // direct to login page if successfully login

        } else {

            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function registration() {
        
        return view('pages.registration');
            
        }

    public function login() {
        
        return view('pages.login');
            
        }

    public function logout() {
        
        Auth::logout(); // log the user out of our application
        return redirect('pages.index'); // redirect the user back to the login/index screen
                    
        }
    public function downloads() {
        
        return view('pages.downloads');
                
        }
}

//created with php artisan make:controller PagesController