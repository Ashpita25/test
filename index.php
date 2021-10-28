<?php
declare(strict_types=1);

include 'conn.php';


//echo 'HI!' . "<br> </br>";

//$db = DB::getInstance();

//$stmt = $db->prepare("SELECT * FROM users");
//$stmt->execute();

//$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$sql = "INSERT INTO users (email, password, name) VALUES ('kirill@gmail.com', '123456', 'Кирилл')";
//$stmt = $db->prepare($sql);
//$stmt->bindParam(':email', $email, PDO::PARAM_STR);
//$stmt->bindParam(':password', $password, PDO::PARAM_STR);
//$stmt->bindParam(':name', $name, PDO::PARAM_STR);

//var_dump($stmt->execute());

//var_dump($users);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
        <metacharset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styleauth.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> Авторизация </title>
</head>
<body>
        <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="query.php" method="post" >
        	<!-- Name input -->
          <div class="form-outline mb-4">
            <input type="name" name="name" id="form1Example13" class="form-control form-control-lg" placeholder= "Введите Ваше имя" />
            <label class="form-label" for="form1Example13">Ваше имя</label>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" placeholder="Введите адрес Вашей почты" />
            <label class="form-label" for="form1Example13">E-mail</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="pass" id="form1Example23" class="form-control form-control-lg" placeholder="Введите пароль"/>
            <label class="form-label" for="form1Example23">Пароль</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
           <a href ='query.php'> Посмотреть </a>
            <a href= 'signup.php'>Жми сюда, если нет аккаунта</a>
          </div>

          <!-- Submit button -->
          <button type="submit"  class="btn btn-primary btn-lg btn-block">Sign in</button>
          <button type="submit"  class="btn btn-primary btn-lg btn-block">Exit
            
        </button>
             </form>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
