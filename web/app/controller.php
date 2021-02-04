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
        <h5 class="display-6">&ensp;Something went wrong.</h5>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <?php
                    if (isset($_POST['city'])) {
                        function create_user($first_name, $last_name, $email, $password, $city, $country_code, $home_size)
                        {
                            $db = getConnection();
                            $hashed_password = hash('sha256', $password);

                            $statement = $db->prepare("INSERT INTO users (first_name, last_name, email, hashed_password, points) VALUES (?, ?, ?, ?, ?) RETURNING user_id;");
                            $statement->execute(array($first_name, $last_name, $email, $hashed_password, 0));
                            $user_id = (int) $db->lastInsertId();

                            $statement = $db->prepare("INSERT INTO locations (name, country_code) VALUES (?, ?) RETURNING location_id");
                            $statement->execute(array($city, $country_code));
                            $location_id = (int) $db->lastInsertId();

                            $statement = $db->prepare("INSERT INTO homes (user_id, location_id, value) VALUES (?, ?, ?) RETURNING home_id");
                            $statement->execute(array($user_id, $location_id, $home_size));
                            $home_id = (int) $db->lastInsertId();

                            echo $user_id;
                            echo $home_id;
                            echo $location_id;
                            echo gettype($user_id);
                            echo gettype($home_id);
                            echo gettype($location_id);
                                
                            $statement = $db->prepare("INSERT INTO bookings(renter, owner, home_id, booked, duration) VALUES (?, ?, ?, ?, ?)");
                            $statement->execute(array($user_id, $user_id, $home_id, FALSE, 0));

                            $_SESSION['user_id'] = $user_id;
                            header("location: account.php");
                        }
                        $home_size = (int) $_POST['select'];
                        create_user($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['city'], $_POST['country_code'], $home_size);
                    } else {
                        function auth($email, $password)
                        {
                            $hashed_password = hash('sha256', $password);
                            $db = getConnection();
                            foreach ($db->query("SELECT * FROM users WHERE email = '{$email}'") as $row) {
                                echo $row;
                                try {
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