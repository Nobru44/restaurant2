<?php

class CartController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        $products = Cart::getProductsInCart();
        return ['products'=> $products, '_raw_template'=> true];



        

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
        

        if(isset($formFields['del'])) {
            $id = $formFields['del'];
            Cart::deleteOneProduct($id);
        } else {
       
        $quantity = $formFields['quantity'];
        $productId = $formFields['id'];       
        
        Cart::addInCart($productId, $quantity);

        $products = Cart::getProductsInCart();

        return ['products'=> $products, '_raw_template'=>true];
        }
    }
}