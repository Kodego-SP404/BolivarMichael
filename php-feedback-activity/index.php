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

// insert Data 

  if(isset($_POST['submit'])){  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

   $sql = "INSERT INTO feedback (name, email, body) VALUES (:name, :email, :body)";
    $sql_run = $conn->prepare($sql);

    $data =[
      ':name' => $name,
     ':email' =>$email,
     ':body' =>$body,
   ];
   $sql_execute = $sql_run->execute($data);
   }
  $conn = null;

?>

<html lang="en">
  <head>
  <?php include ('./includes/header.php') ?>
    <title>Leave Feedback</title>
  </head>
  <body>
    <main>
      <div class="container d-flex flex-column align-items-center">
        <img src="./img/logo.png" class="w-25 mb-3" alt="" />
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Kodego SP404</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
            />
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control"
              id="body"
              name="body"
              placeholder="Enter your feedback"
            ></textarea>
          </div>
          <div class="mb-3">
            <input
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
            />
          </div>
        </form>
      </div>
    </main>

    <?php include ('./includes/footer.php') ?>
  </body>
</html>
