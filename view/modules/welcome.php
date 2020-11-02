<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<header> 
    <?php
        include_once('view/nav.php');
    ?>
    </header>

    <?php
        $mvc = new viewController();
        $mvc -> enlacesPaginasController();
    ?>
</body>
</html>