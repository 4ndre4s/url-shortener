<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'style.php' ?>
    <title>Url has been shortened</title>
</head>
<body>
    <?php
        define("token_length", 7);
        //todo: use domain
        $token = file_get_contents("http://18.153.3.151:2089/". token_length, False);
        $url = htmlspecialchars($_POST['url']);
        $domain = "http://18.153.3.151/phpsturm/short/shorted";


        //TODO: check, if it is a url
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
    <div class="outer_container">
        <div class="inner_container">
            <?php
                if ($isUrl) {
                    echo "Your link is available under <a href=" . $link . ">" . $link . "</a>";
                } else {
                    echo "The entered text was not recognized as a url!";
                }
            ?>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>