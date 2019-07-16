<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\Models\Levels;
use App\Models\Questions;
use App\Models\Quizzes;
use App\Models\Tags;
use App\User;
use App\Utils\UserSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class TagController extends Controller
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

   public function tagsAction(Request $request) {

        $tagsList = Tags::all();
        // dump($tagsList);

        return view('tag.tags', [
            'tags' => $tagsList,
        ]);
   }

    public function tagsQuizAction(Request $request, $id) {
    
        if (!UserSession::isConnected()) {
            return redirect(route('signin'));
        }

        $tagQuizzesList =  Tags::find($id);
        //  dump($tagsQuizList->quizzes);
      

        return view('tag.tagQuizzes', [
            'tagQuizzes' => $tagQuizzesList,
        ]);
   }
}


