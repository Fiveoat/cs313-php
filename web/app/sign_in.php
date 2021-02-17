<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
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
    <main>
        <?php
        if (isset($_SESSION['user_id'])) {
            header("location: account.php");
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h3>&ensp;Hello.</h3>
                    <br>
                    <div class="row">
                        <div class="col-md">
                            <form method="POST" action="../app/controller.php">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </form>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="row">
                        <a class="btn btn-primary" href="../app/register.php">Need an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>