<?php 
    $a = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Title" ?></h1>
    <?php if($a) : ?>
        <ul>
            <?php for($i=1; $i <= 100; $i++) : ?>
                <li><?php echo $i ?></li>
            <?php endfor; ?>
        </ul>
    <?php endif; ?>
</body>
</html>