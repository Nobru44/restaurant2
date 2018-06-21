<?php
class UserSession {
	static function start() {
		session_start();
	}
	function getUser() {
		 return UserModel::getUserById($_SESSION['user_id']);
	}
	static function isConnected() {
		if (empty($_SESSION['user_id'])) {
			return false;
		} else {
			return true;
		}
	}
	static function connect($user) {
		$_SESSION['user_id'] = $user['id'];
	}
	static function logout() {
		session_destroy();
	}
	static function createCart($id_user) {
		if (UserSession::isConnected()) {
		$_SESSION['cart'] = array(); 
		}
	}


}