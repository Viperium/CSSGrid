<?php
    define('PAGE', 'Home');
    define('CSS', 'home');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/<?php echo PAGE; ?>.css">
    <title><?php echo PAGE; ?> template</title>
</head>
<body>

    <div id="website" class="container">
        <header>
            <?php require('template/navIndex.php') ?>
            <div id="banner">
                <h2>Banner Text</h2>
            </div>
        </header>
    </div>

</body>
</html>