<?php

// article data
include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;


if (isset($_GET['id'])) {
    # code... display article
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
    ?>

<!DOCTYPE html>
<html lang="fa">

    <head>
        <title>cms</title>
        <link rel="stylesheet" type="text/css" href="assets/styles.css">
    </head>

    <body>
        <div class="container">

            <a href="index.php" id="logo">CMS</a>

            <h4>
             <?php echo $data['article_title'] ?>
             <small>
             -posted <?php echo date('l jS',$data['article_timestamp']); ?>
             </small>
             </h4>

             <p>
             <?php echo $data['article_content']?>
             </p>
             <a href="index.php">&larr; Back</a>
        </div>
    </body>

</html>

    <?php
} else {
    # code... return index.php page
    header('Location: index.php');
    exit();
}
?>