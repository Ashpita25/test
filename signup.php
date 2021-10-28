
<!DOCTYPE html>
<html lang="en">
<head>
        <metacharset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styleauth.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> Регистрация </title>
</head>
<body>
        <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="insert.php" method="post" >
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

          <!-- Submit button -->
          <button type="submit"  class="btn btn-primary btn-lg btn-block">Зарегистрироваться</button>
          
             </form>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
