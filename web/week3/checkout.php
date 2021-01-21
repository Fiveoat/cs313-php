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
                     </div><br>";
            }
            ?>
        </div>
    </div>
    <br><br><br><br><br>
    <form method="POST" action="confirmation.php">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Name" id="name" name="name">
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Email Address" id="email" name="email">
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Street Address" id="street" name="street">
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" placeholder="City" id="city" name="city">
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" placeholder="State" id="state" name="state">
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Zip" id="zip" name="zip">
        </div>
        <br>
        <div>
            <input class="btn btn-outline-secondary" type="submit" value="Submit">
    </form>

</main>


<footer>
    <?php require $root . '/week3/footer.php'; ?>
</footer>

</html>