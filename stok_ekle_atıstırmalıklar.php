<?php
include "conn.php";
// eklemek için gereken sql kodları

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urun_adi = $_POST["urun_adi"];
    $miktar = $_POST["miktar"];

    $sql = "INSERT INTO atıstırmalıklar (aturun_adi, atmiktar) VALUES ('$urun_adi', $miktar)";

    if ($conn->query($sql) === TRUE) {
        header("Location: stoktakipp.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
