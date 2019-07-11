<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\Models\AppUsers;
use App\Models\Quizzes;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class QuizController extends Controller
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

    public function quizAction(Request $request)
    {
        return view('quiz');
    }
}



      