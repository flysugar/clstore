<?php
include_once(__DIR__ . '/../User.php');

class testUser extends PHPUnit_Framework_TestCase {

	public function testTworzenieObiektuUser() {
		$u = new User();
		$this->assertNotNull($u, "Nie można stworzyć obiektu User");
	}
}
?>