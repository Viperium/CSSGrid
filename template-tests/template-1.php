<?php
define('PAGE', 'Template 1');
define('CSS', 'home');
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
    <div id="website" class="container">
        <header>
            <?php require('../template/nav.php') ?>
            <div id="banner">
                <h2>Banner Text</h2>
            </div>
        </header>
        <div id="sidebar">
            <h2>Sidebar Text</h2>
        </div>
        <main id="content">
            <div id="articles">
                <article>
                    <h2>Google Chrome</h2>
                    <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
                </article>

                <article>
                    <h2>Mozilla Firefox</h2>
                    <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
                </article>

                <article>
                    <h2>Microsoft Edge</h2>
                    <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
                </article>
            </div>
            <div id="formselect">
                <form action="/action_page.php" method="get">
                    <label for="browser">Choose your browser from the list:</label>
                    <input list="browsers" name="browser" id="browser">
                    <datalist id="browsers">
                        <option value="Edge">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>
                    <input type="submit">
                </form>
            </div>
        </main>
        <footer>
            <p>Author: Yoran Schreuder Peters</p>
            <p><a href="mailto:yoran@viperium.nl">yoran@viperium.nl</a></p>
        </footer>
    </div>

</body>
</html>