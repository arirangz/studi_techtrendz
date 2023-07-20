<?php

/*

Page 1:
LIMIT 0, 10
Page 2:
LIMIT 10, 10
Page 3:
LIMIT 20, 10
Page 4:
LIMIT 30, 10

param : page et limit
offest = (page - 1) * limit
Page 3
30     = (3 -1) * 10

*/


function getArticles(PDO $pdo, int $limit = null, int $page = null ):array
{
    $sql = "SELECT * FROM articles ORDER BY id DESC";
    if ($limit && !$page) {
        $sql .= " LIMIT :limit";
    }
    if ($page) {
        $sql .= " LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }

    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}


function getTotalArticle(PDO $pdo):int
{
    $sql = "SELECT COUNT(*) as total FROM articles;";

    $query = $pdo->prepare($sql);

    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return $result['total'];
}



function getArticleById(PDO $pdo, int $id):array|bool
{
    $sql = "SELECT * FROM articles WHERE id = :id";

    $query = $pdo->prepare($sql);
    
    $query->bindValue(":id", $id, PDO::PARAM_INT);


    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}

function getArticleImage(string|null $image):string
{
    if ($image === null) {
        return _ASSETS_IMAGES_FOLDER_."default-article.jpg";
    } else {
        return _ARTICLES_IMAGES_FOLDER_.htmlentities($image);
    }
}