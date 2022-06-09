<?
	$name = $_GET['name'];
	$mail = $_GET['mail'];
    $phone = $_GET['phone'];
    $password = $_GET['password'];
	file_put_contents("data.txt", "{$name}|{$mail}|{$phone}|{$password}");
?>

