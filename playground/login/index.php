<?php
    $path = __DIR__;
    $title = 'Login and maintain session though Ajax';
    include($path . '/../template/header.php');
?>

<div id='flash'>
    <form id="form1" method=post>
        <p><label>Login:<br><input type=text name=user></label></p>
        <p><label>Password:<br><input type=password name=password></label></p>
        <p>
            <input id="login" type=button name=login value=Login>
            <input id="logout" type=button name=logout value=Logout>
            <input id="status" type=button name=status value=Status>
        </p>
        <p><output id="output"></output></p>
    </form>
</div>

<?php
    include($path . '/../template/footer.php');
?>
