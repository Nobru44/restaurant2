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

        $userLog = new UserModel();
        print_r($formFields['mail']);
        /*$infosUser = getUserByLog($formfields);
        print_r($infoUser);   */ 
        



        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */

                
        // $userLog = new UserModel();
        // $userInfos = $userLog->getUserByLog('');
        // return ['products'=> $productList];  

    }
}


