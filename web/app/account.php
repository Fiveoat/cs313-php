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
        <?php
        $db = getConnection();
        foreach ($db->query('SELECT * FROM users u INNER JOIN homes h ON u.user_id = h.user_id INNER JOIN locations l ON l.location_id = h.location_id;') as $row) {
            $first_name = $row['first_name'];
            $email = $row['email'];
            $last_name = $row['last_name'];
            $hashed_password =  $row['hashed_password'];
            $points = $row['points'];
            $home_id = $row['home_id'];
            $name = $row['name'];
            $country_code = $row['country_code'];
        }
        ?>
        <div class="container">
        <div class="row">
            <div method="GET" action="/week3/add?" class="col-md">
                <?php echo $first_name;?>
            </div>
            <div method="GET" action="shopping_cart.php" class="col-md">
                <?php echo $last_name;?>
            </div>
            <div class="col-md">
                <?php echo $email;?>
            </div>
            <div class="col-md">
                <?php echo $points;?>
            </div>
            <div class="col-md">
                <?php echo $name;?>
            </div>
            <div class="col-md">
                <?php echo $country_code;?>
            </div>
        </div>
    </div>
    <br><br><br><br>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>