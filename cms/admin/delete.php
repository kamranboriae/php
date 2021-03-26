<?php


session_start();

include_once('../includes/connection.php');
include_once('../includes/article.php');

$article = new Article();

if (isset($_SESSION['logged_in'])) {
    if (isset($_GET['id'])) {
        # code...
        $id = $_GET['id'];
        $query = $conn->prepare('DELETE FROM cms.articles WHERE article_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        header("Location: delete.php");
        
    }
    # code...display delete page
    $articles = $article->fetch_all();
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>cms</title>
        <link rel="stylesheet" type="text/css" href="../assets/styles.css">
    </head>

    <body>
        <div class="container">

        <a href="index.php" id="logo">CMS</a>

        <br />

        <h4>Select an Article to Delete: </h4>

        <form action="delete.php" method="get">

        <select onchange="this.form.submit();" name="id">

        <?php foreach($articles as $article) { ?>

            <option value="<?php echo $article['article_id']; ?>">
            <?php echo $article['article_title']; ?>
            </option>
            <?php } ?>
        </select>

        </form>

        </div>
    </body>

</html>
<?php
}else {
    # code...
    header('Location: index.php');
}

?>