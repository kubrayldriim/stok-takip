<?php
include "conn.php";
//görüntülemek için gereken sql komutları

$sql1 = "SELECT * FROM unlumam WHERE umurun_adi='nişasta'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM unlumam WHERE umurun_adi='un'";
$result2 = $conn->query($sql2);

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Un Mamülleri</title>

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
                    <img src="fotolar/unlu mamüller/nişasta.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Nişasta</div>
                    <div class="kutu-fiyat">5.00 ₺<br> Miktar:
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row["ummiktar"] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>Stok bulunamadı.</td></tr>";
                    }
            
            ?></div>
                </div>
                <div class="icerik-kutu">
                    <img src="fotolar/unlu mamüller/un.jpg" alt="Ürün Resmi" class="kutu-image">
                    <div class="kutu-baslık">Un</div>
                    <div class="kutu-fiyat">7.50 ₺<br> Miktar:
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>" . $row["ummiktar"] . "</td></tr>";
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
