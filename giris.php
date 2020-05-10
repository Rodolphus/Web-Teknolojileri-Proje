<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Üye Girişi</title>
    </head>
    <body style="background-color: #343A40; color: white;">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="giris.php">Üye Girişi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br>
        <div class = "container form-signin">       
            <?php
                $msg = '';
                
                if (isset($_POST['giris']) && !empty($_POST['kullaniciAdi']) && !empty($_POST['sifre'])) {
                    if ($_POST['kullaniciAdi'] == 'b181210090@sakarya.edu.tr' && 
                        $_POST['sifre'] == '123') {
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['kullaniciAdi'] = 'b181210090@sakarya.edu.tr';
                        
                        header('Refresh: 0; URL = basariliGiris.php');             
                    }else {
                        $msg = 'Kullanıcı adı veya şifre yanlış. Tekrar deneyiniz.';
                    }
                }
            ?>
        </div>
                
        <div class="container-fluid">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" style="text-align: center;">
                <h1 class="display-4">GİRİŞ</h1><br>
                <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                <label for="kullaniciAdi">Kullanıcı Adı</label><br>
                <input type="email" name="kullaniciAdi" id="kullaniciAdi"required autofocus><br><br>
                <label for="sifre">Parola</label><br>
                <input type="password" name="sifre" id="sifre" ><br><br>
                <button id="giris" type="submit" name="giris" >Giriş</button>
            </form>
        </div>
        
    </body>
</html>