<?php
    define('PAGE', 'Pancake Stack');
    define('CSS', 'pancake-stack');
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
        <section id="header"><h1>Header.com</h1></section>
        <main></main>
        <footer>Footer Content — Header.com 2020</footer>
    </div>
</div>
</body>
</html>