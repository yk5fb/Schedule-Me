<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <title>Login</title>    
</head>
<body>
<?php session_start(); ?>

<!--Navigation bar-->
<div id="nav-placeholder">

</div>
    <!--Navigation bar used reference from https://stackoverflow.com/questions/31954089/how-can-i-reuse-a-navigation-bar-on-multiple-pages  -->
    <div id="nav-placeholder">

    </div>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
    $.get("header.html", function(data){
        $("#nav-placeholder").replaceWith(data);
    });
    </script>
    <!--end of Navigation bar-->    
  <div class="container">
    <h1>Login</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      Username: <input type="text" name="username" class="form-control" autofocus required /> <br/>
      Password: <input type="password" name="pwd" class="form-control" required /> <br/>
      <input type="submit" value="Sign in" class="btn btn-light" />   
    </form>
    <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
  </div>

  <?php require('connectdb.php'); 
  // require: if a required file is not found, require() produces a fatal error, the rest of the script won't run
// include: if a required file is not found, include() throws a warning, the rest of the script will run

?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' &&strlen($_POST['username'])>0)
{
    //if user exist in database (select), then do session. else send error message and redirect to top of login.
    global $db;
    $username_form=trim($_POST['username']);
	$query= "SELECT * FROM users WHERE userID = :myuser"; // WHERE userID = :myuser


  $statement=$db->prepare($query);
  $statement->bindValue(':myuser', $username_form);
  $statement->execute();

  $user=$statement->fetch();
  //fetch() returns an array of one row
  $statement->closeCursor();
  if ($user !=null){
    global $db;
    $pass_form=$_POST['pwd'];
	$query= "SELECT password FROM users WHERE password = :mypass";


  $statement=$db->prepare($query);
  $statement->bindValue(':mypass', $pass_form);
  $statement->execute();

  $pass=$statement->fetch();
  //fetch() returns an array of one row
  $statement->closeCursor();
  if($pass!=null){
    $_SESSION['user']=$user['userID'];
    header('Location: home.php');
  }
  else{
      echo 'password does not match';
  }

  }
  else{
    echo 'username not found';
}


}?>

</body>
</html>
