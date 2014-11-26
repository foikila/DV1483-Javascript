<?php
include 'config.php';
$path = __DIR__;
$title = 'Contact form';

include 'header.php';
use \Michelf\MarkdownExtra;
$html = file_get_contents('reports/contatForm/README.md');
$html = MarkdownExtra::defaultTransform($html);

?>
    <section class="wrapper">
        <article class="markdown-body">
            <?php
                echo $html;
            ?>
        </article>
    </section>
</main>


<?php include "footer.php" ?>
