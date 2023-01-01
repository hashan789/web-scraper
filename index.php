<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web scraper</title>
</head>
<body>
    <div class="top">
       <h2>w3School</h2>
    </div>
    <div class="headline">
        <h3>Top-Menu</h3>
    </div>
    <div class="menu">
       <?php

             include('webScrap.php');

        ?>
    </div>
    <div class="footer"></div>
</body>
</html>