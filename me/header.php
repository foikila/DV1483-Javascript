<!DOCTYPE html>
<html lang="sv" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><? echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/markdown.css">
        <script type="text/javascript" src="../google.js"></script>
        <style><? if (isset($style)) { echo $style; } ?></style>
    </head>
    <body>
    <main>
        <nav class="top-nav wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
            <?php
                foreach (read('reports/') as $key => $value) {
                    echo "<li>";
                    if (getFile() != "" && $key == str_replace('.md', '', getFile())):
                        echo "<a class='selected' href='{$value}'>{$key}</a>";
                    else:
                        echo "<a href='{$value}'>{$key}</a>";
                    endif;
                    echo "</li>";
                }
            ?>
            </ul>
        </nav>
