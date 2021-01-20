<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wind River Range Equipment</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header class="display-4">
        <?php require $root . '/week3/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/week3/nav.php'; ?>
    </nav>
    <br />
    <div id="products">
        <h2 class="display-6">Black Diamond Camalots</h2>
        <form method="POST" action="results.php">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S6" value="S6"><label for="S6"><img id="" src="/week3/images/S6.jpg" alt="black diamond camalot"> Size 6 Price: $130 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S5" value="S5"><label for="S5"><img id="" src="/week3/images/S5.jpg" alt="black diamond camalot"> Size 5 Price: $120 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S4" value="S4"><label for="S4"><img id="" src="/week3/images/S4.jpg" alt="black diamond camalot"> Size 4 Price: $110 </label><br />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S3" value="S3"><label for="S3"><img id="" src="/week3/images/S3.jpg" alt="black diamond camalot"> Size 3 Price: $100 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S2" value="S2"><label for="S2"><img id="" src="/week3/images/S2.jpg" alt="black diamond camalot"> Size 2 Price: $90 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S1" value="S1"><label for="S1"><img id="" src="/week3/images/S1.jpg" alt="black diamond camalot"> Size 1 Price: $80 </label><br />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S075" value="S075"><label for="S075"><img id="" src="/week3/images/S075.jpg" alt="black diamond camalot"> Size .75 Price: $70 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S05" value="S05"><label for="S05"><img id="" src="/week3/images/S05.jpg" alt="black diamond camalot"> Size.5 Price: $60 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S04" value="S04"><label for="S04"><img id="" src="/week3/images/S04.jpg" alt="black diamond camalot"> Size.4 Price: $50 </label><br />
                    </div>
                </div>
            </div>
        </form>
        <footer>
            <?php require $root . '/week3/footer.php'; ?>
        </footer>

</body>

</html>