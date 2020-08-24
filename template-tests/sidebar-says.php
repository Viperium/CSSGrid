<?php
    define('PAGE', 'Sidebar Says');
    define('CSS', 'sidebar-says');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/background.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/<?php echo CSS ?>.css">
    <title><?php echo PAGE; ?> Example</title>
</head>
<body>

<div class="grid-container">
    <header><?php require('../template/nav.php') ?></header>
    <div class="example">
        <div class="sidebar" contenteditable>
            Min: 150px
            <br/>
            Max: 25%
        </div>
        <div class="content" contenteditable>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis nulla architecto maxime modi nisi. Quas saepe dolorum,
            architecto quia fugit nulla! Natus,
            iure eveniet ex iusto tempora animi quibusdam porro?
        </div>
    </div>
</div>
</body>
</html>