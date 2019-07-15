<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model 
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

    
      /**
     * Eloquent ira chercher dans la table quizzes un champ app_users_id.
     * C'est-à-dire qu'il va prendre le nom de cette méthode et lui ajouter _id.
     * Pour se plier à la base de données existante, on doit donc appeler cette méthode app_users
     * On aurait pu nommé cette méthode comme on veut au lieu de subir le foncitonnement par défaut d'Eloquent, on l'a d'ailleurs fait pour les Level dans les Question. Cette solution aurait été plus propre.
     */
    public function app_users()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * On ajoute la relation entre Quiz et Question.
     * On crée ici une méthode questions qui va créer une propriété du même nom et dans laquelle on aura une Collection d'objet de la classe Question
     */
    public function questions()
    {
        return $this->hasMany('App\Models\Questions', 'quizzes_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags', 'quizzes_has_tags', 'quizzes_id', 'tags_id');
    }
}