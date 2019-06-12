<?php
//  include connection to database file
include "conn.php";
$sql = "SELECT  * FROM users";
$statement = $connection->prepare($sql);
$statement->execute();

$users = $statement->fetchAll();

// check if user has submitted form
// get all data from users

if (isset($_POST['submit'])) {
  echo "It worked!";
  $email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, `password`) VALUES ('$email','$password')";
$connection->exec($sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>anotha one</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  <?php
  if ($users && $statement->rowCount() > 0) {
    foreach ($users as $user) { ?>
      <div class="row">
        <div class="col">
          <a href="update.php?id=<?php echo $user['id']; ?>"><?php echo $user['email']; ?></a> 
        </div>
        <div class="col">
          <?php echo $user['password']; ?>
        </div>
    </div>
      <?php
    }
  }
  ?>


</head>

<body>





















</body>

</html>