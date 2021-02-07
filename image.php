<?php


require("Config.php");
$id = $_GET['id'];
$ImageFile = $db->querySingle('SELECT FileContent FROM Assets Where asset_id ='.$id);
header('Content-Type: image/jpeg');
readfile($ImageFile);
if($ImageFile){
	echo $ImageFile;
}else{
	echo ":(";
}
?>























