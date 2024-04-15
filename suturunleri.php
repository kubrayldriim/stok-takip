<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM suturunleri WHERE suurun_adi='Ayran'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM suturunleri WHERE suurun_adi='Kaşar'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM suturunleri WHERE suurun_adi='Kefir'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM suturunleri WHERE suurun_adi='Peynir'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM suturunleri WHERE suurun_adi='Süt'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM suturunleri WHERE suurun_adi='Tereyağı'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM suturunleri WHERE suurun_adi='Yoğurt'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM suturunleri WHERE suurun_adi='Yumurta'";
$result8 = $conn->query($sql8);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Süt Ürübleri</title>

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
                    <img src="fotolar/süt ürünleri/ayran.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Ayran</div>
                    <div class="kutu-fiyat">7.50 ₺
                    <br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?>
                    </div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/kaşar.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kaşar</div>
                    <div class="kutu-fiyat">57.50 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/kefir.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kefir</div>
                    <div class="kutu-fiyat">12.00 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/peynir.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Peynir</div>
                    <div class="kutu-fiyat">40.00 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/süt.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Süt</div>
                    <div class="kutu-fiyat">7.50 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/tereyağı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Tereyağı</div>
                    <div class="kutu-fiyat">95.00 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/yoğurt.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Yoğurt</div>
                    <div class="kutu-fiyat">27.50 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/süt ürünleri/yumurta.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Yumurta</div>
                    <div class="kutu-fiyat">11.75 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["sumiktar"] . "</td></tr>";
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
