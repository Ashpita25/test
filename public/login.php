<?php
declare(strict_types=1);

include '../config/conn.php';


class Login
{
    private PDO $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @param string $email
     * @param string $password
     *
     * @return mixed
     */
    public function execute(string $email, string $password)
    {
        $sql = $this->db->prepare("SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}'");
        $sql->execute();

        return $sql->fetch(PDO::FETCH_ASSOC);
    }
}

$login = new Login();

$errorMessage = null;

$email    = $_POST['email'] ?? null;
$password = $_POST['pass'] ?? null;

if ($email && $password) {
    $user = $login->execute($email, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: /");
        die();
    }

    $errorMessage = '<span style="color:red;">Неверный логин или пароль!</span>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <metacharset
    ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleauth.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Авторизация </title>
</head>
<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                     class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h4>Для авторизации введите логин и пароль</h4>
                <br>

                <?= $errorMessage ?>

                <form action="login.php" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input required type="email" name="email"
                               value="<?= $email ?>"
                               class="form-control form-control-lg"
                               placeholder="Введите адрес Вашей почты"/>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input required type="password" name="pass"
                               value="<?= $password ?>"
                               class="form-control form-control-lg"
                               placeholder="Введите пароль"/>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <a href='signup.php'>Регистрация</a>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
