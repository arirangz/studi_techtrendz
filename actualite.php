<?php
require_once __DIR__."/lib/config.php";
require_once __DIR__."/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";

$error = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $article = getArticleById($pdo, $id);

    if ($article["image"] === null) {
        $imagePath = _ASSETS_IMAGES_FOLDER_."default-article.jpg";
    } else {
        $imagePath =  _ARTICLES_IMAGES_FOLDER_.$article["image"];
    }

    if (!$article) {
        $error = true;
    }
} else {
    $error = true;
}
?>


<?php if (!$error) { ?>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=$imagePath; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=htmlentities($article["title"]); ?></h1>
            <p class="lead"><?=htmlentities($article["content"]); ?></p>
        </div>
    </div>
<?php } else { ?>
    <h1>Article introuvable</h1>
<?php } ?>


<?php require_once __DIR__ . "/templates/footer.php"; ?>