<?php

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>$title</title>
    
    <!--boot-strap-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons-1.4.0/bootstrap-icons.css">
    <!--jquery-ui-->
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
    <!--ui-kit-->
    <link rel="stylesheet" type="text/css" href="ui-kit/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="ui-kit/css/uikit-rtl.min.css">
    <!--fontawsome-->
    <link rel="stylesheet" type="text/css" href="fontawsome/css/all.min.css">
    <!--template-css-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<body>
<nav class="navtop">
    <div>
        <h1>وبلاگ</h1>
        <a href="about.php"><i class="fas fa-file"></i>در باره ما</a>
        <a href="contactsus.php"><i class="fas fa-phone"></i>تماس با ما</a>
        <a href="index.php"><i class="fas fa-home"></i>خانه</a>
    </div>
</nav>
EOT;
}

function template_footer() {
echo <<<EOT


    <!--jquery-->
    <script src="jquery/jquery.min.js"></script>
    <!--boot-strap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--jquery-ui-->
    <script src="jquery-ui/jquery-ui.min.js"></script>
    <!--ui-kit-->
    <script src="ui-kit/js/uikit.min.js"></script>
    <script src="ui-kit/js/uikit-icons.min.js"></script>
    <!--fontawsome-->
    <script src="fontawsome/js/all.min.js"></script>
    <!--template-javascript-->
    <script src="js/javascript.js"></script>



</body>
</html>
EOT;
}
?>