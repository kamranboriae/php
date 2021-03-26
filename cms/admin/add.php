<?php


session_start();

include_once('../includes/connection.php');

if ( isset($_SESSION['logged_in']) ) {
    # code... display add page
    if (isset($_POST['title'], $_POST['content'])) {
        # code...
        $title = $_POST['title'];
        $content = nl2br($_POST['content']);
        if (empty($title) or empty($content)) {
            # code...
            $error = 'All fields are required!';
        } else {
            # code...
             $query = $conn->prepare('INSERT INTO cms.articles (article_title, article_content, article_timestamp) VALUES (?, ?, ?) ');
             
             $query->bindValue(1, $title);
             $query->bindValue(2, $content);
             $query->bindValue(3, time());

             $query->execute();

             header('Location: index.php');
        }
        
    } else {
        # code...
    }
    
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

        <br/>

        <h4>Add Article</h4>
        <?php if (isset($error)) { ?>

            <small style="color:#aa0000;"><?php echo $error; ?> </small>
            <br/><br/>
        <?php }?>
        <form action="add.php" method="post" autocomplete="off">

        <input type="text" name="title" placeholder="title"><br /><br />
        
        <textarea name="content" cols="59" rows="15" placeholder="content"></textarea><br /><br />

        <input type="submit" value="Add Article">
        </form>

        </div>
    </body>

</html>

    <?php
}else{
    header('Location: index.php');
}

?>