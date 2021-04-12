<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  
  <title>Registration</title>    
</head>
<body>

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
    <h1>Register</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      Username: <input type="text" name="username" class="form-control" autofocus required /> <br/>
      Password: <input type="password" name="pwd" class="form-control" required /> <br/>
      <input type="submit" value="Register" class="btn btn-light" />   
    </form>
  </div>

  <?php require('connectdb.php'); 
  // require: if a required file is not found, require() produces a fatal error, the rest of the script won't run
// include: if a required file is not found, include() throws a warning, the rest of the script will run

?>
  <?php
if($_SERVER['REQUEST_METHOD']=='POST' &&strlen($_POST['username'])>0)
{
  global $db;
  $username_form=$_POST['username'];
  $pass_form=$_POST['pwd'];
	//$query= "INSERT INTO courses (course_ID, course_desc) VALUES('cs4640', 'WebPL')";
	$query= "INSERT INTO users (userID, password) VALUES(:myuser, :pass)";


  $statement=$db->prepare($query);
  $statement->bindValue(':myuser', $username_form);
  $statement->bindValue(':pass', $pass_form);
  $statement->execute();

  $statement->closeCursor();

  header('Location: login.php');
}?>
<?php

	

?>


  </div>
</body>
</html>