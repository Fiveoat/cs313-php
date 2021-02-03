<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Houselr</title>
    <link rel="stylesheet" type="text/css" href="/app/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header class="display-4">
        <?php require $root . '/app/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/app/nav.php'; ?>
    </nav>
    <br>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>Welcome to Houselr</h5>
                    <p>
                    We hve house.
                    </p>
                </div>
            <div class="row">
                <div class="col-md">
                    <h5>How It Works.</h5>
                    <p>You trade house for house.</p>
                </div>
            </div>
                <div class="col-md">
                    <h5>Join Today.</h5>
                    <a href="/register.php">Sign Up</a>
                    <p>Already have an account?</p>
                    <a href="/sign_in.php"></a>
                </div>
                <div class="col-md">
                    <h5>Home</h5>
                    <?php echo $home_id; ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>