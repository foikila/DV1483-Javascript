<?php
    $path = __DIR__;
    $title = 'jQuery';
    include($path . '/../template/header.php');
?>

<main class="wrapper">
    <h1>Uppgift 1</h1>
    <div id='box1' class='box'>
        <img src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="kalle"'>
        <h1>kalle anka satt på en planka</h1>
        <p>Ropade så här "Mamma, mamma se så stor jag är"</p>
    </div>

    <h1>Uppgift 2</h1>
    <div id='box2' class='box'>
        <img src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="kalle"'>
        <h1>Klicka på mig så händer de coola saker</h1>
        <p>Om jag lägger till <code>e.stopPropagation();</code>  så kan jag stoppa propageringen.</p>
    </div>

    <h1>Uppgift 3</h1>
    <div id='box3' class='box'>
        <button id="add">Lägg till element</button>
        <div id="yta">
        </div>
    </div>

    <h1>Uppgift 4</h1>
    <div id='box4' class='box'>
        <img src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="kalle">
        <h1>kalle anka satt på en planka</h1>
        <p>
            <label>Width: </label>
            <input id='width_incr' type='button' value='+'>
            <input id='width_decr' type='button' value='-'>
        </p>
        <p>
            <label>Height: </label>
            <input id='height_incr' type='button' value='+'>
            <input id='height_decr' type='button' value='-'>
        </p>
        <p>syns inte jätte tydligt pga bilden..</p>
    </div>

    <h1>Uppgift 5</h1>
    <div id='box5'>
        <img id="51" src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="kalle">
        <img id="52" src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="kalle">
        <div class="clearfix">
            <button id="b1">Click me</button>
            <button id="b2">Click me too!</button>
        </div>
    </div>
    <h1>Uppgift 6</h1>
    <div id='box6'>
        <img src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' class="lightbox kalle">
    </div>

    <h1>Uppgift 7</h1>
    <div id='box7'>
        <div class="gallery">
            <div class="gallery-current">
                <img>
            </div>
            <div class="gallery-all">
                <img data-path='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg'>
                <img data-path='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Micky-mouse.jpg'>
                <img data-path='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg'>
                <img data-path='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/goofy.jpg'>
            </div>
        </div>
    </div>

    <h1>Uppgift 8</h1>
    <div id='box8'>
        <div class="slideshow">
            <img data-src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg' alt="1">
            <img data-src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Micky-mouse.jpg' alt="2">
            <img data-src='//www.student.bth.se/~jokd13/javascript/playground/jQuery/img/goofy.jpg' alt="3">
        </div>
    </div>
</main>

<?php
include ($path . '/../template/footer.php');
?>
