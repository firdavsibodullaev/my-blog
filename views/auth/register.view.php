<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="p-5 w-75">
            <h4 class="mb-3 text-center">Регистрация</h4>
            
            <?php show_errors() ?>

            <form action="/register.php" method="post">
                <div class="mb-3">
                    <label for="last_name" class="form-label">Фамилия</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Введите фамилию">
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">Имя</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Введите имя">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
                </div>
                <div class="mb-3">
                    Если у вас есть аккаунт, нажмите на <a href="/login.php">войти</a>!
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>