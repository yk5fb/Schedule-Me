<?php
$name=$host=$email=$description=$address=NULL;
$name_msg=$host_msg=$email_msg=$description_msg=$address_msg=NULL;

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['name']))
        $name=$_POST['name'];
    else
        $name_msg="Please enter name of the event";
    if(!empty($_POST['host']))
        $host=$_POST['host'];
    else
        $host_msg="Please enter host name";

    if(!empty($_POST['emailaddr']))
        $email=$_POST['emailaddr'];
    else
        $email_msg="Please enter email";
    
    if(!empty($_POST['address']))
        $address=$_POST['address'];
    else
        $address_msg="Please enter address";

    if(!empty($_POST['description']))
        $description=$_POST['description'];
    else
        $description_msg="Please enter description";


    if($name!=NULL && $host!=NULL && $email !=NULL && $description && $address!=NULL){
        echo '<script>window.location = "confirmation.php" </script>';
    }
    else
        echo "$name_msg : $host_msg: $email_msg : $description_msg :$address_msg <br/>";

}

?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION['user']) ){
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">   
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="author" content="Yeonji">
  <title>PHP form handling</title>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    label { display: block; }
    input, textarea { display:inline-block; font-family:arial; margin: 5px 10px 5px 40px; padding: 8px 12px 8px 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; width: 90%; font-size: small; }
    div { margin-left: auto; margin-right: auto; width: 60%; }
    h1 { text-align: center; }    
    input[type=submit] { padding:5px 15px; border:0 none; cursor:pointer; border-radius: 5px; }
    input[type=submit]:hover { background-color: #ccceee; }
    .msg { margin-left:40px; font-style: italic; color: red; }    
    html{ height:100%; }
    body{ min-height:100%; padding:0; margin:0; position:relative; }    
    footer { position: absolute; bottom: 0; width: 100%; height: 50px; color: WhiteSmoke; padding: 10px; }
   </style>   
    <script type="text/javascript">
        
    function setFocus(){
        document.event.name.focus()}
    
    </script>
</head>

<body onload="setFocus()">
<!--Navigation bar-->
<div id="nav-placeholder">

</div>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
$.get("header.html", function(data){
    $("#nav-placeholder").replaceWith(data);
});
</script>
<!--end of Navigation bar-->   
<div>  
  <h1>Add Event</h1>
   
  <!-- what are form inputs -->
  <!-- who will handle the form submission -->
  <!-- how are the request sent -->
   
  <form name="event" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Name of the event: </label>
    <input type="text" name="name" value="<?php if (!empty($_POST['name'])) echo $name?>"  /> 
    <span class="msg">
        <?php if (empty($_POST['name'])) echo $name_msg?>
    </span>
    <br/>
    <label>Hosted by: </label>
    <input type="text" name="host" value="<?php if (!empty($_POST['host'])) echo $host?>"  /> 
    <span class="msg">
        <?php if (empty($_POST['host'])) echo $host_msg?>
    </span>
    <br/>
    <label>Email:</label>
    <input type="email" name="emailaddr"  value="<?php if (!empty($_POST['emailaddr'])) echo $email?>" /> <br/>
    <span class="msg">
        <?php if (empty($_POST['emailaddr'])) echo $email_msg?>
    </span>
    <label>Address:</label>
    <input type="text" name="address"  value="<?php if (!empty($_POST['address'])) echo $address?>" /> <br/>
    <span class="msg">
        <?php if (empty($_POST['address'])) echo $address_msg?>
    </span>
    <label for="start">Start date:</label>
    <input type="date" id="start" name="trip-start"
       value="2021-03-22"
       min="2021-01-01" max="2022-12-31">
    <label>Description: </label>
    <textarea rows="5" cols="40" name="description"><?php if (!empty($_POST['description'])) echo $description?></textarea> <br/>
    <span class="msg">
        <?php if (empty($_POST['description'])) echo $description_msg?>
    </span>
    <label>Max attendees allowed:</label>
    <input type="number" id="maxAttendee" name="maxAttendee" value="0"> <br/>
    <label>Event Type:</label>
    <select name="eventtype" id="eventtype"> <option value="1">Academic Seminar</option> <option value="3">Concert</option> <option value="497">Hangout</option> <option value="498">Outdoor Activity</option> <option value="4">Party</option> <option value="496">Protest</option> <option value="499">Special Interest</option> <option value="6">Sporting Event</option> <option value="7">Study Group</option></select>
    <label>Event is Remote:</label>
    <div>
        <input type="checkbox" id="remote" name="remote" value="isRemote">
    </div>
    <input type="submit" value="Submit" class="btn btn-secondary" />
  </form>
</div>
 

  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<p><br/><br/><br/></p>
</body>
<!-- reference from https://stackoverflow.com/questions/31954089/how-can-i-reuse-a-navigation-bar-on-multiple-pages -->
<footer>
    <div id="foot-placeholder">

    </div>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
    $.get("footer.html", function(data){
    $("#foot-placeholder").replaceWith(data);
    });
    </script>
    <!--end of Navigation bar-->   
</footer>



</html>