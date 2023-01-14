<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
    <div class="container mt-4">
        <?php
        if ($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Вход</h1>
                <form action="/lab1/validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="pass" id="login" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Авторизоваться</button>
                    <p>
                        <br>Ещё нет аккаунта? - <a href="index2.php">Зарегистрируйтесь</a>!
                    </p>
                </form>
            </div>
            <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/lab1/exit.php">здесь</a>.</p>
            <?php endif;?>


        </div>
    </div>
</body>
</html>