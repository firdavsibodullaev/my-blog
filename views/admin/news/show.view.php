<?php require __DIR__ . "/../parts/header.view.php" ?>
<section class="container mt-5">
    <h4 class="text-center"><?= $post['title'] ?></h4>
    <div class="d-flex justify-content-center my-5">
        <img src="<?= $post['banner'] ?>" style="width:60%" alt="Banner">
    </div>
    <div>
        <p class="text-justify"><?= $post['body'] ?></p>
        <div class="d-flex justify-content-between">
            <div>
                <strong>Дата публикации:</strong> <?= date_create($post['publish_date'])->format('d.M.Y') ?>
            </div>
            <div>
                <strong>Автор:</strong> <?= $post['user_id'] ?>
            </div>
        </div> 
    </div>
</section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>