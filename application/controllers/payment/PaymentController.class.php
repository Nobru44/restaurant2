<?php 

class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
 
        $userId = $_SESSION['user_id'];
        $facture = Order::createFactureById($userId);


        $list = Cart::getProductsInCart();


        $totalHT = Cart::totalPriceHT($list);
        var_dump($totalHT);

        return ['facture'=>$facture, 'list'=>$list, 'totalHT'=>$totalHT];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

      /*  $product['priceHT'];*/
        

       
        

    
    }
}