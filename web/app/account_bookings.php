<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
if (!isset($_SESSION['user_id'])) {
    header("location: sign_in.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Houslr</title>
    <link rel="stylesheet" type="text/css" href="/app/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header class="display-6">
        <?php require $root . '/app/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/app/nav.php'; ?>
    </nav>
    <main>
        <?php
        if (isset($_SESSION['user_id'])) {
            $user_id = (int) $_SESSION['user_id'];
            $db = getConnection();
            foreach ($db->query("SELECT * FROM bookings b INNER JOIN homes h ON h.home_id = b.home_id INNER JOIN locations l ON l.location_id = h.location_id WHERE b.renter = {$user_id};") as $row) {
                $home_city_name = $row['name'];
                $home_country_code = $row['country_code'];
                $home_worth = $row['value'];
                $duration = $row['duration'];
                echo "<h5 class='display-3'>&ensp;Your Bookings!</h5>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-md'>
                                    <h5>Cost</h5>
                                    {$home_worth} Points Per Day
                                </div>
                                <div class='col-md'>
                                    <h5>Duration</h5>
                                    {$duration} Days
                                </div>
                                <div class='col-md'>
                                    <h5>City</h5>
                                    {$home_city_name}
                                </div>
                                <div class='col-md'>
                                    <h5>County</h5>
                                    {$home_country_code}
                                </div>
                            </div>
                        </div>";
            }
        } else {
            header("location: sign_in.php");
        }
        ?>

    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>