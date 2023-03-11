<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="bg-secondary text-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link <?= is_url("/admin") ?>" href="/admin">Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= is_url("/admin/news") ?>" href="/admin/news">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= is_url("/admin/profile.php") ?>" href="/admin/profile.php">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/logout.php">Выход</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center py-2">
                    <div class="">
                        <img src="<?= $_SESSION['user']['avatar'] ?>" width="40" alt="">
                    </div>
                    <div class="">
                        <?= $_SESSION['user']['last_name'] ?>
                        <?= $_SESSION['user']['first_name'] ?>
                    </div>
                </div>
            </div>
        </div>
    </header>