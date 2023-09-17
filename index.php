<?php 
@include 'config.php';

if(isset($_POST['kaydet'])){
    $ad = htmlspecialchars($_POST['ad']);
    $soyad = htmlspecialchars($_POST['soyad']);
    $il = htmlspecialchars($_POST['il']);
    $ilce = htmlspecialchars($_POST['ilce']);
    $adres = htmlspecialchars($_POST['adres']);
    $durum = htmlspecialchars($_POST['durum']);

    $insert = "INSERT INTO depremzede(ad ,soyad, il, ilce, adres, durum) VALUES('$ad','$soyad','$il','$ilce', '$adres', '$durum')";
    mysqli_query($conn, $insert);
    echo "<div class='alert alert-success text-center' role='alert'>
    Kayıt Başarıyla Oluşturuldu!
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deprem Yardım Talebi | deprem.website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-2">Yardım Talebi</h1>
    <form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Ad</label>
    <input type="text" class="form-control" name="ad">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Soyad</label>
    <input name="soyad" type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">İl</label>
    <select name="il" class="form-select">
      <option selected>Şehir...</option>
    <option value="Adana">Adana</option>
    <option value="Adıyaman">Adıyaman</option>
    <option value="Batman">Batman</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bitlis">Bitlis</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Hakkari">Hakkari</option>
    <option value="Hatay">Hatay</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Kilis">Kilis</option>
    <option value="Malatya">Malatya</option>
    <option value="Mardin">Mardin</option>
    <option value="Mersin">Mersin</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Hakkari">Hakkari</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Siirt">Siirt</option>
    <option value="Şırnak">Şırnak</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">İlçe</label>
    <input type="text" class="form-control" name="ilce" placeholder="İlçe Giriniz...">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Açık Adres</label>
    <input type="text" class="form-control" name="adres">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Durum</label>
    <select name="durum" id="inputState" class="form-select">
      <option selected>Durum...</option>
      <option value="Enkaz altındayım. (YÜKSEK ÖNCELİK)">Enkaz altındayım. (YÜKSEK ÖNCELİK)</option>
      <option value="Bir Başkası İçin Yardım Talebi">Bir Başkası İçin Yardım Talebi</option>
    </select>
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button name="kaydet" type="submit" class="btn btn-primary col-md-12 col-12">Kaydet</button>
  </div>
</form>
<div class="col">
<h1 class="mt-3 text-center">AFAD Numaraları</h1>
  <div class="d-flex text-center">
  <div class="col-md-6 col-12 d-block">
      <a href="tel:(0344) 224 14 14">Maraş: (0344) 224 14 14</a>
      <a href="tel:(0326) 216 10 67">Hatay: (0326) 216 10 67</a>
      <a href="tel:(0322) 227 28 54">Adana: (0322) 227 28 54</a>
      <a href="tel:(0342) 336 26 92">Gaziantep: (0342) 336 26 92</a>
      <a href="tel:(0328) 826 20 02">Osmaniye: (0328) 826 20 02</a>
    </div>

    <div class="col-md-6 col-12 d-block">
      <a href="tel:(0422) 212 84 32">Malatya: (0422) 212 84 32</a>
      <a href="tel:(0416) 216 12 31">Adıyaman: (0416) 216 12 31</a>
      <a href="tel:(0414) 313 72 90">Urfa: (0414) 313 72 90</a>
      <a href="tel:(0348) 813 44 78">Kilis: (0348) 813 44 78</a>
      <a href="tel:(0412) 326 11 56">Diyarbakır :(0412) 326 11 56</a>
    </div>
  </div>
  <div class="col">
    <h1 class="mt-3 text-center">AFAD Bağış Linkleri</h1>
    <p>"AFET" yazıp 2868'e göndererek (15₺) katkıda bulunabilirsiniz.</p>
    <div class="col-md-4 col-12 w-100">
      <a href="https://events.softgiving.com/donate/HasanAbiForTurkeySyriaEarthquakesFund">Softgiving Bağış</a>
    </div>
    <div class="col-md-4 col-12 w-100">
      <a href="https://ahbap.org/bagisci-ol">Ahbap Bağış</a>
    </div>
    <div class="col-md-4 col-12 w-100">
      <a href="https://www.afad.gov.tr/depremkampanyasi2">AFAD Bağış</a>
    </div>
  </div>

  </div>
    <h1 class="text-center mt-5">Kayıtlı Yardım Talepleri</h1>
    <form class="row gy-2 gx-3 align-items-center">
  <form method="POST">
  <div class="col-md-4">
    <select name="filtreil" class="form-select">
      <option selected>Şehir...</option>
    <option value="Adana">Adana</option>
    <option value="Adıyaman">Adıyaman</option>
    <option value="Batman">Batman</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bitlis">Bitlis</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Hakkari">Hakkari</option>
    <option value="Hatay">Hatay</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Kilis">Kilis</option>
    <option value="Malatya">Malatya</option>
    <option value="Mardin">Mardin</option>
    <option value="Mersin">Mersin</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Hakkari">Hakkari</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Siirt">Siirt</option>
    <option value="Şırnak">Şırnak</option>
    </select>
  </div>

  <div class="col-md-4">
    <div class="input-group">
      <input name="filtreilce" type="text" class="form-control" id="autoSizingInputGroup" placeholder="İlçe">
    </div>
  </div>
  <div class="col-md-4">
    <button class="btn btn-primary w-100" name="filtrele">Filtrele</button>
  </div>
  </form>
    <?php 
        if($_GET){
            $filtreil = $_GET["filtreil"];
            $filtreilce = $_GET["filtreilce"];
            $bul = "Select * From depremzede where il='$filtreil' and ilce='$filtreilce'";
            $sorgu = $conn->query($bul);
                while ($satir = $sorgu->fetch_assoc()){
                    echo '<table class="table">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">Ad</th>';
                    echo '<th scope="col">Soyad</th>';
                    echo '<th scope="col">İl</th>';
                    echo '<th scope="col">İlçe</th>';
                    echo '<th scope="col">Açık Adres</th>';
                    echo '<th scope="col">Durum</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>'.$satir['ad'].'</td>';
                    echo '<td>'.$satir['soyad'].'</td>';
                    echo '<td>'.$satir['il'].'</td>';
                    echo '<td>'.$satir['ilce'].'</td>';
                    echo '<td>'.$satir['adres'].'</td>';
                    echo '<td>'.$satir['durum'].'</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
        }else {
            $bul = "Select * From depremzede";
            $sorgu = $conn->query($bul);
                while ($satir = $sorgu->fetch_assoc()){
                    echo '<table class="table">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">Ad</th>';
                    echo '<th scope="col">Soyad</th>';
                    echo '<th scope="col">İl</th>';
                    echo '<th scope="col">İlçe</th>';
                    echo '<th scope="col">Açık Adres</th>';
                    echo '<th scope="col">Durum</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>'.$satir['ad'].'</td>';
                    echo '<td>'.$satir['soyad'].'</td>';
                    echo '<td>'.$satir['il'].'</td>';
                    echo '<td>'.$satir['ilce'].'</td>';
                    echo '<td>'.$satir['adres'].'</td>';
                    echo '<td>'.$satir['durum'].'</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
        }
    ?>
</form>
<p>Coded By Mustafa Said Bektaş - İletişim: business@mustafasaid.tech</p>
<p>Bu Websitesi Bir Gönüllü Tarafından Yapılmıştır. Resmi Bir Kuruma Ait Değildir.</p>
    </div>
</body>
</html>