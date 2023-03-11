<?php require "parts/header.view.php" ?>
    <section class="mt-5">
        <div class="container d-flex justify-content-center">
            <div class="w-50">

                <?php show_errors() ?>
                
                <form action="/admin/profile.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Фамилия</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Введите фамилию" value="<?= $_SESSION['user']['last_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Имя</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Введите имя" value="<?= $_SESSION['user']['first_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин" value="<?= $_SESSION['user']['login'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Загрузите аватар</label>
                        <input class="form-control" type="file" accept=".jpg" name="avatar" id="avatar">
                    </div>

                    <div class="mb-3" type="submit">
                        <button class="btn btn-primary">Сохранить</button>
                    </div>

                </form>
            </div>
            
        </div>
    </section>
<?php require "parts/footer.view.php" ?>