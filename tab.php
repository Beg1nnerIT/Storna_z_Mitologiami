<?php

    $host = "localhost";
	$db_user = "root";
    $db_password = "";
    $dbname = "gods_and_mythologies";


$conn = mysqli_connect($host, $db_user, $db_password, $dbname);

if (isset($_POST["submit"]))
 {
     #retrieve file title
     
$name = $_POST['name'];
$description = $_POST['opis'];
$pan_id = $_POST['mit_id'];
$mit_id = $_POST['mit_id'];
$atribute = $_POST['atr'];
$Odpowiednik = $_POST['odp'];

 
    #file name with a random number so that similar dont get replaced
     $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
    #TO move the uploaded file to specific location
    $fileDestination = 'images/'.$pname;

    move_uploaded_file($tname, $fileDestination); 
    #sql query to insert into database
    $sql = "INSERT into gods(id,name,description,image,pantheon_id,mit_id,atribute,odpowiednik) VALUES(',', '$name', '$description', '$pname', $pan_id, '$mit_id', '$atribute', '$Odpowiednik' )";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
    
}

  mysqli_close($conn);

?>