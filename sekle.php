<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotolar/logo.png" type="image/x-icon" />
    <title>Yeni Stok Ekle</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .panel {
            flex: 0 0 calc(33.333% - 20px);
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            padding-bottom: 30px;
            box-sizing: border-box;
            padding-left: 30px;
        }
        .panel a {
            display: inline-block;
            margin-top: 10px; /* Boşluk eklemek için */
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="panel">
        <h2>Meyveler Stok Ekle</h2>

        <form action="stok_ekle_meyveler.php" method="post">
            <label for="urun_adi">Ürün Adı:</label>
            <input type="text" id="urun_adi" name="urun_adi" required>

            <label for="miktar">Miktar:</label>
            <input type="number" id="miktar" name="miktar" required>

            <input type="submit" value="Ekle">
        </form>

        <br>

        <a href="stoktakipp.php">Geri Dön</a>
    </div>

    <div class="panel">
    <h2>Sebzeler Stok Ekle</h2>

<form action="stok_ekle_sebzeler.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
   

 <div class="panel">
    <h2>KuruBakla Stok Ekle</h2>

<form action="stok_ekle_kbgiller.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Süt Ürünleri Stok Ekle</h2>

<form action="stok_ekle_suturunleri.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Unlu Mamüller Stok Ekle</h2>

<form action="stok_ekle_unlumam.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>
<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Baharatlar Stok Ekle</h2>

<form action="stok_ekle_baharatlar.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Atıştırmalıklar Stok Ekle</h2>

<form action="stok_ekle_atıstırmalıklar.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>İçecekler Stok Ekle</h2>

<form action="stok_ekle_icecekler.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Ev & Yaşam Stok Ekle</h2>

<form action="stok_ekle_evyasam.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>
    <div class="panel">
    <h2>Et Ve Et Ürünleri Stok Ekle</h2>

<form action="stok_ekle_etveeturunleri.php" method="post">
    <label for="urun_adi">Ürün Adı:</label>
    <input type="text" id="urun_adi" name="urun_adi" required>

    <label for="miktar">Miktar:</label>
    <input type="number" id="miktar" name="miktar" required>

    <input type="submit" value="Ekle">
</form>

<br>

<a href="stoktakipp.php">Geri Dön</a>
    </div>

</body>
</html>
