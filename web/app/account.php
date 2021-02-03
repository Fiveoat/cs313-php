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
            $home_city_name = $row['name'];
            $home_country_code = $row['country_code'];
        }
        ?>
        <br>
        <h5 class="display-4">&ensp;Welcome back, <?php echo $first_name . " " . $last_name; ?>!</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>Your Points</h5>
                    <?php echo $points . " Points"; ?>
                </div>
                <div method="GET" action="shopping_cart.php" class="col-md">
                    <h5>Last</h5>
                    <?php echo $last_name; ?>
                </div>
                <div class="col-md">
                    <h5>Email</h5>
                    <?php echo $email; ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <h5 class="display-6">&ensp;Your Home Information.</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>City</h5>
                    <?php echo $home_city_name; ?>
                </div>
                <div class="col-md">
                    <h5>Country</h5>
                    <?php echo $home_country_code; ?>
                </div>
                <div class="col-md">
                    <h5>Point Value</h5>
                    <?php echo $points . " Points Per Day"; ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <h5 class="display-6">&ensp;Add Points</h5>
        <form>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">&ensp;Honor system.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- <h5 class="display-3">&ensp;Your Bookings!</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>City</h5>
                </div>
                <div class="col-md">
                    <h5>Country</h5>
                </div>
                <div class="col-md">
                    <h5>Home</h5>
                </div>
            </div>
        </div> -->
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>