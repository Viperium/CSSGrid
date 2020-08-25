<?php
    define('PAGE', 'RAM - Repeat Auto Minmax');
    define('CSS', 'ram');
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
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box">3</div>
        <div class="box">4</div>
    </div>
</div>
</body>
</html>