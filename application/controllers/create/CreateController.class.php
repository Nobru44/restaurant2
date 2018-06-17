<?php
$page = "create";


class CreateController
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


 $user = [];
    $user['firstname'] = $_POST['firstname'];
    $user['lastname'] = $_POST['lastname'];
    $user['birthday'] = $_POST['birthday'];
    $user['mail'] = $_POST['mail'];
    $user['password'] = $_POST['password'];
    $user['adress'] = $_POST['adress'];
    $user['zipcode'] = $_POST['zipcode'];
    $user['city'] = $_POST['city'];
    $user['phone'] = $_POST['phone'];
    print_r($user);

function saveUser(array $user) {
    $sql = 'INSERT INTO users (id, firstname, lastname, mail, password, adress, zipcode, city, phone, created_at, updated_at) VALUES (NULL, :firstname, :lastname, :mail, :password, :adress, :zipcode, :phone, DATE(), DATE())'; 
        executeSql($sql, $user);
}


saveUser($user);