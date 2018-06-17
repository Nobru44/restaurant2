<?php 

function getUserByMail($mail) {
$user = 'nobru974';
$password = 'cuba2018';

$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);
$db->exec('SET NAMES UTF8');

$sql = "SELECT * FROM user WHERE email LIKE '$mail'";

$statement = $db->prepare($sql);
$statement->execute();
$userLog = $statement->fetch(\PDO::FETCH_ASSOC);

return $userLog;
}



function getUserById($idUser) {
$user = 'nobru974';
$password = 'cuba2018';

$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);
$db->exec('SET NAMES UTF8');

$sql = "SELECT * FROM user WHERE id LIKE '$idUser'";

$statement = $db->prepare($sql);
$statement->execute();
$userId = $statement->fetch(\PDO::FETCH_ASSOC);

return $userId;
}