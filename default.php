<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'style.php'?>

</head>
<body>
    <script>
        <?php
            $filename = basename(__FILE__, ".php");
            $url = file_get_contents($filename . ".txt");
        ?>
        window.location = "<?php echo $url;?>";
    </script>
    <?php
        include 'footer.php';
    ?>
</body>
</html>