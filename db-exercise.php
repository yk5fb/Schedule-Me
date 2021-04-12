<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  
  <title>PHP and MySQL database</title>    
</head>
<body>
  
  <div class="container">
    <h1>PHP and MySQL database</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <input type="submit" name="btnaction" value="create" class="btn btn-light" />
      <input type="submit" name="btnaction" value="insert" class="btn btn-light" />   
      <input type="submit" name="btnaction" value="select" class="btn btn-light" />
      <input type="submit" name="btnaction" value="update" class="btn btn-light" />
      <input type="submit" name="btnaction" value="delete" class="btn btn-light" />
      <input type="submit" name="btnaction" value="drop" class="btn btn-light" />            
    </form>


<?php
require('connectdb.php');

// require: if a required file is not found, require() produces a fatal error, the rest of the script won't run
// include: if a required file is not found, include() throws a warning, the rest of the script will run
?>

<?php 
if (isset($_GET['btnaction']))
{	
   try 
   { 	
      switch ($_GET['btnaction']) 
      {
         case 'create': createTable(); break;
         case 'insert': insertData();  break;
         case 'select': selectData();  break;
         case 'update': updateData();  break;
         case 'delete': deleteData();  break;
         case 'drop':   dropTable();   break;      
      }
   }
   catch (Exception $e)       // handle any type of exception
   {
      $error_message = $e->getMessage();
      echo "<p>Error message: $error_message </p>";
   }   
}
?>

<?php 
/*************************/
/** create table **/
function createTable()
{
	global $db;
	$query= "CREATE TABLE courses(
                        course_ID VARCHAR(8) PRIMARY KEY,
                        course_desc VARCHAR(255) NOT NULL)";
  $statement=$db->prepare($query);
  $statement->execute();

  $statement->closeCursor();

	
}
?>

<?php 
/*************************/
/** drop table **/
function dropTable()
{
  
	
  global $db;
	$query= "DROP TABLE courses";
  $statement=$db->prepare($query);
  $statement->execute();

  $statement->closeCursor();
	
	
	
	
	
	
}
?>

<?php 
/*************************/
/** insert data **/
function insertData()
{
   
  global $db;
  $course_id_form='cs1111';
  $course_desc_form='Intro';
	//$query= "INSERT INTO courses (course_ID, course_desc) VALUES('cs4640', 'WebPL')";
	$query= "INSERT INTO courses (course_ID, course_desc) VALUES(:mycourse, :course_desc)";


  $statement=$db->prepare($query);
  $statement->bindValue(':mycourse', $course_id_form);
  $statement->bindValue(':course_desc', $course_desc_form);
  $statement->execute();

  $statement->closeCursor();
	
	
	
	
	
	
	
}
?>

<?php  
/*************************/
/** get data **/
function selectData()
{

  global $db;
	$query= "SELECT * FROM courses";


  $statement=$db->prepare($query);
  $statement->execute();

  $results=$statement->fetchAll();
  //fetch() returns an array of one row
  $statement->closeCursor();

  foreach($results as $result)
    echo $result['course_ID'] . ":" . $result['course_desc'] . "<br/>";
	
	
	
	
	
	
	
	
	
}
?>

<?php
/*************************/
/** update data **/
function updateData()
{
  
	
  global $db;
	$query= "UPDATE courses
  SET course_desc='Advanced Intro'
  WHERE course_ID='cs1111'";


  $statement=$db->prepare($query);
  $statement->execute();

  $results=$statement->fetchAll();
  //fetch() returns an array of one row
  $statement->closeCursor();

  foreach($results as $result)
    echo $result['course_ID'] . ":" . $result['course_desc'] . "<br/>";
	
	
	
	
	
	
	
	
	
}
?>

<?php
/*************************/
/** delete data **/
function deleteData()
{
	
	
  global $db;
	$query= "DELETE FROM courses";


  $statement=$db->prepare($query);
  $statement->execute();

 // $results=$statement->fetchAll();
  //fetch() returns an array of one row
  $statement->closeCursor();

  //foreach($results as $result)
   // echo $result['course_ID'] . ":" . $result['course_desc'] . "<br/>";
	
	
	
	
	
	
	
	
	
}
?>


  </div>
</body>
</html>