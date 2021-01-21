<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wind River Range Equipment</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<header class="display-4">
    <?php require $root . '/week3/header.php'; ?>
</header>
<nav>
    <?php require $root . '/week3/nav.php'; ?>
</nav>
<main>
    <h1 class="display-4">Checkout</h1>
    
    <div class="container">
        <div class="row">
            <?php
            foreach ($_SESSION['cart'] as $id) {
                echo "<div class='col-sm'>
                        <img src='/week3/images/S{$id}.jpg' alt='black diamond camalot'>Size {$id}
                        <a href='/week3/remove_from_cart.php?id={$id}'>Delete</a>
                     </div><br>";
            }
            ?>
        </div>
    </div>
    <form method="POST" action="confirmation.php">
        <p>Please answer the following questions:</p>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="name">
        <br />

        <label for="email">Email</label>
        <input type="text" placeholder="Email Address" id="email" name="email">
        <br />

        <label for="street">Street Address</label>
        <input type="text" placeholder="Street Address" id="street" name="street">
        <br />

        <label for="city">City</label>
        <input type="text" placeholder="City" id="city" name="city">
        <br />

        <label for="state">State</label>
        <input type="text" placeholder="State" id="state" name="state">
        <br />

        <label for="zip">Zip</label>
        <input type="text" placeholder="Zip" id="zip" name="zip">
        <br />
        <input type="submit" value="Submit">
    </form>

</main>


<footer>
    <?php require $root . '/week3/footer.php'; ?>
</footer>

</html>