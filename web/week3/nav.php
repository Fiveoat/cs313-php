<?php
session_start();
?>
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="/week3/store.php">Store&ensp;</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/week3/checkout.php">Checkout&ensp;</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/week3/shopping_cart.php"> Cart&ensp;<img class="nav-cart" id="shoppingCartImage" src="images/cart.png" alt="Shopping Cart"><?php echo " ".count($_SESSION['cart'])?></a>
    </li>
</ul>s