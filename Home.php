<html>
<head>
<style>

#link{
 margin-left: 700px;	
 background-color:lightblue;
}

.position-sticky{
  width: 40%;
  height:30%;
  bottom: 10px;
  left: 100%;
  background-color:#7851a9 ;
  padding:40px;
}

.hide { 

}

.hide > *{
display:none;

}
</style>


 <?php
         require("header.php");
      ?>

</head>

<body>
<div>
	<?php

	//loading items 

	 $fileList = glob('Assets/*');
	foreach($fileList as $filename){
		echo "<div class = '".contatiner."' > <h1> $filename </h1><img class = '".poster."' src='https://www.gannett-cdn.com/presto/2019/08/22/PNDN/a95bedd7-a679-4f6a-8e2e-e1ab8109b70f-IST_Building_smaller_2.jpg?width=660&height=435&fit=crop&format=pjpg&auto=webp'/> <a id='".link."' href = 'https://www.gannett-cdn.com/presto/2019/08/22/PNDN/a95bedd7-a679-4f6a-8e2e-e1ab8109b70f-IST_Building_smaller_2.jpg?width=660&height=435&fit=crop&format=pjpg&auto=webp' download =' ".$filename."' > Download </a> </div> ";
}
?>

</div>
<div class = " position-sticky"> 
<h3> Upload Your Own </h3>

<form action="upload.php" method="post" enctype="multipart/form-data">
<div id = "panel">
 <h2> Select image to upload:</h2>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form></div>
</div>

<script>	
$(document).ready(function() {
    $( ".position-sticky" ).click(function() {
      if($(this).hasClass('hide')) {
	   $(this).stop().animate({height:"30%",width:"40%"},500).removeClass('hide');
      } else { 
        $(this).stop().animate({height:"5px",width:"20px"},500).addClass('hide');
      }
});
});
</script>

</body>
</html>
