

     function update_home_availablity($availablity_bool, $home_id)
     {
         $db = getConnection();
         $statement = $db->prepare("UPDATE bookings SET booked=? WHERE home_id=?");
         $statement->execute([$availablity_bool, $home_id]);
     }

     function update_points($user_id, $points)
     {
         $db = getConnection();
         $statement = $db->prepare("UPDATE users SET points=? WHERE user_id=?");
         $statement->execute([$points, $user_id]);
     }

     function book_home($home_id, $points, $user_id)
     {
         $db = getConnection();
         $statement = $db->prepare("INSERT INTO bookings (renter, home_id) VALUES (?, ?)");
         $statement->execute(array($user_id, $home_id));
     }

     if(isset($_POST)){
             echo $_POST['password'];
             echo $_POST['email'];
         }

      if (isset($_SESSION['user_id'])) {
         $user_id = $_SESSION['user_id'];
     } else {
         $user_id = 1;
     }
     $db = getConnection();
     foreach ($db->query("SELECT * FROM bookings b INNER JOIN locations l ON l.location_id = b.location_id WHERE renter = '{$user_id}'") as $row) {
         $home_id = $row['home_id'];
         $city_name = $row['name'];
         $country_code = $row['country_code'];
     }