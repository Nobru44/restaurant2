<?php


class PaymentModel {

	public static function getListProductsInCart($id)


	class ProductModel {

	public static function getAllProducts() {
		$db = new Database();
		$sql = "SELECT * FROM product";
		$products = $db->query($sql);
		return $products;
	}

	public static function getProductById($id) {


	public static function createFacture($user_id) {
		$db = new Database();
		


		$sql ="
		SELECT * FROM users
		LEFT JOIN orders ON orders.user_id = users.id
		LEFT JOIN order_line ON order_line.order_id = orders.id
		WHERE users.id LIKE  5
		";


		$params = [$user_id];
		$user = $db->queryOne($sql, $params);
		return $order;
	}



	public static function createOrderLine(array $order) {


		$db = new Database();
		$sql = "
		INSERT INTO order_line (id, product_id, order_id, quantity, priceHT, tax)
		";
		$db->executeSql($sql, $order);
	}

	
}