<?php

class EndController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

    }


    public function httpPostMethod(Http $http, array $formFields)
    {

        var_dump($_SESSION['cart']);

        Cart::videCart();
        echo "Merci de votre achat";
        var_dump($_SESSION['cart']);
    	
    }
}