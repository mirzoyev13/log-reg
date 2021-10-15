<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: profile.php');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Авторизация</title>

    <style>
        body {
            background-image: url("assets/background/back1.jpg");
            background-size: 100%
        }
    </style>

</head>
<!--Форма авторизации-->

   <div>
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>

        <label>Пароль</label>
        <input type="password" name = "password"  placeholder="Введите свой пароль" required>

        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a>
        </p>

        <?php
            if ($_SESSION['message'])
            {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>
   </div>



</body>
</html>