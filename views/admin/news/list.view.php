<?php require __DIR__ . "/../parts/header.view.php" ?>
    <section class="container">
        <div class="mt-2">
            <div class="d-flex justify-content-between">
                <a href="/admin/news-create.php" class="btn btn-primary">Создать новость</a>
                <form action="/admin/news.php" method="get">
                    <div class="input-group mb-3">
                        <input type="text" 
                               class="form-control"
                               aria-label="Recipient's username"
                               aria-describedby="button-addon2"
                               placeholder="Поиск..."
                               value="<?= isset($_GET['query']) ? $_GET['query'] : '' ?>"
                               name="query">
                        <button class="btn btn-outline-secondary"
                                type="submit"
                                id="button-addon2">Поиск</button>
                    </div>
                </form>
            </div>   
        </div>
        <div class="mt-5">
            <?= show_message() ?>
            <?php if(isset($_GET['query'])): ?>
                Результаты по запросу: <?= htmlspecialchars($_GET['query']) ?>
            <?php endif ?>
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
                            <td><?= $news['last_name'] ?> <?= $news['first_name'] ?></td>
                            <td>
                                <a href="/admin/news-show.php?id=<?= $news['id'] ?>" class="btn btn-info">Смотреть</a>
                                <a href="/admin/news-edit.php?id=<?= $news['id'] ?>" class="btn btn-warning">Изменить</a>
                                <a href="/admin/news-delete.php?id=<?= $news['id'] ?>" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>
