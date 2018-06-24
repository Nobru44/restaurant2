<?php

class ValidateController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
 
   
        $userId = $_SESSION['user_id'];
        
        $user = UserModel::getUserById($userId); 
        /*var_dump($user);*/

        $list = Cart::getProductsInCart();
    

        $priceHT = Cart::totalPriceHT($list);
        $priceTTC = Tools::getPriceTTC($priceHT);
        /*var_dump($priceTTC);*/


        $order=[];
        $order['user_id'] = $user['id'];
        $order['status'] = 'en cours';
        $order['tax'] = $priceTTC;

        var_dump($order);
        Order::createOrder($order);

        $orderInfos = Order::getOrderById($order['user_id']);
        var_dump($orderInfos['id']);
    
    $listIdProducts = [];
    
    foreach ($list AS $product) {
    array_push($listIdProducts, $product);
    
    }


    
        foreach ($listIdProducts AS $product) {
            $finalOrder = [];
            $finalOrder['order_id'] = $orderInfos['id'];
            $finalOrder['product_id'] = $product['id'];
            $finalOrder['quantity'] = $product['quantity'];
            $finalOrder['priceHT'] = $product['priceHT'];
            $finalOrder['tax'] = $product['tax'];
            var_dump($finalOrder);        
            Order::createOrderLine($finalOrder);
        }
       $http->redirectTo('payment');

    }
}
