<?php
    $path = __DIR__;
    $title = 'Move micky';
    include($path . '/../template/header.php');
?>

<div id='flash'>
    <h1>Hi, I'm a baddie</h1>
    <p>Click to move me or just move me with the keys arrows, space, h, b, f, r. Have fun!</p>
    <div id='b1' class='baddie down'></div>
</div>

<?php

    include($path . '/../template/footer.php');
?>
