<?php


class ProductModel {

	public static function getAllProducts() {
		$db = new Database();
		$sql = "SELECT * FROM product";
		$products = $db->query($sql);
		return $products;
	}

	public static function getProductById($id) {
		$db = new Database();
		$sql = "SELECT * FROM product WHERE id LIKE  ?";
		$params = [$id];
		$product = $db->queryOne($sql, $params);
		return $product;
	} 
}