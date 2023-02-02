<?php 
// dbconnect
$servername = "localhost";
$username = "TropangAgiw";
$password = "qwe123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=feedback_activity", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include ('./includes/header.php') ?>
    <title>Leave Feedback</title>
  </head>
  <body>


    <main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>
        <?php
// looping
$select = $conn->prepare ("SELECT * FROM feedback");
$select->execute();
$result = $select->fetchAll();

// pag wala pang laman yung data
if (empty($result)) { 
  echo "
  <div class=\"card my-3 p-5\">
    <div class=\"card-body text-center\">
    <p class=\"text-secondary\">No Feedback</p> 
    </div>
  </div>";
}  
foreach ($result as $data) {
  echo "
    <div class=\"card my-3 p-5\">
      <div class=\"card-body text-center\">
      <p>" . $data['body'] . " </p><p><strong>" . $data['name'] . "</strong></p>
      <footer class=\"text-secondary\"><cite>" . $data['email']. " </cite> ". $data['date'] . " </footer>
      </div>
    </div>";
}


?>
      </div>
    </main>

    <?php include ('./includes/footer.php') ?>
  </body>
</html>
