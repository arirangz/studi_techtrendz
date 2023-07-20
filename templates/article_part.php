<?php
    if ($article["image"] === null) {
        $imagePath = _ASSETS_IMAGES_FOLDER_."default-article.jpg";
    } else {
        $imagePath =  _ARTICLES_IMAGES_FOLDER_.$article["image"];
    }
?>

<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="<?=$imagePath ?>" class="card-img-top" alt="<?=htmlentities($article["title"]) ?>">
        <div class="card-body">
            <h5 class="card-title"><?=htmlentities($article["title"]) ?></h5>
            <a href="actualite.php?id=<?=$article["id"];?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>