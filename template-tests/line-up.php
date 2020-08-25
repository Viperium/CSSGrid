<?php
    define('PAGE', 'Line Up');
    define('CSS', 'line-up');
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
        <div class="card">
            <h1>Title - Card 1</h1>
            <p>Medium length description. Let's add a few more words here.</p>
            <div class="visual"></div>
        </div>
        <div class="card">
            <h1>Title - Card 2</h1>
            <p>Long Description. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed est error repellat veritatis.</p>
            <div class="visual"></div>
        </div>
        <div class="card">
            <h1>Title - Card 3</h1>
            <p>Short Description.</p>
            <div class="visual"></div>
        </div>
    </div>
</div>
</body>
</html>