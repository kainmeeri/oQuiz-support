<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model 
{
    // SQLSTATE[42S02]: Base table or view not found: 1146 Table 'videogame-r.videogames' doesn't exist (SQL: select * from `videogames`)
    // donc on doit spécifier le nom de la table
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';
    
    // Erreur à l'insertion car updated_at & created_at n'existent pas
    // => Dire à Eloquent de ne pas ajouter automatiquement ces champs
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function levels()
    {
        return $this->belongsTo('App\Models\Levels', 'levels_id');
    }

    public function answers()
    {
        return $this->belongsTo('App\Models\Answers', 'answers_id');
    }
}