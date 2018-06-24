<?php


class Order {

	public static function createOrder($order) {
		$db = new Database();
		
		$sql = "
			INSERT INTO orders (id, user_id, created_at, tax, status)
			VALUES
			(NULL, :user_id, NOW(), :tax, :status)
			";

			$db->executeSql($sql, $order);

	}


	public static function getOrderById($user_id) {
		$db = new Database();
		$sql = "SELECT * FROM orders WHERE user_id LIKE  ?";
		$params = [$user_id];
		$order = $db->queryOne($sql, $params);
		return $order;
	}

	public static function createOrderLine(array $order) {


		$db = new Database();
		$sql = "
		INSERT INTO order_line (id, product_id, order_id, quantity, priceHT, tax)
		VALUES (null, :product_id, :order_id, :quantity, :priceHT, :tax)
		";
		$db->executeSql($sql, $order);
	}

	public static function createFactureById($user_id) {
 		$db = new Database();
		$sql = "
			SELECT * FROM users
			LEFT JOIN orders ON orders.user_id = users.id
			LEFT JOIN order_line ON order_line.order_id = orders.id
			WHERE users.id LIKE  ?
		";
		$params = [$user_id];
		$facture = $db->queryOne($sql, $params);
		return $facture;
 	}
}