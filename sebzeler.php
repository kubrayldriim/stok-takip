<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM sebzeler WHERE seurun_adi='Bamya'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM sebzeler WHERE seurun_adi='Bezelye'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM sebzeler WHERE seurun_adi='Biber'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM sebzeler WHERE seurun_adi='Domates'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM sebzeler WHERE seurun_adi='Fasulye'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM sebzeler WHERE seurun_adi='Havuç'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM sebzeler WHERE seurun_adi='Kabak'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM sebzeler WHERE seurun_adi='Karnabahar'";
$result8 = $conn->query($sql8);

$sql9 = "SELECT * FROM sebzeler WHERE seurun_adi='Lahana'";
$result9 = $conn->query($sql9);

$sql10 = "SELECT * FROM sebzeler WHERE seurun_adi='Marul'";
$result10 = $conn->query($sql10);

$sql11 = "SELECT * FROM sebzeler WHERE seurun_adi='Patates'";
$result11 = $conn->query($sql11);

$sql12 = "SELECT * FROM sebzeler WHERE seurun_adi='Patlıcan'";
$result12 = $conn->query($sql12);

$sql13 = "SELECT * FROM sebzeler WHERE seurun_adi='Salatalık'";
$result13 = $conn->query($sql13);

$sql14 = "SELECT * FROM sebzeler WHERE seurun_adi='Sarımsak'";
$result14 = $conn->query($sql14);

$sql15 = "SELECT * FROM sebzeler WHERE seurun_adi='Semizotu'";
$result15 = $conn->query($sql15);

$sql16 = "SELECT * FROM sebzeler WHERE seurun_adi='Soğan'";
$result16 = $conn->query($sql16);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Sebzeler</title>

</head>
<body>

    <div class="container">
        <div class="soltartaf">
            <div class="solust">
                <div class="logo">
                    <img src="fotolar/logo.png" alt="Logo">
                </div>
                <div class="site-isim">
                    <h1>ERKÜBU MARKET</h1>
                </div>
            </div>

            <nav>
                <span><a href="index.php" >Anasayfa</a></span>
                <span><a href="hakkımızda.html" >Hakkımızda</a></span>
                <span><a href="stoktakip.php" >Stok Takip</a></span>
                <label for="touch"><span>Ürünler    ⇓</span></label>               
                <input type="checkbox" id="touch"> 
              
                <ul class="slide">
                  <li><a href="Meyveler.php">Meyveler</a></li> 
                  <li><a href="sebzeler.php">Sebzeler</a></li>
                  <li><a href="kbaklagiller.php">Kuru Baklagiller</a></li>
                  <li><a href="suturunleri.php">Süt Ürünleri</a></li>
                  <li><a href="umamuller.php">Unlu Mamüller</a></li>
                  <li><a href="baharatlar.php">Bahratlar</a></li>
                  <li><a href="atıstırmalıklar.php">Atıştırmalıklar</a></li>
                  <li><a href="icecekler.php">içecekler</a></li>
                  <li><a href="evyasam.php">Ev & Yaşam</a></li>
                  <li><a href="etveeturunleri.php">Et ve Et Ürünleri</a></li>
                </ul>   
                <span><a href="iletisim.html" >İletişim</a></span>
              </nav> 
        </div>

     
    <div class="sagtaraf" >
            
            <div class="uicerik">
           
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/bamya.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Bamya</div>
                    <div class="kutu-fiyat">2.50 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/bezelye.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Bezelye</div>
                    <div class="kutu-fiyat">4.50 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/biber.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Biber</div>
                    <div class="kutu-fiyat">3.75 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/domates.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Domates</div>
                    <div class="kutu-fiyat">4.25 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/fasülye.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Fasulye</div>
                    <div class="kutu-fiyat">2.50 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/havuç.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Havuç</div>
                    <div class="kutu-fiyat">3.50 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/kabak.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kabak</div>
                    <div class="kutu-fiyat">7.50 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/karnabahar.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Karnabahar</div>
                    <div class="kutu-fiyat">5.50 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/lahana.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Lahana</div>
                    <div class="kutu-fiyat">3.50 ₺<br> Miktar:
                    <?php
                    if ($result9->num_rows > 0) {
                        while ($row = $result9->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/marul.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Marul</div>
                    <div class="kutu-fiyat">2.75 ₺<br> Miktar:
                    <?php
                    if ($result10->num_rows > 0) {
                        while ($row = $result10->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/patates.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Patates</div>
                    <div class="kutu-fiyat">5.50 ₺<br> Miktar:
                    <?php
                    if ($result11->num_rows > 0) {
                        while ($row = $result11->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/patlıcan.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Patlıcan</div>
                    <div class="kutu-fiyat">5.25 ₺<br> Miktar:
                    <?php
                    if ($result12->num_rows > 0) {
                        while ($row = $result12->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/salatalık.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Salatalık</div>
                    <div class="kutu-fiyat">3.00 ₺<br> Miktar:
                    <?php
                    if ($result13->num_rows > 0) {
                        while ($row = $result13->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/sarımsak.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Sarımsak</div>
                    <div class="kutu-fiyat">1.75 ₺<br> Miktar:
                    <?php
                    if ($result14->num_rows > 0) {
                        while ($row = $result14->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/semizotu.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Semizotu</div>
                    <div class="kutu-fiyat">5.00 ₺<br> Miktar:
                    <?php
                    if ($result15->num_rows > 0) {
                        while ($row = $result15->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/sebzeler/soğan.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Soğan</div>
                    <div class="kutu-fiyat">2.00 ₺<br> Miktar:
                    <?php
                    if ($result16->num_rows > 0) {
                        while ($row = $result16->fetch_assoc()) {
                            echo "<tr><td>" . $row["semiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                






            </div>


        </div>
    </div>

    <footer>
        <div class="footer-icerik">
            <p>© 2023 ERKÜBU MARKET. Bütün hakları saklı ve gizlidir.</p>
            
        </div>
    </footer>

</body>
</html>
