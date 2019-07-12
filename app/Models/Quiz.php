<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model 
{
    // SQLSTATE[42S02]: Base table or view not found: 1146 Table 'videogame-r.videogames' doesn't exist (SQL: select * from `videogames`)
    // donc on doit spécifier le nom de la table
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';
    
    // Erreur à l'insertion car updated_at & created_at n'existent pas
    // => Dire à Eloquent de ne pas ajouter automatiquement ces champs
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



    public function appUsers()
    {
        return $this->belongsTo('App\Models\AppUsers');
    }

    public function questions()
    {
        return $this->hasOne('App\Models\Question');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}