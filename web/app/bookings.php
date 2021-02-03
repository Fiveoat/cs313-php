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
        <?php
        $db = getConnection();
        foreach ($db->query('SELECT * FROM bookings b INNER JOIN homes h ON b.home_id = h.home_id INNER JOIN users u ON u.user_id = b.owner INNER JOIN locations l ON l.location_id = h.location_id;') as $row) {
            $renter = $row['renter'];
            $owner = $row['owner'];
            $home_id = $row['home_id'];
            $booked = $row['booked'];
            $duration = $row['duration'];
            $country_code = $row['country_code'];
            $name = $row['name'];
            $points = $row['points'];
        }
        ?>
        <h5 class="display-3">&ensp;Available Homes!</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>Cost</h5>
                    <?php echo $points . " Points Per Day"; ?>
                </div>
                <div class="col-md">
                    <h5>City</h5>
                    <?php echo $name; ?>
                </div>
                <div class="col-md">
                    <h5>Country</h5>
                    <?php echo $country_code; ?>
                </div>
                <div class="col-md">
                    <h5>Home</h5>
                    <?php echo $home_id; ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>