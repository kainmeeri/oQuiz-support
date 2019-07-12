<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\Models\AppUsers;
use App\Models\Level;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Tag;



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

    public function quizAction(Request $request, $id)
    {
        //dump($id);
        $questionsList = Question::where('quizzes_id', $id)->get();
        //dump($questionsList->title);
        
        // ici, $id est {id} dans la route. Donc je vais récupérer le quizz à l'id correspondant. Si $id = 5 alors j'aurais le quiz 5.
        $quizzesList = Quiz::where('id', $id)->first();

        $tagsList = Tag::where('id', $id)->first();
        // dump($tagsList->name);


        return view('quiz', [
            'questions' => $questionsList,
            'quizzes' => $quizzesList,
            'tags' => $tagsList

        ]);
    }
}



      