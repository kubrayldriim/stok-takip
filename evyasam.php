<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM evyasam WHERE evurun_adi='bulaşık deterjanı'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM evyasam WHERE evurun_adi='bulaşık makinesi det'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM evyasam WHERE evurun_adi='el sabunu'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM evyasam WHERE evurun_adi='elbezi'";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM evyasam WHERE evurun_adi='havlu kağıt'";
$result5 = $conn->query($sql5);

$sql6 = "SELECT * FROM evyasam WHERE evurun_adi='oda kokusu'";
$result6 = $conn->query($sql6);

$sql7 = "SELECT * FROM evyasam WHERE evurun_adi='sünger'";
$result7 = $conn->query($sql7);

$sql8 = "SELECT * FROM evyasam WHERE evurun_adi='tuvalet kağıdı'";
$result8 = $conn->query($sql8);

$sql9 = "SELECT * FROM evyasam WHERE evurun_adi='çamaşır deterjanı'";
$result9 = $conn->query($sql9);

$sql10 = "SELECT * FROM evyasam WHERE evurun_adi='çamaşır suyu'";
$result10 = $conn->query($sql10);

$sql11 = "SELECT * FROM evyasam WHERE evurun_adi='çamaşır yumuşatıcısı'";
$result11 = $conn->query($sql11);

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Ev ve Yaşam</title>

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
                    <img src="fotolar/ev&yaşam/bulaşık deterjanı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Bulaşık Deterjanı</div>
                    <div class="kutu-fiyat">55.50 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/bulaşıkmakinesideterjanı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Bulaşık Makinesi Deterjanı</div>
                    <div class="kutu-fiyat">75.50 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/el sabunu.jpg " alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">El Sabunu</div>
                    <div class="kutu-fiyat">15.50 ₺<br> Miktar:
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/elbezi.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Elbezi</div>
                    <div class="kutu-fiyat">5.50 ₺<br> Miktar:
                    <?php
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/havlu kağıt.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Havlu Kağıt</div>
                    <div class="kutu-fiyat">35.50 ₺<br> Miktar:
                    <?php
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/oda kokusu.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Oda Kokusu</div>
                    <div class="kutu-fiyat">23.50 ₺<br> Miktar:
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/sünger.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Sünger</div>
                    <div class="kutu-fiyat">7.00 ₺<br> Miktar:
                    <?php
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/tuvalet kağıdı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Tuvalet Kağıdı</div>
                    <div class="kutu-fiyat">30.00 ₺<br> Miktar:
                    <?php
                    if ($result8->num_rows > 0) {
                        while ($row = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/çamaşır deterjanı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Çamaşır Deterjanı</div>
                    <div class="kutu-fiyat">86.00 ₺<br> Miktar:
                    <?php
                    if ($result9->num_rows > 0) {
                        while ($row = $result9->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/çamaşır suyu.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Çamaşır Suyu</div>
                    <div class="kutu-fiyat">75.50 ₺<br> Miktar:
                    <?php
                    if ($result10->num_rows > 0) {
                        while ($row = $result10->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/ev&yaşam/çamaşır yumuşatıcısı.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Çamaşır Yumuşatıcısı</div>
                    <div class="kutu-fiyat">55.75 ₺<br> Miktar:
                    <?php
                    if ($result11->num_rows > 0) {
                        while ($row = $result11->fetch_assoc()) {
                            echo "<tr><td>" . $row["evmiktar"] . "</td></tr>";
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
