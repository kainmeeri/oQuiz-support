<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\Models\Levels;
use App\Models\Questions;
use App\Models\Quizzes;
use App\Models\Tags;
use App\Utils\UserSession;



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

    public function quizAction($id)
    {
        if (!UserSession::isConnected()) {
            return redirect(route('signin'));
        }
        // ici, $id est {id} dans la route. Donc je vais récupérer le quizz à l'id correspondant. Si $id = 5 alors j'aurais le quiz 5.
        $quizzesList = Quizzes::find($id);
        // dump($quizzesList->questions);

        
        // Brassons les question du quiz
        // La liste des questions est un object de la classe Collection
        // On peux donc lui appliquer la méthod shuffle()
        /* La méthod shuffle() retourne une nouvelle collection si on veux modifier l'ordre des questions 
        il faut donc écraser $quizzesList->questions avec la valeur de retour de shuffle() */
        $quizzesList->questions = $quizzesList->questions->shuffle();


        return view('quiz.quiz', [
            'quizzes' => $quizzesList,
        ]);
    }
}



      