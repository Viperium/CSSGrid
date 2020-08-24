<?php
    define('PAGE', 'Deconstructed Pancakes');
    define('CSS', 'deconstructed');
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
        <div class="pancake" >1</div>
        <div class="pancake" >2</div>
        <div class="pancake" >3</div>
    </div>
</div>
</body>
</html>