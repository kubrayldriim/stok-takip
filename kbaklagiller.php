<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM kurubgiller WHERE kburun_adi='Barbunya'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kurubgiller WHERE kburun_adi='Bulgur'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM kurubgiller WHERE kburun_adi='Börülce'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM kurubgiller WHERE kburun_adi='Kuru Fasülye'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM kurubgiller WHERE kburun_adi='Kırmızı Mercimek'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM kurubgiller WHERE kburun_adi='Makarna'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM kurubgiller WHERE kburun_adi='Nohut'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM kurubgiller WHERE kburun_adi='Pirinç'";
$result8 = $conn->query($sql8);

$sql9 = "SELECT * FROM kurubgiller WHERE kburun_adi='Yeşil Mercimek'";
$result9 = $conn->query($sql9);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Kuru Baklagiller</title>

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
                    <img src="fotolar/baklagiller/barbunya.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Barbunya</div>
                    <div class="kutu-fiyat">7.50 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/bulgur.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Bulgur</div>
                    <div class="kutu-fiyat">3.00 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/börülce.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Börülce</div>
                    <div class="kutu-fiyat">3.25 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/kurufasülye.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kuru Fasülye</div>
                    <div class="kutu-fiyat">5.50 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/kırmızımercimek.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kırmızı Mercimek</div>
                    <div class="kutu-fiyat">6.00 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/makarna.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Makarna</div>
                    <div class="kutu-fiyat">3.50 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/nohut.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Nohut</div>
                    <div class="kutu-fiyat">2.50 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/pirinç.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Pirinç</div>
                    <div class="kutu-fiyat">5.50 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baklagiller/yeşilmercimek.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Yeşil Mercimek</div>
                    <div class="kutu-fiyat">1.75 ₺<br> Miktar:
                    <?php
                    if ($result9->num_rows > 0) {
                        while ($row = $result9->fetch_assoc()) {
                            echo "<tr><td>" . $row["kbmiktar"] . "</td></tr>";
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
