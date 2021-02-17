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
        <div class="container">
            <div class="row">
                <div class="col-md">
                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<h3>Available Homes!</h3>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>
                            Feel free to browse through these locations. If you find somethig in a city that you would like to book, just click the "book" button.
                        </p>
                    </div>
                </div>
                <br><br>
                <?php
                $db = getConnection();
                foreach ($db->query('SELECT * FROM homes h INNER JOIN locations l ON h.location_id = l.location_id INNER JOIN bookings b ON b.home_id = h.home_id WHERE b.booked NOT IN (TRUE, 1);') as $row) {
                    $home_id = $row['home_id'];
                    $country_code = $row['country_code'];
                    $city = $row['name'];
                    $home_points = $row['value'];
                    echo "<div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md\">
                        <h5>Cost</h5>
                        {$home_points} Points Per Day
                    </div>
                    <div class=\"col-md\">
                        <h5>City</h5>
                        {$city}
                    </div>
                    <div class=\"col-md\">
                        <h5>Country</h5>
                        {$country_code}
                    </div>
                    <div class=\"col-md\">
                        <h5>Book</h5>
                        <a class='btn btn-primary' href='../app/book.php?home_id={$home_id}'>Click To Book</a>
                    </div>
                </div>
            </div><br>";
                }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>