<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Houslr</title>
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
                    <h5>Welcome to Houslr.</h5>
                    <p>
                        Since our inception in 2021 we have been helping people go on vacations & getting the most use out of their home.
                        We have enabled home owners to travel around the world without paying for a single night for a place to stay.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h5>How It Works.</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                1: Sign up & add your home details.
                            </li>
                            <li class="list-group-item">
                                2: Rent your home out & grow your points.
                            </li>
                            <li class="list-group-item">
                                3: Browse currently available homes to rent.
                            </li>
                            <li class="list-group-item">
                                4: Use your points to stay at any of the available homes.
                            </li>
                            <li class="list-group-item">
                                5: Profit.
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>
                <div class="col-md">
                    <h5>Join Today.</h5>
                    <a class="btn btn-outline-secondary" href="../app/register.php">Sign Up</a>
                    <br>
                    <a class="btn btn-outline-secondary" href="../app/sign_in.php">Already have an account?</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>