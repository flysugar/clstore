<?php
include_once('config.inc.php');

class User {
	private $id;
	private $email;
	private $password;
	private $firstName;
	private $lastName;

	function __construct(){}
	public function login($email, $password){}
	public function getEmail(){}
	public function setEmail($email){}
	public function getFirstName(){}
	public function setFirstName($firstName){}
	public function getLastName(){}
	public function setLastName($lastName){}

	public static function getUsersList(){
		$sql = "SELECT id, email, password, firstname, lastname FROM Users WHERE is_admin=0";

		$db = new PDO(DB_DSN, DB_USER, DB_PASSWD);
		try {
			$stmt = $db->query($sql);
 			return $stmt->fetchAll(PDO::FETCH_ASSOC); // do zmiany na listę obiektów
		} catch(PDOException $ex) {
			// do obsłużenia
		}

		return false;
	}

	public static function loadUser($id){}
	public static function deleteUser($id){}
}
?>