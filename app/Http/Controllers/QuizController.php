<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\Models\AppUsers;
use App\Models\Levels;
use App\Models\Questions;
use App\Models\Quizzes;
use App\Models\Tags;



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
        
        $questionsList = Questions::where('quizzes_id', $id)->get()->shuffle();
        // dump($questionsList);

        $nbQuestion = Questions::where('quizzes_id', $id)->count();
        // dump($nbQuestion);
        
        // ici, $id est {id} dans la route. Donc je vais récupérer le quizz à l'id correspondant. Si $id = 5 alors j'aurais le quiz 5.
        $quizzesList = Quizzes::where('id', $id)->first();
        // dump($quizzesList->tags);


        return view('quiz', [
            'questions' => $questionsList,
            'nbQuestions' => $nbQuestion,
            'quizzes' => $quizzesList,
        ]);
    }
}



      