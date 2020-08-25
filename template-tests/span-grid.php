<?php
    define('PAGE', '12-span Grid');
    define('CSS', 'span-grid');
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
        <div class="box span-12">Span 12</div>
        <div class="box span-6">Span 6</div>
        <div class="box span-4">Span 4</div>
        <div class="box span-2">Span 2</div>
    </div>
</div>
</body>
</html>