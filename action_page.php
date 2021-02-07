<!DOCTYPE html>
<html>

<head>
<!-- This page is directed to after searching for an item and should insert the items found with the key word --!>
</head>


<body>

    <?php
           echo require("header.php");
	   require("Config.php");
	   $Search = $_POST['search'];
	  
	   echo "you searched for ".$Search;
	   $res = $db->query('SELECT * FROM Assets
		WHERE asset_extention LIKE \'%'.$Search.'%.\'
   		OR asset_author LIKE \'%'.$Search.'%\'
   		OR FileName LIKE \'%'.$Search.'%\'');

while ($row = $res->fetchArray()) {
//	var_dump($row);  
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
 

</body>
</html>
