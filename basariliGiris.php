<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Giriş Başarılı</title>
    </head>
    <body style="background-color: #343A40;">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="hakkinda.html" class="navbar-brand">RODOLPHUS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="hakkinda.html">Hakkında</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sehir.html">Şehir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="miras.html">Miras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="iletisim.html">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="giris.php">Üye Girişi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            session_start();
            unset($_SESSION["kullaniciAdi"]);
            unset($_SESSION["sifre"]);
        ?>

        <br><br>
        <div class="container-fluid" style="text-align:center;">
            <h1 class="display-4" style="color: white;">GİRİŞ İŞLEMİNİZ BAŞARILI</h1><br>
            <h1 class="lead" style="color:White;">Anasayfaya Yönlendiriliyorsunuz</h1>
        </div>

        <?php
            header('Refresh: 8; URL = hakkinda.html');
        ?>
        
    </body>
</html>