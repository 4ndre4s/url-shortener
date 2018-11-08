<?php
define("token_length", 7);
$token = file_get_contents("http://random-token.xyz/". token_length, False);
$url = htmlspecialchars($_POST['url']);
$domain = "https://view.make-short.xyz";

//create URL-Textfile
if (filter_var($url, FILTER_VALIDATE_URL)) {
    $isUrl = true;
    file_put_contents("../shorted/" . $token . ".txt", $url);
    //create .php-File from default.php
    copy("default.php", "../shorted/" . $token . ".php");
    $link = $domain . "/" . $token . ".php";

} else {
    $isUrl = false;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'style.php' ?>
    <title><?php echo ($isUrl ? "Url has been shortened!" : "Error!"); ?> </title>
</head>
<body>
    <div class="outer_container">
        <div class="inner_container">
            <?php
                if ($isUrl) {
                    echo "Your link is available under <a href=" . $link . ">" . $link . "</a>";
                } else {
                    echo "The entered text seems not to be an url!";
                }
            ?>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
