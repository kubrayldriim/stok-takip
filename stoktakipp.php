<?php
include "conn.php";
// veri tabanından değerleri alıyruz sql kodları ile

$sql = "SELECT * FROM meyveler";
$result = $conn->query($sql);

$sql = "SELECT * FROM sebzeler";
$resultt = $conn->query($sql);

$sql = "SELECT * FROM kurubgiller";
$resulttt = $conn->query($sql);

$sql = "SELECT * FROM suturunleri";
$resultttt = $conn->query($sql);

$sql = "SELECT * FROM unlumam";
$resulttttt = $conn->query($sql);

$sql = "SELECT * FROM baharatlar";
$resultttttt = $conn->query($sql);

$sql = "SELECT * FROM atıstırmalıklar";
$resulttttttt = $conn->query($sql);

$sql = "SELECT * FROM icecekler";
$resultttttttt = $conn->query($sql);


$sql = "SELECT * FROM evyasam";
$resulttttttttt = $conn->query($sql);

$sql = "SELECT * FROM etveeturunleri";
$resultttttttttt = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Stok Takip</title>
</head>
<style>
    body {
    padding: 0;
    margin: 0;
    background-color: #f1f1f1;
    box-sizing: border-box;
}

.üsttaraf {
    width: 100%;
    height: 70px;
    padding-left: 20px;
    padding-top: 10px;
    box-sizing: border-box;
    background-color: #333;
    color: #fff;
}
.üsttaraf a{
    width: 100%;
    height: 100%;
}
.alttaraf {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: flex-start;
    padding: 20px;
    box-sizing: border-box;
}

.panel1 {
    flex: 0 0 calc(33.333% - 20px);
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    overflow: hidden;
    text-align: center;
    padding-bottom: 30px;
    box-sizing: border-box;
}

.panel1 h1 {
    background-color: #333;
    color: #fff;
    padding: 10px;
    margin: 0;
}
.panel1 a {
    display: inline-block;
    margin-top: 10px; /* Boşluk eklemek için */
    padding: 8px 16px;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}

.panel1 a:hover {
    background-color: #45a049;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align:center;
}

th {
    background-color: #333;
    color: #fff;
}
a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30%;
    height: 100%;
    color: inherit;
    text-decoration: none;
}

button {
    width: fit-content;
    min-width: 100px;
    height: 45px;
    padding: 8px;
    border-radius: 5px;
    border: 2.5px solid #E0E1E4;
    box-shadow: 0px 0px 20px -20px;
    cursor: pointer;
    background-color: rgb(255, 255, 255);
    transition: all 0.2s ease-in-out 0ms;
    user-select: none;
    font-family: 'Poppins', sans-serif;
}

button:hover {
    background-color: #F2F2F2;
    box-shadow: 0px 0px 20px -18px;
}

button:active {
    transform: scale(0.95);
}

    </style><body>

<div class="üsttaraf">
    <button>
        <a href="stoktakip.php">❮ Geri Dön</a>
    </button>
</div>
<div class="alttaraf">

<div class="panel1">
<h1>Meyveler Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["mid"] . "</td>";
                    echo "<td>" . $row["murun_adi"] . "</td>";
                    echo "<td>" . $row["mmiktar"] . "</td>";
                    echo "<td><a href='stok_meyveler_sil.php?id=" . $row["mid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Sebzeler Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $resultt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["seid"] . "</td>";
                    echo "<td>" . $row["seurun_adi"] . "</td>";
                    echo "<td>" . $row["semiktar"] . "</td>";
                    echo "<td><a href='stok_sebzeler_sil.php?id=" . $row["seid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
   
    
<div class="panel1">
<h1>KuruBakla Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resulttt->num_rows > 0) {
                while ($row = $resulttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["kbid"] . "</td>";
                    echo "<td>" . $row["kburun_adi"] . "</td>";
                    echo "<td>" . $row["kbmiktar"] . "</td>";
                    echo "<td><a href='stok_sil_kbgiller.php?id=" . $row["kbid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Süt Ürünleri Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resultttt->num_rows > 0) {
                while ($row = $resultttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["suid"] . "</td>";
                    echo "<td>" . $row["suurun_adi"] . "</td>";
                    echo "<td>" . $row["sumiktar"] . "</td>";
                    echo "<td><a href='stok_sil_suturunleri.php?id=" . $row["suid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Unlu Mamüller Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resulttttt->num_rows > 0) {
                while ($row = $resulttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["umid"] . "</td>";
                    echo "<td>" . $row["umurun_adi"] . "</td>";
                    echo "<td>" . $row["ummiktar"] . "</td>";
                    echo "<td><a href='stok_sil_unlumam.php?id=" . $row["umid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Baharatlar Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resultttttt->num_rows > 0) {
                while ($row = $resultttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["bahid"] . "</td>";
                    echo "<td>" . $row["bahurun_adi"] . "</td>";
                    echo "<td>" . $row["bahmiktar"] . "</td>";
                    echo "<td><a href='stok_sil_baharatlar.php?id=" . $row["bahid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Atıştırmalıklar Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resulttttttt->num_rows > 0) {
                while ($row = $resulttttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["atid"] . "</td>";
                    echo "<td>" . $row["aturun_adi"] . "</td>";
                    echo "<td>" . $row["atmiktar"] . "</td>";
                    echo "<td><a href='stok_atıstırmalıklar_sil.php?id=" . $row["atid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>İçecekler Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resultttttttt->num_rows > 0) {
                while ($row = $resultttttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["icid"] . "</td>";
                    echo "<td>" . $row["icurun_adi"] . "</td>";
                    echo "<td>" . $row["icmiktar"] . "</td>";
                    echo "<td><a href='stok_icecekler_sil.php?id=" . $row["icid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Ev & Yaşam Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resulttttttttt->num_rows > 0) {
                while ($row = $resulttttttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["evid"] . "</td>";
                    echo "<td>" . $row["evurun_adi"] . "</td>";
                    echo "<td>" . $row["evmiktar"] . "</td>";
                    echo "<td><a href='stok_evyasam_sil.php?id=" . $row["evid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>
    <div class="panel1">
<h1>Et Ve Et Ürünleri Stok Takip Sistemi</h1>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Ürün Adı</th>
                <th>Miktar</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($resultttttttttt->num_rows > 0) {
                while ($row = $resultttttttttt->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["etid"] . "</td>";
                    echo "<td>" . $row["eturun_adi"] . "</td>";
                    echo "<td>" . $row["etmiktar"] . "</td>";
                    echo "<td><a href='stok_etveeturunleri_sil.php?id=" . $row["etid"] . "'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Stok bulunamadı.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="sekle.php">Yeni Stok Ekle</a>
        <br>
    </div>





</div>
</body>
</html>
