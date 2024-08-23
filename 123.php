<?php
if(isset($_POST['button'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

    $host = "localhost";
	$db_user = "root";
    $db_password = "";
    $dbname = "messenge";

  // Create connection
$conn = mysqli_connect($host, $db_user, $db_password, $dbname);

/* Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
  
  $sql = "INSERT INTO messenge (name, email, message)
  VALUES ('$name', '$email', '$message')";
  
  if (mysqli_query($conn, $sql)) {
      echo "Dane zostały wysłane do bazy danych";
  } else {
      echo "Błąd podczas wysyłania danych: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  header('Location: formularz.html');

}
?>