<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CLStore Shop</title>
</head>
<body>

<h2>CLStore Shop</h2>

<img src="img/szop.jpg" alt="CLStore Szop" />

<hr/>

<form method="post">
Adres email: <input type="text" name="email" /><br/>
Hasło: <input type="password" name="password" /><br/>
<input type="submit" value="Zaloguj" />
</form>

<hr/>
<a href="index.php">Strona główna</a> | <a href="basket.php">Koszyk</a> | <a href="order.php">Zamówienia</a> | <a href="register.php">Rejestracja</a> | <a href="user.php">Dane użytkownika</a> | <a href="product.php">Szczegóły produktu</a>
 
</body>
</html>