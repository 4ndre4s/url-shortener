<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <script>
        <?php
            $filename = basename(__FILE__, ".php");
            $url = file_get_contents($filename . ".txt");
        ?>
        window.location = "<?php echo $url;?>";
    </script>
</body>
</html>