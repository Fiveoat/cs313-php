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
    <main>
        <h5 class="display-6">&ensp;Good to see you again.</h5>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <?php
                    echo $_POST['email'];
                    echo $_POST['password'];
                    function auth($email, $password)
                    {
                        $hashed_password = hash('sha256', $password);
                        echo $hashed_password;
                        $db = getConnection();
                        foreach ($db->query("SELECT * FROM users WHERE email = '{$email}'") as $row) {
                            try {
                                if ($hashed_password == $row['hashed_password']) {
                                    $_SESSION['user_id'] = $row['user_id'];
                                    header("location: account.php");
                                    echo "WORKED";
                                } else {
                                    header("location: welcome.php");
                                    echo "FAILED";
                                }
                            } catch (Exception $e) {
                                echo 'Message: ' . $e->getMessage();
                                return False;
                            }
                        }
                    }
                    echo auth($_POST['email'], $_POST['password']);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>