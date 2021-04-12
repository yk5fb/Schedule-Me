<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"> 
  <meta name="author" content="Yeonji">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Details</title>
 
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
  <h1>Detail</h1>
   
  <!-- what are form inputs -->
  <!-- who will handle the form submission -->
  <!-- how are the request sent -->
   <h2>Name of the event: Hangout with Professor P!</h2></br>
   <h2>Hosted by: WebPL club</h2></br>
   <p>Come hang out with Professor P. There will be pizza! :)</p></br>

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