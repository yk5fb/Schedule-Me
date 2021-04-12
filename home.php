<!-- 1. create HTML5 doctype -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  
  <!-- 2. include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 
  Bootstrap is designed to be responsive to mobile.
  Mobile-first styles are part of the core framework.
   
  width=device-width sets the width of the page to follow the screen-width
  initial-scale=1 sets the initial zoom level when the page is first loaded   
  -->
  
  <meta name="author" content="Yeonji">
  <meta name="description" content="homepage">  
    
  <title>Schedule Me!</title>
  
  <!-- 3. link bootstrap -->
  <!-- if you choose to use CDN for CSS bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <!-- 
  Use a link tag to link an external resource.
  A rel (relationship) specifies relationship between the current document and the linked resource. 
  -->
  
  <!-- if you choose to download bootstrap and host it locally -->
  <!-- <link rel="stylesheet" href="path-to-your-file/bootstrap.min.css" /> --> 
  
  <!-- include your CSS -->
  <link rel="stylesheet" href="your-custom.css" /> 
  <link rel="stylesheet" href="mystyle.css">

</head>

<body style="background: #8dc8f1;">
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
<?php 
session_start();
if(isset($_SESSION['user']) ){
    echo 'Welcome ' . $_SESSION['user'] ;
}
?>
   
  <div style="background:white !important" class="jumbotron">
      <div class="container text-center">
        <h1><span style="background-color: #7996ab; color:	#FFFFFF; padding: 5px 10px;">Welcome to Schedule Me!</span></h1> 
        <p>Scheduling is so easy now with Schedule Me!</p> <br/>
        <p class=getStarted>Let's get started!</p>
      </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-4 primary">
        <h3>Easy Event Maker</h3>
        <img src="cali.png" alt="calendar" width="200" height="200"> <br/>
        <p><b><a href="add.php" target="_blank">Add event!</a></b></p>
        </div>
        <div class="col-md-4">
            <h3>Easy Sign Up</h3>
            <img src="click.png" alt="signup" width="200" height="200"> <br/>
            <p>Only a few click away!</p>
            </div>
            <div class="col-md-4">
                <h3>Get in touch!!</h3>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" name="your name">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email address" name="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Send">
                </div>
                </div>
    </div>
  </div>
  




  <!-- CDN for JS bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
  
  <!-- for local -->
  <!-- <script src="jquery.min.js"></script> -->
  <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
  

  <!--  uncomment the following code when customizing your page -->   
  <!-- <script>
  // document ready event is fired when DOM has been loaded 
  $(document).ready(function() {
	 // do DOM manipulation, set header's height
     $('.header').height($(window).height()/2.5);     
   })
  </script>  -->
  
  
 
  <!--end of Navigation bar-->   
</body>

</html>