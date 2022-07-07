<?php

use Akash\PortfolioApp\Portfolio\Portfolio;

require_once __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
</head>

<body>
    <h2>Portfolios</h2>
    <?php
        $portfolio = new Portfolio();
        $portfolios = $portfolio->get();
    ?>
    <ul>
        <?php foreach($portfolios as $portfolio): ?>
            <li><?php echo $portfolio['title']; ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>