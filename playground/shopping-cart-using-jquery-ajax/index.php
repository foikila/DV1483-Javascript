<?php $title='A shopping cart using jQuery and ajax'; include(__DIR__ . '/../template/header.php'); ?>

<div id='flash'>
  <h1>The bookshop for the javascripter</h1>
  <div id='cart'>
    <h2><img src="cart.png" width="40px">Shopping cart</h2>
    <div id='content'></div>
    <p>
      Items in cart: <span id="numitems">0</span><br/>
      Total is: <span id="sum">€0</span><br/><br/>
      <input id="clear" type="button" value="Clear" />  <span id="status">Nothing has happened yet. Make a purchase.</span>
    </p>
  </div>
  <table>
    <tr><th>Image</th><th>Title</th><th>Price</th><th>Buy it</th></tr>
    <tr><td><img class="img" src="http://www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Donald-Duck-30.jpg"></td><td>Donald Duck</td><td>€17</td><td><button id='book1' class="purchase">Buy it</button></td></tr>
  </<tr><td><img class="img" src="http://www.student.bth.se/~jokd13/javascript/playground/jQuery/img/Micky-mouse.jpg"></td><td>Micky mouse</td><td>€19</td><td><button id='book2' class="purchase">Buy it</button></td></tr>
  </<tr><td><img class="img" src="http://www.student.bth.se/~jokd13/javascript/playground/jQuery/img/goofy.jpg"></td><td>Goofy</td><td>€23</td><td><button id='book3' class="purchase">Buy it</button></td></tr>
  </table>

</div>


<?php $path=__DIR__; include(__DIR__ . '/../template/footer.php'); ?>
