<?php require __DIR__ . "/../parts/header.view.php" ?>
<section class="container mt-5">
    <h4 class="text-center"><?= $post['title'] ?></h4>
    <div class="d-flex justify-content-center my-5">
        <img src="<?= $post['banner'] ?>" style="width:60%" alt="Banner">
    </div>
    <div>
        <a href="/admin/news-like.php" class="text-success me-1">
            <i class="fa-solid fa-thumbs-up"></i> | <?= $post['like'] ?? 0 ?>
        </a>

        <a href="/admin/news-dislike.php" class="text-danger ms-1">
        <?= $post['dislike'] ?? 0 ?> | <i class="fa-solid fa-thumbs-down"></i>
        </a>
    </div>
    <div>
        <p class="text-justify"><?= $post['body'] ?></p>
        <div class="d-flex justify-content-between">
            <div>
                <strong>Дата публикации:</strong> <?= date_create($post['publish_date'])->format('d.M.Y') ?>
            </div>
            <div>
                <strong>Автор:</strong> <?= $post['last_name'] ?> <?= $post['first_name'] ?>
            </div>
        </div> 
    </div>
</section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>