
<?php



class ProductController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        print_r($queryFields);
        $productId = $queryFields['id'];
        
        $product = ProductModel::getProductById($productId);
        return ['_raw_template' => true, 'product' => $product];


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
