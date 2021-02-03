<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
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
        <h1 class="display-4">Welcome! Sign Up!</h1>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="city" class="form-control" id="city">
            </div>
            <div class="mb-3">
                <label for="country-code" class="form-label">Country Code</label>
                <input type="country-code" class="form-control" id="country-code">
            </div>
            <div class="mb-3">
                <label for="first-name" class="form-label">First Name</label>
                <input type="first-name" class="form-control" id="first-name">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="last-name" class="form-control" id="last-name">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="last-name" class="form-control" id="last-name">
            </div>
            <div>
                <label for="last-name" class="form-label">Home Size</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Large</option>
                    <option value="2">Medium</option>
                    <option value="3">Small</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>