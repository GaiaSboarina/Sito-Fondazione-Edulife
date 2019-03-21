<?php include "../php/insert_news.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../css/font.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style_news.css">
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
        <title>News ed Eventi</title>
        <h1>NEWS ED EVENTI DI FONDAZIONE EDULIFE</h1>
    </head>
    <body>
      <?= getAllNews() ?> 
    </body>
</html>