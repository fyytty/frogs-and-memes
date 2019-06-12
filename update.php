<?php 
include "conn.php";
// Handle delteing data from database
if (isset($_POST["delete"]{
 $sql +"DELETE FORM users WHERE id = $id"
}
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = "UPDATE users SET email = '$email', `password` = '$password' WHERE id =$id";
  $connection->exec($sql);
  }


if (isset($_GET["id"] )) {
   $id = $_GET['id'];
    $sql = "SELECT  * FROM users WHERE id = $id"; 
$statement = $connection->prepare($sql);
$statement->execute();

$user = $statement->fetch(PDO:: FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>no u </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
<div class="container">


<h1>Update user data</h1>
<h3>your are updating user with email <?php echo $user['email']; ?></h3>
<form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input value="<?php echo $user['email']; ?>" type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input value="<?php echo $user['password']; ?>" type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">  
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  <form action=""method= "POST"
  >
  <input type="hidden" name="id" value="<?php echo $user['id']; ?>">  
    <button type="submit" class="btn btn-danger mt-4" name="delete">delete

    </button>

  
  </form>


</div>


</body>
</html