<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <?php
        $rand = substr(md5(microtime()),rand(0, 26),7);
        $url = htmlspecialchars($_POST['url']);
        $domain = "http://18.153.3.151/phpsturm/short/shorted";

        //create URL-Textfile
        file_put_contents("./shorted/" . $rand . ".txt", $url);

        //create .php-File from default.php
        copy("default.php", "./shorted/" . $rand . ".php");


        $link = $domain . "/" . $rand . ".php";

    echo "Deine URL ist nun unter <a href=" . $link . ">" . $link . "</a> erreichbar!";
    ?>


</body>
</html>