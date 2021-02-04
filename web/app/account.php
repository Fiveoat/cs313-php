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
        <h5 class="display-5">&ensp;Welcome back, <?php echo $first_name . " " . $last_name; ?>!</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>Your Points</h5>
                    <?php echo $points . " Points";
                    ?>
                </div>
                <div class="col-md">
                    <h5>Email</h5>
                    <?php echo $email; ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <h5 class="display-6">&ensp;Your Home Information</h5>
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
                    <?php echo $home_worth . " Points Per Day"; ?>
                </div>
                <div class="col-md">
                    <h5>Home Availablity</h5>
                    <?php
                    if ($available = true) {
                        echo "Currently Set To Available";
                        echo '<br><a href="">Make Unavailable</a>';
                    } else {
                        echo "Not Set To Available";
                        echo '<br><a href="">Make Available</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <h5 class="display-6">&ensp;Add Points</h5>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <form action='../app/update_points.php' method="POST">
                        <div class="mb-3">
                            <select class="form-select" name="select" aria-label="Default select example">
                                <option value="1">100</option>
                                <option value="2">200</option>
                                <option value="3">300</option>
                                <option value="4">400</option>
                                <option value="5">500</option>
                                <option value="6">600</option>
                                <option value="7">700</option>
                                <option value="8">800</option>
                                <option value="9">900</option>
                                <option value="10">1000</option>
                                <option value="11">1100</option>
                                <option value="12">1200</option>
                                <option value="13">1300</option>
                                <option value="14">1400</option>
                                <option value="15">1500</option>
                            </select>
                            <div id="emailHelp" class="form-text">&ensp;Honor system. When you rent your house out, you are allowed to add the Point Value of your home times the number of nights.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Points</button>
                    </form>
                </div>
            </div>
        </div>
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