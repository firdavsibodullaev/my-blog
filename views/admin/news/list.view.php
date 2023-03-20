<?php require __DIR__ . "/../parts/header.view.php" ?>
    <section class="container">
        <div class="mt-2">
            <a href="/admin/news-create.php" class="btn btn-primary">Создать новость</a>
        </div>
        <div class="mt-5">
            <?= show_message() ?>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Баннер</th>
                        <th>Дата публикации</th>
                        <th>Автор</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($news_list as $news): ?>
                        <tr>
                            <td><?= $news['id'] ?></td>
                            <td><?= $news['title'] ?></td>
                            <td>
                                <img src="<?= $news['banner'] ?>" width="60" alt="">
                            </td>
                            <td><?= $news['publish_date'] ?></td>
                            <td><?= $news['user_id'] ?></td>
                            <td>
                                <a href="/admin/news-show.php?id=<?= $news['id'] ?>" class="btn btn-info">Смотреть</a>
                                <a href="/admin/news-edit.php?id=<?= $news['id'] ?>" class="btn btn-warning">Изменить</a>
                                <a href="" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>
