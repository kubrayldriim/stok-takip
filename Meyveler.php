<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM meyveler WHERE murun_adi='armut'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM meyveler WHERE murun_adi='ayva'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM meyveler WHERE murun_adi='böğürtlen'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM meyveler WHERE murun_adi='elma'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM meyveler WHERE murun_adi='erik'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM meyveler WHERE murun_adi='incir'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM meyveler WHERE murun_adi='karpuz'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM meyveler WHERE murun_adi='kavun'";
$result8 = $conn->query($sql8);

$sql9 = "SELECT * FROM meyveler WHERE murun_adi='kayısı'";
$result9 = $conn->query($sql9);

$sql10 = "SELECT * FROM meyveler WHERE murun_adi='kiraz'";
$result10 = $conn->query($sql10);

$sql11 = "SELECT * FROM meyveler WHERE murun_adi='kivi'";
$result11 = $conn->query($sql11);

$sql12 = "SELECT * FROM meyveler WHERE murun_adi='mandalina'";
$result12 = $conn->query($sql12);

$sql13 = "SELECT * FROM meyveler WHERE murun_adi='muz'";
$result13 = $conn->query($sql13);

$sql14 = "SELECT * FROM meyveler WHERE murun_adi='nar'";
$result14 = $conn->query($sql14);

$sql15 = "SELECT * FROM meyveler WHERE murun_adi='portakal'";
$result15 = $conn->query($sql15);

$sql16 = "SELECT * FROM meyveler WHERE murun_adi='çilek'";
$result16 = $conn->query($sql16);

$sql17 = "SELECT * FROM meyveler WHERE murun_adi='üzüm'";
$result17 = $conn->query($sql17);

$sql18 = "SELECT * FROM meyveler WHERE murun_adi='şeftali'";
$result18 = $conn->query($sql18);



?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Meyveler</title>

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
                    <img src="fotolar/meyveler/armut.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Armut</div>
                    <div class="kutu-fiyat">2.50 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?>
            </div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/ayva.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Ayva</div>
                    <div class="kutu-fiyat">3.75 ₺<br> Miktar:
                    <?php
            if ($result2->num_rows > 0) {
                while ($row = $result2->fetch_assoc()) {
                    echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
            }
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/böğürtlen.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Böğürtlen</div>
                    <div class="kutu-fiyat">7.00 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/elma.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Elma</div>
                    <div class="kutu-fiyat">2.50 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/erik.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Erik</div>
                    <div class="kutu-fiyat">1.25 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/incir.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">İncir</div>
                    <div class="kutu-fiyat">4.50 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/karpuz.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Karpuz</div>
                    <div class="kutu-fiyat">11.50 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/kavun.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kavun</div>
                    <div class="kutu-fiyat">9.00 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/kayısı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kayısı</div>
                    <div class="kutu-fiyat">7.00 ₺<br> Miktar:
                    <?php
                    if ($result9->num_rows > 0) {
                        while ($row = $result9->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/kiraz.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kiraz</div>
                    <div class="kutu-fiyat">5.25 ₺<br> Miktar:
                    <?php
                    if ($result10->num_rows > 0) {
                        while ($row = $result10->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/kivi.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Kivi</div>
                    <div class="kutu-fiyat">6.50 ₺<br> Miktar:
                    <?php
                    if ($result11->num_rows > 0) {
                        while ($row = $result11->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/mandalina.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Mandalina</div>
                    <div class="kutu-fiyat">6.75 ₺<br> Miktar:
                    <?php
                    if ($result12->num_rows > 0) {
                        while ($row = $result12->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/muz.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Muz</div>
                    <div class="kutu-fiyat">8.00 ₺<br> Miktar:
                    <?php
                    if ($result13->num_rows > 0) {
                        while ($row = $result13->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/nar.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Nar</div>
                    <div class="kutu-fiyat">8.75 ₺<br> Miktar:
                    <?php
                    if ($result14->num_rows > 0) {
                        while ($row = $result14->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/portakal.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Portakal</div>
                    <div class="kutu-fiyat">7.50 ₺<br> Miktar:
                    <?php
                    if ($result15->num_rows > 0) {
                        while ($row = $result15->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/çilek.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Çilek</div>
                    <div class="kutu-fiyat">4.50 ₺<br> Miktar:
                    <?php
                    if ($result16->num_rows > 0) {
                        while ($row = $result16->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/üzüm.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Üzüm</div>
                    <div class="kutu-fiyat">5.00 ₺<br> Miktar:
                    <?php
                    if ($result17->num_rows > 0) {
                        while ($row = $result17->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/meyveler/şeftali.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Şeftali</div>
                    <div class="kutu-fiyat">6.50 ₺<br> Miktar:
                    <?php
                    if ($result18->num_rows > 0) {
                        while ($row = $result18->fetch_assoc()) {
                            echo "<tr><td>" . $row["mmiktar"] . "</td></tr>";
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
