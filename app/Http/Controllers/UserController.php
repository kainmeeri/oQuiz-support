<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // affiche page inscription
    public function signupAction()
    {

        return view('signup');
    }

    public function signupPost(Request $request) {

        // dump($request->getMethod());

        if($request->getMethod() == 'POST') {
            
    
            $firstname = $request->input('firstname', '');
            $lastname = $request->input('lastname', '');
            $email = $request->input('email', '');
            $password = $request->input('password', '');


            $user = new User();
            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->save();
            return redirect()->route('home');
        }
    }



    public function signinAction(Request $request)
    {

        return view('signin');
    }
}


