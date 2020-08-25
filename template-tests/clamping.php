<?php
    define('PAGE', 'Clamping My Style');
    define('CSS', 'clamping');
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
            <h1>Title Here</h1>
            <div class="visual"></div>
            <p>Descriptive Text. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed est error repellat veritatis.</p>
        </div>
    </div>
</div>
</body>
</html>