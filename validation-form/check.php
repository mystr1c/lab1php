<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина. <a href='/lab1/index2.php'><br>Вернуться</a>";
        exit();
    } else if(mb_strlen($name) < 2 || mb_strlen($login) > 50) {
        echo "Недопустимая длина имени. <a href='/lab1/index2.php'><br>Вернуться</a>";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "Недопустимая длина пароля (от 2 до 6 символов). <a href='/lab1/index2.php'><br>Вернуться</a>";
        exit();
    }

    $pass = md5($pass."i13uh2hn234");

    $mysql = new mysqli('localhost','root','root','register_bd');
    $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
    VALUES('$login','$pass','$name')");

    $mysql->close();

    header('Location: /lab1/');
?>