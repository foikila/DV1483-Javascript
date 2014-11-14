<?php
include 'config.php';

use \Michelf\MarkdownExtra;
$html = '<p>Failed to load file or no file is not selected</p>';
$file = getFile();

if ($file != "" ) {
    if ((@$text = file_get_contents('reports/' . $file)) !== false) {
        $html = MarkdownExtra::defaultTransform($text);
        $title = ucfirst(explode('.', $file)[0]) . " - Redovisning";
    }
}
include 'header.php';
?>
    </nav>
    <section class="wrapper">
        <article class="markdown-body">
            <? echo $html;?>
        </article>
    </section>
</main>
<?include 'footer.php';?>
