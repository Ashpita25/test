<?php

include 'conn.php';

//$sql = "INSERT INTO users (email, password, name) VALUES ('kirill@gmail.com', '123456', 'Кирилл')";
//$stmt = $db->prepare($sql);
//$stmt->bindParam(':email', $email, PDO::PARAM_STR);
//$stmt->bindParam(':password', $password, PDO::PARAM_STR);
//$stmt->bindParam(':name', $name, PDO::PARAM_STR);

//var_dump($stmt->execute());

//var_dump($users);

function selectq() {
  
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$db = DB::getInstance();

$sql = $db-> prepare ("INSERT INTO users (name, password, email) VALUES ('$name', '$pass', '$email')";
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
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