<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        // $this->app['auth']->viaRequest('api', function ($request) {
        //     if ($request->input('api_token')) {
        //         return User::where('api_token', $request->input('api_token'))->first();
        //     }
        // });

        // Pour notre projet ! 
        // La méthode boot() doit retourner l'utilisateur connecté donc un objet de la classe User
        // Ou alors elle retourne null
        // Ici la fontion doit donc executer session_start(),si la session est vide, aucun utilisateur est connecter, donc on retourne null
        // Si on a un id dans $_SESSION on s'en sert pour retrouver l'utilisateur dans la BDD et on retourne un objet de la classe User

        return null;
    }
}
