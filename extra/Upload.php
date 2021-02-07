<?php
 require("config.php");
     //code to add to database   
    $link = mysqli_connect($dbaddress, $username, $Sqlpassword,$dbname); //sql connection
    if ($link->connect_errno) {
        echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
    }
    echo $link->host_info . "\n";

    //Get the users entered values 
    $FileName = $_POST['FileName'];
    $UserName= $_POST['ArtstName'];
    $File= $_POST['submit'];
    $Type= $_POST['TypeSelect'];
    $date= date('Y-m-d H:i:s');

	// check that the file extention is in the white list 
$allowed = array("image/png", "image/gif", "application/pdf","image/jpg")
if(in_array($FileName, $allowed)) {

//add item with values 
    $sql = "INSERT INTO Assets (asset_Type, asset_author ,Likes ,submission_date ,FileContent ,FileName) 
    VALUES ('$Type', '$UserName',0,'$date','$File',$FileName)";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
//error in adding
        echo "Error: :(  " . $sql . "<br>" . mysqli_error($link);
      }

}
else {
 echo "File type not allowed or supported Email david kozdra to support that file type "
}


?>
