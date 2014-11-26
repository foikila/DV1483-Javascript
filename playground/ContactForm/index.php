<?php
 $title='ContactForm';
 include(__DIR__ . '/../template/header.php');
 ?>
<article class="wrapper">
    <header>
        <h1>Massa cool text</h1>
    </header>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat <a href="#" data-toggle="#contact">kontakta mig</a>. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</article>
<div>
    <button data-toggle="#contact">En annan knapp</button>
    <a href="#" data-toggle="#contact">En länk</a>
    <button data-toggle="#contact">En annan knapp</button>
    <button data-toggle="#contact">En annan knapp</button>
    <button data-toggle="#contact">En annan knapp</button>
</div>
<div class="wrapper">
    <div id="contact" class="contact-form">
        <span data-close="#" class=close>X</span>
        <form action="#">
            <ul>
                <li>
                    <label for="name">Namn: </label>
                    <input name="name" id="name">
                </li>
                <li>
                    <label for="email">Email: </label>
                    <input name="email" id="email">
                </li>
                <li>
                    <label for="text">Text: </label>
                    <textarea name="text" id="text" cols="30" rows="30"></textarea>
                </li>
                <li>
                    <input type="reset" data-close value="Stäng">
                    <input type="submit" value="Skicka">
                </li>
            </ul>
        </form>
    </div>
</div>
<?php
$path = __DIR__;
include(__DIR__ . '/../template/footer.php');
?>
<script type="text/javascript" src="ContactForm.js"></script>
