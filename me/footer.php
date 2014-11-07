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
<!--	<li><a href="#">#</a></li>-->
    </ul>
	
    <div class="lower-footer">
        "Design no need" - Jonatan Karlsson&nbsp;|&nbsp;<a href="../source.php">Source.php</a>
    </div>
</footer>

</body>
</html>
