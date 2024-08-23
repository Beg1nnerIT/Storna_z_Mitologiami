<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "gods_and_mythologies";
$conn = mysqli_connect($host, $db_user, $db_password, $dbname);

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM gods WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Wiersz został usunięty";
    } else {
        echo "Wystąpił błąd podczas usuwania wiersza";
    }
}
?>
