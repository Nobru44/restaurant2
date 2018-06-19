<?php


class UserModel {



	public function createUser(array $user) {
		if (empty($user['mail'])) {
			throw new Exception("Email empty");
		}
		if (empty($user['password'])) {
			throw new Exception("password empty");
		}
		if (empty($user['firstname'])) {
			throw new Exception("firstname empty");
		}
		if (empty($user['lastname'])) {
			throw new Exception("lastname empty");
		}
		if (empty($user['adress'])) {
			throw new Exception("adress empty");
		}
		if (empty($user['city'])) {
			throw new Exception("city empty");
		}
		if (empty($user['phone'])) {
			throw new Exception("phone empty");
		}
		$user['password'] = crypt($user['password'], 'abc');
		$db = new Database();
		
		$sql = "
			INSERT INTO users (firstname, lastname, birthday, mail, password, adress, zipcode, city, phone, created_at, updated_at)
			VALUES 
			(:firstname, :lastname, :birthday, :mail, :password, :adress, :zipcode, :city, :phone, NOW(), NOW())
			";
		$db->executeSql($sql, $user);
	}
	
	public function getUserByLog(array $user) {
		$db = new Database();
		$sql = "SELECT * FROM users WHERE mail LIKE "$user['mail']" AND password LIKE "$user['password']"";
		$infosUser = $db->queryOne($sql, $user);
		return $infosUser;
	} 
}