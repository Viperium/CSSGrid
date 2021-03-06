<?php
define('PAGE', 'Template 2');
define('CSS', 'test');
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
            <div class="grid-item grid-item-1">
                <!--            Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                <!--            Autem, corporis culpa dolores eaque, eligendi esse eveniet fugiat fugit in laboriosam nihil obcaecati quisquam ratione rem sunt,-->
                <!--            totam voluptas! Cum ex, laboriosam. Aliquam blanditiis deserunt illum ipsa magni maiores nulla provident quisquam reiciendis.-->
                <!--            A aspernatur, blanditiis natus nisi repellat repellendus voluptatem!-->
            </div>
            <div class="grid-item grid-item-2">
                <!--            Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                <!--            Amet culpa dignissimos, distinctio, et impedit ipsam iusto molestias officiis praesentium provident sapiente sequi tempora unde, vero.-->
            </div>
            <div class="grid-item grid-item-3"></div>
            <div class="grid-item grid-item-4"></div>
            <div class="grid-item grid-item-5"></div>
            <div class="grid-item grid-item-6"></div>
        </div>

    </div>

</body>
</html>