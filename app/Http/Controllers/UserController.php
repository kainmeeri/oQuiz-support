<?php

namespace App\Http\Controllers;

// On peut appeler les modêles en utilisant le namespace complet
// Pour savuer un peu de nos yeux, on peut aussi ajout un use
use App\User;
use App\Utils\UserSession;
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
    public function signupAction(Request $request)
    {

      // On doit initialiser $messages qu'importe la méthode HTTP qui nous amène à ce contrôleur pour éviter une erreur lord de l'envoi à la vue
      $messages = [];

      if ($request->getMethod() == 'POST') {
          // Le code à exécute lors de l'envoi du formulaire

          $firstname = $request->input('firstname');
          $lastname = $request->input('lastname');
          $email = $request->input('email');
          $password = $request->input('password');
          $passwordConfirmation = $request->input('password-confirmation');
          $validation = $request->input('validation');

          
         
          // On vérifie les données reçues depuis le formulaire
          // On vérfie d'abord sir le username a au moins 2 caractères
          if (strlen($firstname) < 2) {
              $messages[] = [
                  'type' => 'danger',
                  'text' => 'Votre prénom doit faire au moins 2 caractères.'
              ];
          }

          if (strlen($lastname) < 2) {
            $messages[] = [
                'type' => 'danger',
                'text' => 'Votre nom de famille doit faire au moins 2 caractères.'
            ];
        }

          // On teste si l'e-mail est valide
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $messages[] = [
                  'type' => 'danger',
                  'text' => 'L\'adresse email fournie n\'est pas valide.'
              ];
          }

          // On vérifie que le mot de passe est suffisament long et que le les deux mdp sont identiques
          if ($password != $passwordConfirmation) {
              $messages[] = [
                  'type' => 'danger',
                  'text' => 'Les deux mots de passe sont différents.'
              ];
          } else if (strlen($password) < 6) {
              $messages[] = [
                  'type' => 'danger',
                  'text' => 'Ce mot de passe est trop court.'
              ];
          }

          if ($validation == null) {
              $messages[] = [
                'type' => 'danger',
                'text' => 'Veulliez accepter les conditions d\'utilisations.'
              ];
          }

          // Si le nombre de message est égal à 0, tout va bien et on peut ajouter notre User à la BDD
          if (count($messages) == 0) {
              // Pour créer un nouvel utilisateur il faut créer un nouvel objet de la classe User
              $user = new User();
              $user->firstname = $firstname;
              $user->lastname = $lastname;
              $user->email = $email;
              $user->password = password_hash($password, PASSWORD_DEFAULT);
              $user->save();

              // Une fois que le nouveau User est ajouté en base de données, on peut prévenir l'utilisateur que tout a correctement fonctionné
              $messages[] = [
                  'type' => 'succes',
                  'text' => 'Votre compte a bien été créé. Vous pouvez désormais vous connecter.'
              ];
          }
      }
      return view('signup', [
          'messages' => $messages
      ]);
  }

   


  public function signinAction(Request $request)
  {
      if ($request->getMethod() == 'POST') {
          // Le code à exécute lors de l'envoi du formulaire

          // Pour une connexion, on doit vérifier le mot de passe et le login de l'utilisateur
          // On va récupérer un utilisateur grâce à l'email dans la BDD
              // where est une method du Query Builder (constructer de requête) elle retourne toujours un objet Builder
              // get() est la méthod qui execute la requête SQL crée grace au Query Builder
              // get() retourne toujours une collection même si on à un seul résultat
              // On utilise first pour obtenir le premier/seul objet User de la requête
          $user = User::where('email', $request->input('email'))->get()->first();
                  // Autre solution possible : $user = User::all()->firstWhere('email', $request->input('email'));
          // dump($user);
          
          // $user est soit un objet User si l'email existe dans la bdd, soit il a pour valeur null
          // On vérifie si $user est un objet de la class User
          if ($user instanceof User) {
              // On vérfie donc le mot de passe
              if (password_verify($request->input('password'), $user->password)) {
                  // Le mot de passe et l'email sont bons. On demande donc à la classe UserSession de connecter l'utilisateur
                  
                  // Par sécurité, juste avant, on supprime le mot de passe même s'il est chiffré
                  $user->password = '';
                  UserSession::connect($user);
                  // dump($_SESSION); // On peux dump $_SESSION car c'est une variable superglobale 

                  // On redirige l'utilisateur sur la page admin
                  return redirect(route('home'));
              }
          }
      }
      return view('signin');
    }

    public function profileAction() 
    {
        if (!UserSession::isConnected()) {
            return redirect(route('signin'));
        }
        return view('users.account');
    }

    public function paramsAction() 
    {
        if (!UserSession::isConnected()) {
            return redirect(route('signin'));
        }

        
        return view('users.params');
    }




    public function logoutAction(Request $request)
    {
        // On utilise la méthode disconnect() pour détruire la session
        UserSession::disconnect();

        // Il faut ensuitte rediriger l'utilisateur vers une autre route
        return redirect(route('home'));
    }
}


