<?php
include ('header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yeonji">
    <title>Thank you!</title>
</head>
<body>
    <h1>Your event is added.</h1>
    <p id="confirmation"></p>
    <button onclick="home()">Back to Homepage</button>
    <!-- <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol> -->
    <script type="text/javascript">
        // reference from https://www.javascripttutorial.net/javascript-anonymous-functions/
        //arrow function
        let show=()=> alert("Success!");

        show();
        // reference from https://www.w3schools.com/js/tryit.asp?filename=tryjs_function_expression_self
        //anonymous function
        (function () {
            document.getElementById("confirmation").innerHTML = "Click below to go back to homepage.";
        })();

        function home(){
            window.location.href = "home.html";
        }
        
    </script>
</body>

<script type="text/javascript">
        
document.getElementById("myBtn").addEventListener("click", goBack);

function goBack() {
  
}
    </script>
</html>



<!-- <?php
$name=$email=$description=$address=NULL;
$name_msg=$email_msg=$description_msg=$address_msg=NULL;

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['name']))
        $name=$_POST['name'];
    else
        $name_msg="Please enter name";

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


    if($name!=NULL && $email !=NULL && $description !=NULL){
        echo "thanks for adding event, $name <br/>";
        echo "<i>$description</i><br/>";
        echo "Your event is successfully added. <br/>";
    }
    else
        echo "$name_msg : $email_msg : $description_msg :$address_msg <br/>";

}

?> -->
