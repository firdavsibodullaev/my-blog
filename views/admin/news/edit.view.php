<?php require __DIR__ . "/../parts/header.view.php" ?>
    <section class="container">
        <div class="mt-2">
            <a href="/admin/news.php" class="btn btn-secondary">Назад</a>
        </div>
        <div class="mt-5">
            <?php show_errors() ?>
            <form action="/admin/news-edit.php?id=<?= $post['id'] ?>" 
                    method="post" 
                    enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" 
                            name="title" 
                            class="form-control" 
                            value="<?= $post['title'] ?>" 
                            id="title" 
                            placeholder="Введите заголовок">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Тело</label>
                    <textarea name="body" 
                                class="form-control"
                                rows="10" 
                                id="body"
                                placeholder="Введите тело"><?= $post['body'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="banner" class="form-label">Баннер</label>
                    <input type="file" class="form-control" name="banner" accept=".jpg, .png">
                </div>
                <div class="mb-3">
                    <label for="publish_date" class="form-label">Дата публикации</label>
                    <input type="date" 
                            name="publish_date"
                            class="form-control"
                            value="<?= $post['publish_date'] ?>"
                            id="publish_date">
                </div>
                <div class="mb-5">
                    <input type="submit" value="Изменить" class="btn btn-primary">
                </div>
            </form>
        </div>
    </section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>
