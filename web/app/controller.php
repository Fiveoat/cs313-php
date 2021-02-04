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
    <main>
        <h5 class="display-6">&ensp;Good to see you again.</h5>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <?php
                    echo $_POST['city'];
                    print_r($_POST);
                    if (isset($_POST['city'])) {
                        echo "CITY";
                        function create_user($first_name, $last_name, $email, $password, $city, $country_code, $home_size)
                        {
                            echo "1";
                            $db = getConnection();
                            echo "2";
                            $hashed_password = hash('sha256', $password);
                            echo "3";
                            $statement = $db->prepare("INSERT INTO users (first_name, last_name, email, hashed_password) VALUES (?, ?, ?, ?) RETURNING user_id;");
                            echo "4";
                            $user_id = $statement->execute(array($first_name, $last_name, $email, $hashed_password));
                            echo $user_id;
                            $location_id = $statement = $db->prepare("INSERT INTO locations (name, country_code) VALUES (?, ?) RETURNING location_id");
                            echo "10";
                            $statement->execute(array($city, $country_code));
                            echo "420";
                            $statement = $db->prepare("INSERT INTO homes (user_id, location_id, value) VALUES (?, ?, ?)");
                            echo "5";
                            echo $user_id;
                            echo $location_id;
                            echo $home_size;
                            $statement->execute(array($user_id, $location_id, $home_size));
                            echo "6";
                            $_SESSION['user_id'] = $user_id;
                            header("location: account.php");
                        }
                        echo "TACO";
                        $home_size = (int) $_POST['select'];
                        echo gettype($home_size);
                        echo $home_size;
                        create_user($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['city'], $_POST['country_code'], $home_size);
                    } else {
                        echo $_POST['email'];
                        echo $_POST['password'];
                        function auth($email, $password)
                        {
                            $hashed_password = hash('sha256', $password);
                            echo $hashed_password;
                            $db = getConnection();
                            foreach ($db->query("SELECT * FROM users WHERE email = '{$email}'") as $row) {
                                echo $row;
                                try {
                                    $hashed_password = 'e23e8b55e902d8ecbca3542ea41bca0b';
                                    if ($hashed_password == $row['hashed_password']) {
                                        $_SESSION['user_id'] = $row['user_id'];
                                        header("location: account.php");
                                    } else {
                                        header("location: 404.php");
                                    }
                                } catch (Exception $e) {
                                    echo 'Message: ' . $e->getMessage();
                                    header("location: 404.php");
                                }
                            }
                        }
                        echo auth($_POST['email'], $_POST['password']);
                    }
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