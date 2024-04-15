<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Stoktakip</title>

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
            
            <div class="Sicerik">
                
            <form class="form"  method="post">
                    <p class="form-isimi">Stok Sistemi Yönetici Giriş</p>
                    <div class="input-kutu">
                    <input type="text" placeholder="Adınz" name="kuladı">
                </div>
                <div class="input-kutu">
                    <input type="password" placeholder="Şifreniz" name="sifre">
                    </div>
                    <button type="submit" class="kaydet">
                    Sign in
                </button>
            
                <p class="syaziyeri">
                Buraya sadece Adminler girebilir.
                </p>
            </form>
 
<?php
 if(!empty($_POST))
 {

    $kuladı=$_POST["kuladı"];
    $sifre=$_POST["sifre"];
    $hatavarmi = false;

    if($kuladı=="")
    {
    echo "Kullanıcı Adı boş olamaz";
    $hatavarmi = true;
    }

    elseif (strlen($kuladı) < 4)
    {
    $hatavarmi = true;
    echo "Kullanıcı adı 5 karakterden küçük olamaz";
    }

    elseif($sifre=="")
    {
    $hatavarmi = true;
    echo " Lütfen şifre giriniz";
    }

    elseif(strlen($sifre) < 4)
    {
    $hatavarmi = true;
    echo " Şifre 5 Karakterden küçük olamaz";
    }
    else 
    {
        
      include "conn.php"; 
      if (!empty($_POST)) 
      {
          $kuladı = $_POST["kuladı"];
          $sifre = $_POST["sifre"];
          $hatavarmi = false;

          

          if (!$hatavarmi) 
          {
            //veri tabanındaki bilgileri kontrol ediyoruz
              $sorgu = "SELECT * FROM kulanıcılar WHERE aad='$kuladı' AND asifre='$sifre'";
              $sonuc = mysqli_query($conn, $sorgu);
              $row = mysqli_fetch_assoc($sonuc);

              if (empty($row)) 
              {
                  echo "Yanlış Kullanıcı adı veya şifre";
              } 

              else 
              {
                header("Location: stoktakipp.php");
              }
          }
      }
    }
 }


?>
 

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
