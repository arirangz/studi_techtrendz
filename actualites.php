<?php
require_once __DIR__."/lib/config.php";
require_once __DIR__."/lib/pdo.php";
require_once __DIR__."/lib/article.php";
require_once __DIR__."/templates/header.php";


$articles = getArticles($pdo);

?>

<h1>TechTrendz Actualités</h1>
<?php


?>
<div class="row text-center">
    <?php foreach ($articles as $key => $article) { ?>
        <?php require __DIR__ . "/templates/article_part.php"; ?>
    <?php } ?>

</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>