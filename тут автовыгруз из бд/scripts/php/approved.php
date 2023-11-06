<?php
session_start();
require('connect.php');
$bookingId = $_POST['approved_id'];

if(isset($_POST['delete'])) {
    $sql = "DELETE FROM bookings WHERE id = '$bookingId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../panel.php");
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

} else {
echo'<h1> Успешно</h1>';
}

?>