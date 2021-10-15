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
    <title>Регистрация</title>

    <style>
        body {
            background-image: url("assets/background/back2.jpg");
            background-size: 100%;
        }
    </style>

</head>
<body>

<!--Форма регистрации-->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя" required>

        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="Введите свой e-mail" required>

        <label>Загрузите фото профиля</label>
        <input type="file" name ="avatar_required" class="avatar">

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль" required>

        <label>Подтвердите свой пароль</label>
        <input type="password" name="password_confirm" placeholder="Подтверждение пароля" required>

        <button type="submit" class="regbutton">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">Войдите</a>
        </p>

            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' .$_SESSION['message'] . ' </p> ';
            }
            unset($_SESSION['message']);

            ?>
    </form>

</body>
</html>