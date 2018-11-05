<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>url-shortener!</title>
    <?php include 'style.php'?>
</head>
<body>
    <div class="outer_container">
    <form class="inner_container" action="shorten.php" method="post">
        <input type="text" name="url" placeholder="http(s)://your.url">
        <input type="submit" name="submit" value="make url short">
    </form>
    </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>