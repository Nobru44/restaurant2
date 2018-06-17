<?php
$page = "login";


class LoginController
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
        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */
    }
}





function getUserLog (array $user) {


$mail = strip_tags($user['mail']);
$password = strip_tags($user['password']);
$userLog = [];
$userLog['mail'] = $mail;
$userLog['password'] = $password;


$new2 = new Database();
$mail = $userLog['mail'];
$sql = "SELECT * FROM users WHERE mail LIKE '$mail'";
$infoUser = $new2->queryOne($sql);
return $infoUser;
}

