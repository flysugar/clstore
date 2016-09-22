<?php
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

	public static function getUsersList(){}
	public static function loadUser($id){}
	public static function deleteUser($id){}
}
?>