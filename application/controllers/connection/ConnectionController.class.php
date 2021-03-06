<?php

class ConnectionController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        


        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        if ( empty($formFields['mail'])) {
            throw new Exception("email empty");
        }
        if ( empty($formFields['password'])) {
            throw new Exception("password empty");
        }

        $mail = $formFields['mail'];
        $password = $formFields['password'];
        $user = UserModel::getUserByEmail($mail);
        if (empty($user)) {
            return ['errorMessage' => "Email inconnu"];
        }
        $passwordCrypted = crypt($password, 'rl');
        if ($passwordCrypted != $user['password']) {
            return ['errorMessage' => "Mot de passe invalide"]; 

        } 
        $userSession = new UserSession();
        $userSession->connect($user);
        $userSession->createCart($user['id']);
        
        $http->redirectTo('');

        /*$_SESSION['id'] = $user['id'];
        $userInfos = new UserModel();
        $user =  $userInfos->getUserById($_SESSION['id']);
        var_dump($user);*/
        /*$http->redirectTo('');*/
    }
}




        
        
        
        
        
        
       
        
        


// public static function getUserByEmail($mail) {
//         $db = new Database();
//         $sql = "SELECT * FROM users WHERE mail = ?";
//         $params = [$mail];
//         return $db->queryOne($sql, $params);
//     }

   // public function httpPostMethod(Http $http, array $formFields)
   //  {
   //      if ( empty($formFields['email'])) {
   //          throw new Exception("email empty");
   //      }
   //      if ( empty($formFields['password'])) {
   //          throw new Exception("password empty");
   //      }
   //      $email = $formFields['email'];
   //      $password = $formFields['password'];
   //      $user = UserModel::getUserByEmail($email);
   //      if (empty($user)) {
   //          return ['errorMessage' => "Email inconnu"];
   //      }
   //      $passwordEncrypted = crypt($password, 'rl');
   //      if ($passwordEncrypted != $user['password']) {
   //          return ['errorMessage' => "Mot passe incorrect"]; 
   //      } 
   //      $_SESSION['user_id'] = $user['id'];
        
   //      $http->redirectTo('');