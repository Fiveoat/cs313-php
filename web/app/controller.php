<?php
session_start();
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
        <?php
        echo $_POST['password'];
        echo $_POST['email'];
        ?>
    </main>
    <?php 
    // function create_user($first_name, $last_name, $email, $password, $city, $country_code, $home_size)
    // {
    //     $db = getConnection();
    //     $hashed_password = hash('sha256', $password);
    //     $statement = $db->prepare("INSERT INTO users (first_name, last_name, hashed_password) VALUES (?, ?, ?, ?) RETURNING user_id;");
    //     $user_id = $statement->execute(array($first_name, $last_name, $email, $hashed_password));
    //     $statement = $db->prepare("INSERT INTO users (name, country_code, home_size) VALUES (?, ?, ?)");
    //     $statement->execute(array($city, $country_code, $home_size));
    //     $_SESSION['user_id'] = $user_id;
    //     header("location: account.php");
    // }

    // function update_home_availablity($availablity_bool, $home_id)
    // {
    //     $db = getConnection();
    //     $statement = $db->prepare("UPDATE bookings SET booked=? WHERE home_id=?");
    //     $statement->execute([$availablity_bool, $home_id]);
    // }

    // function update_points($user_id, $points)
    // {
    //     $db = getConnection();
    //     $statement = $db->prepare("UPDATE users SET points=? WHERE user_id=?");
    //     $statement->execute([$points, $user_id]);
    // }

    // function book_home($home_id, $points, $user_id)
    // {
    //     $db = getConnection();
    //     $statement = $db->prepare("INSERT INTO bookings (renter, home_id) VALUES (?, ?)");
    //     $statement->execute(array($user_id, $home_id));
    // }

    // function auth($email, $password)
    // {
    //     $hashed_password = hash('sha256', $password);
    //     $db = getConnection();
    //     foreach ($db->query("SELECT * FROM users WHERE email = '{$email}'") as $row) {
    //         try {
    //             if ($hashed_password == $row['hashed_password']) {
    //                 $_SESSION['user_id'] = $row['user_id'];
    //                 header("location: account.php");
    //                 return True;
    //             } else {
    //                 header("location: welcome.php");
    //                 return False;
    //             }
    //         } catch (Exception $e) {
    //             echo 'Message: ' . $e->getMessage();
    //             return False;
    //         }
    //     }
    // }
    ?>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>