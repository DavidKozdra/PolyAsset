<html>
<!-- This page is the home page --!>
<head>
 <?php
         require("header.php");

      ?>
<title> PolyAsset</title>
</head>
<style>

*{
color:white;

}
.p2{
color: purple;

}
option{
color:purple;

}


.RectItem {
        width: 100px;
        height: 100px;
        padding: 2px;
        border: groove;
        font-size: 20px;
        border-color: #2b2b2b;
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}


</style>
<body>
<div>

<?php
//This code loads every asset from the database  
require("Config.php");
echo "test";

$res = $db->query('SELECT * FROM Assets');
while ($row = $res->fetchArray()) {
    if($row['asset_extention']== "png" ||$row['asset_extention']== "jpg" ){
	
	//$data = base64_encode($row['FileContent']);
	$file_parts = pathinfo($filename);
	echo "<div class='p2'  > ".$row['FileName']. " <img class='poster' src ='image.php?id=".$row['asset_id']."'/> " . $row[''] . " "  . $row[''] . "<br/>"."<a class='p2' href= 'image.php?id=".$row['asset_id']."'  download  > Download </a>" ." </div>";
        
    }else if($row['asset_extention']== "wav"||$row['asset_extention']== "mp3"||$row['asset_extention']== "ogg" ) {
		$data = base64_encode($row['FileContent']);
	               
		echo " <audio controls> <source src= \"data:audio/mpeg;base64,".$data."\" type='audio/".$row['asset_extention']."' /> </audio>";
    		echo "\n";
   }else{

		echo "<p> ". $row['FileContent']." </p>";
	}

	echo "\n";

}

?>



</div>


<!-- This is the upload bar code   --!>
<div class = "position-sticky" style = "height:60%" id= "side-panel"> 
<svg xmlns="http://www.w3.org/2000/svg" style = " float= left" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>

<h3> Upload Your Own </h3>
<form action="UploadPage.php" method="post" enctype="multipart/form-data">
<div id = "panel">
 <h2> Select image to upload:</h2>
<div class="form-group">
    <label for="nametext">Artrst Name</label>
    <input name="ArtstName"  type="text" class="form-control" id="nametext" placeholder="Enter Name">
    
    <label for="nametext">Description </label>
    <input name="Description"  type="text" class="form-control"  placeholder="This asset">


  </div>
  <input type="file" name="FileName" id="fileToUpload"/>
  <input class = "p2" type="submit" value="Upload" name="submit"/>

</form>
</div>


<script>	
//animation code 

$(document).ready(function() {
  $(".position-sticky").click(function(e) {
 	console.log(this); 
	if($(e.target).is("input")) return;
	if($("#side-panel").hasClass('dontshow')) {
 		$("#side-panel").stop().animate({height:"60%",width:"40%"},500).removeClass('dontshow');
      	} else { 
        	$("#side-panel").stop().animate({height:"5%",width:"20%"},500).addClass('dontshow');
      	}
     
  });
});
</script>

</body>
</html>
