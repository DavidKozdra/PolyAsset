<!DOCTYPE html>
<html>

<head>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?
   require("includes/conn.php"); //link to the database
?>
  <meta charset="utf-8">
  <title> Poly Assets </title>
  <link href="style.css" rel="stylesheet" type="text/css"/>  
  <meta name="author" content="">
  		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
   h1{
	font-size:40px;
	text-align:center; 	
   }
   img { 
 	width:100px;
	height:50px;   
   }

 .navbar-brand{
	width:200px;
	height:60px;

  }	
 a{
	color:white;
  }

  </style>
</head>

<body>
<div> 
    <?php
           echo file_get_contents("header.html");
	?>

</div>

</body>
</html>
