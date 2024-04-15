<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM suturunleri WHERE suid=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: stoktakipp.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>