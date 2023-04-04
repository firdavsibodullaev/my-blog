<?php require __DIR__ . "/../parts/header.view.php" ?>
<section class="container mt-5">
    <?= show_errors() ?>
    <h4 class="text-center"><?= $post['title'] ?></h4>
    <div class="d-flex justify-content-center my-5">
        <img src="<?= $post['banner'] ?>" style="width:60%" alt="Banner">
    </div>
    <div>
        <a href="/admin/news-like.php?id=<?= $post['id'] ?>" class="text-success me-1">
            <i class="fa-solid fa-thumbs-up"></i> | <?= $post['like'] ?? 0 ?>
        </a>

        <a href="/admin/news-dislike.php?id=<?= $post['id'] ?>" class="text-danger ms-1">
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
    <div class="mt-5">
        <form action="/admin/add-comment.php" method="post">
            <input type="hidden" name="post_id" value="<?=$post['id']?>">
            <div class="mb-3">
                <textarea name="comment" 
                            class="form-control"
                            rows="2" 
                            id="comment"
                            placeholder="Комментарий"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Сохранить">
        </form>
        <div class="mt-5">
            <p>Комментарии:</p>
            <?php foreach($comments as $comment): ?>
                <div class="mb-3">
                    <p class="position-relative pb-4">
                        <?= $comment['text'] ?>
                        <span   class="text-body-secondary position-absolute bottom-0 start-0"
                                style="font-size: 14px;">
                            <?= $comment['date'] ?>  |
                            <?= $comment['last_name'] ?> <?= $comment['first_name'] ?>
                        </span>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php require __DIR__ . "/../parts/footer.view.php" ?>