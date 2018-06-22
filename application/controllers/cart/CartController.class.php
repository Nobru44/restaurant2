<?php

class CartController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        $products = Cart::getProductsInCart();
        return ['products'=> $products, '_raw_templateraw'=> true];

    

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
       
        $quantity = $formFields['quantity'];
        $productId = $formFields['id'];
        
        
       Cart::addInCart($productId, $quantity);

       $products = Cart::getProductsInCart();

       return ['products'=> $products, '_raw_template'=>true];


       
       /* $infosOrder['name'] = $infosProduct['name'];
        $infosOrder['tax'] = $infosProduct['tax'];
        $infosOrder['price'] = $infosOrder['tax'] * $infosOrder['quantity'];
       
        UserSession::pushOrderInCart($infosOrder);
        // var_dump($_SESSION);
        return ['_raw_template' => true, 'infosOrder' => $infosOrder];
        */
    }
}