<?php
include "conn.php";
// silmek için gereken skl kodları

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM sebzeler WHERE seid=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: stoktakipp.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
