<?php

include 'conn.php';



function selectq() {
	
$name = $_POST['name'];
$pass = $_POST['pass'];

$db = DB::getInstance();

$sql = $db-> prepare ("SELECT * FROM users WHERE name  ='$name' AND password = '$pass'");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);

if (empty($users))
{
	echo "Ничего не найдено";
} else
{
	echo "Ваше имя" . print_r ($name);
}

}

selectq();


echo "<a href = index.php> На главную </a>";

?>