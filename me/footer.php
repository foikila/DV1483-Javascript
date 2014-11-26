<footer class="wrapper">
    <h4 id="tree">Playground tree</h4>
    <ul class="playground">
        <li>Playground/</li>
        <?php
            foreach (read('../playground/', false) as $key => $value) {
                echo "<li><a href='{$value}'>{$key}</a></li>";
            }
        ?>
    </ul>
    <ul>
	   <li><a href="//jsfiddle.net/user/foiki/fiddles">jsfiddle</a></li>
    </ul>

    <div class="lower-footer">
        "Design no need" - Jonatan Karlsson&nbsp;|&nbsp;<a href="../source.php">Source.php</a>
    </div>
</footer>
<!-- <script src="js/jquery-2.1.0.min.js"></script> -->
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="js/contactForm.js"></script>

<script >
$(document).ready(function() {
    $('[data-toggle]').ContactForm();
});
</script>
</body>
</html>
