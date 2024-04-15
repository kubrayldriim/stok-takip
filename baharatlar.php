<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM baharatlar WHERE bahurun_adi='karabiber'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM baharatlar WHERE bahurun_adi='karanfil'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM baharatlar WHERE bahurun_adi='kekik'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM baharatlar WHERE bahurun_adi='kimyon'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM baharatlar WHERE bahurun_adi='tarçın'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM baharatlar WHERE bahurun_adi='zencefil'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM baharatlar WHERE bahurun_adi='zerdeçal'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM baharatlar WHERE bahurun_adi='çörekotu'";
$result8 = $conn->query($sql8);

?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Baharatlar</title>

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
                    <img src="fotolar/baharatlar/karabiber.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Karabiber</div>
                    <div class="kutu-fiyat">5.00 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/karanfil.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Karanfil</div>
                    <div class="kutu-fiyat">7.00 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/kekik.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kekik</div>
                    <div class="kutu-fiyat">3.00 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/kimyon.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kimyon</div>
                    <div class="kutu-fiyat">5.00 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/tarçın.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Tarçın</div>
                    <div class="kutu-fiyat">7.00 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/zencefil.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Zencefil</div>
                    <div class="kutu-fiyat">8.00 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/zerdeçal.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Zerdeçal</div>
                    <div class="kutu-fiyat">2.00 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/baharatlar/çörek otu.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Çörek Otu</div>
                    <div class="kutu-fiyat">3.00 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["bahmiktar"] . "</td></tr>";
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
