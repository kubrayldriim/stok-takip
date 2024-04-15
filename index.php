<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Anasayfa</title>
<style>
    form {
        background-color: #424547;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        width: 300px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    h2 {
        color: #fff;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        color: #2d2f31; /* Metin rengi #2d2f31 rengine uyumlu */
    }

</style>
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
            
            <div class="aicerik">
          

<h1>ERKÜBU</h1><hr><br><br>


            <form action="" method="post">
                <b><font size="6px">Kategoriler</font></b>
                <select name="katogori" required>
                    <option value="" disabled selected>Lütfen bir katagori seçin</option>
                    <option value="meyveler">Meyveler</option>
                    <option value="sebzeler">Sebzeler</option>
                    <option value="kbgiller">Kuru Baklagiller</option>
                    <option value="sürünleri">Süt Ürünleri</option>
                    <option value="umamüller">Unlu Mamüller</option>
                    <option value="baharat">Baharatlar</option>
                    <option value="atıştırmalık">Atıştırmalıklar</option>
                    <option value="içecek">İçecekler</option>
                    <option value="evyaşam">Ev ve Yaşam</option>
                    <option value="etürün">Et ve Et Ürünlleri</option>
                </select>
                <input type="submit" value="ARA" name="arama">
                <?php
                
                if (isset($_POST["arama"])) 
                {
                    $secim=$_POST["katogori"];

                    switch ($secim) {
                        case 'meyveler':
                            header("Location: Meyveler.php");
                            break;
                            case 'sebzeler':
                                header("Location: sebzeler.php");
                                break;   
                                case 'kbgiller':
                                    header("Location: kbaklagiller.php");
                                    break;   
                                    case 'sürünleri':
                                        header("Location: suturunleri.php");
                                        break;   
                                        case 'umamüller':
                                            header("Location: umamuller.php");
                                            break;   
                                            case 'baharat':
                                                header("Location: baharatlar.php");
                                                break;   
                                                case 'atıştırmalık':
                                                    header("Location: atıstırmalıklar.php");
                                                    break;   
                                                    case 'içecek':
                                                        header("Location: icecekler.php");
                                                        break;   
                                                        case 'evyaşam':
                                                            header("Location: evyasam.php");
                                                            break;   
                                                            case 'etürün':
                                                                header("Location: etveeturunleri.php");
                                                                break;
                        default:
                            break;
                    }
                }
                ?>
            </form>
            <br><br><br> <br><br><br>

            <video autoplay loop muted >
                <source src="fotolar/v1.mp4" type="video/mp4">
            </video><br>

             <p>Teknolojide Liderlik: Biz, en son teknolojiye dayalı çözümler sunarak işinizi bir adım öteye taşıyoruz. Stok takip süreçlerinizdeki zorlukları anlıyor ve bu zorlukları çözmek için en güncel teknolojiyi kullanıyoruz.</p> 
             <br><br><br><br><br>
             <p> Özel Çözümler: İşletmenizin benzersiz ihtiyaçlarına odaklanıyoruz. ERKÜBU olarak, size özel çözümler üreterek işinizi daha iyi yönetmenizi sağlıyoruz. Her müşteri bizim için özeldir ve sizin başarınız, bizim başarımızdır.</p> 
             <br><br>
             <p>Kullanıcı Dostu Arayüz: Kompleks iş süreçlerini basitleştiriyoruz. ERKÜBU platformu, kullanıcı dostu arayüzü ile herkesin rahatlıkla kullanabileceği bir deneyim sunuyor. Stok takip işlemlerinizi daha verimli bir şekilde yönetmek hiç bu kadar kolay olmamıştı.</p> 
             <br><br>
             <p> Hız ve Güvenilirlik: İş dünyasında zaman her şeydir. Biz de bu bilinçle, stok takip süreçlerinizi hızlandırmak ve güvenilirliği artırmak için çalışıyoruz. Size odaklanmanız için daha fazla zaman kazandırmak bizim önceliğimiz.</p>   



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
