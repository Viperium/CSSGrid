<?php
    define('PAGE', 'Holy Grail');
    define('CSS', 'holy-grail');
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
        <section id="header"><h1 contenteditable>Header.com</h1></section>
        <div class="left-sidebar" contenteditable>Left Sidebar</div>
        <main contenteditable>Main Content</main>
        <div class="right-sidebar" contenteditable>Right Sidebar</div>
        <footer contenteditable>Footer Content — Header.com 2020</footer>
    </div>
</div>
</body>
</html>