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
            foreach ($db->query("SELECT * FROM users u INNER JOIN homes h ON u.user_id = h.user_id INNER JOIN locations l ON l.location_id = h.location_id WHERE u.user_id = {$user_id};") as $row) {
                $first_name = $row['first_name'];
                $email = $row['email'];
                $last_name = $row['last_name'];
                $hashed_password =  $row['hashed_password'];
                $points = $row['points'];
                $home_id = $row['home_id'];
                $home_city_name = $row['name'];
                $home_country_code = $row['country_code'];
                $home_worth = $row['value'];
            }
        } else {
            header("location: sign_in.php");
        }
        ?>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h3>Hello <?php echo $first_name . " " . $last_name; ?>.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <h5>Your Points</h5>
                    <?php echo $points . " Points";
                    ?>
                </div>
                <div class="col-md">
                    <h3>Email</h3>
                    <?php echo $email; ?>
                </div>
            </div>
            <br><br><br><br>
            <h3>Your Home Information</h3>
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
                    <?php echo $home_worth . " Points Per Day"; ?>
                </div>
            </div>
            <br><br><br><br>
            <h3>Add Points</h3>
            <div class="row">
                <div class="col-md">
                    <form action='../app/update_points.php' method="POST">
                        <div class="mb-3">
                            <select class="form-select" name="select" aria-label="Default select example">
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600">600</option>
                                <option value="700">700</option>
                                <option value="800">800</option>
                                <option value="900">900</option>
                                <option value="1000">1000</option>
                                <option value="1100">1100</option>
                                <option value="1200">1200</option>
                                <option value="1300">1300</option>
                                <option value="1400">1400</option>
                                <option value="1500">1500</option>
                            </select>
                            <div id="emailHelp" class="form-text">&ensp;Honor system. When you rent your house out, you are allowed to add the Point Value of your home times the number of nights.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Points</button>
                    </form>
                </div>
            </div>
            <br><br>
            <div class="row">
                <a class="btn btn-primary" href="../app/account_bookings.php">Your Bookings</a>
            </div>
        </div>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>