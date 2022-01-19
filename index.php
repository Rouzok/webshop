<?php

session_start();

    include_once("function/helper.php");
    include_once("function/koneksi.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false ;
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false ;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false ;
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false ;
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false ;
    $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
    $totalBarang = count($keranjang);

?>

<?php
    include_once("function/helper.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>GN SHOP | Senjata Api</title>
        <link href="<?php echo BASE_URL. "asset/css/style.css"; ?>" type="text/css" rel="stylesheet"/>
        <script src="<?php echo BASE_URL."asset/js/jquery-3.6.0.min.js";?>"></script>

        <script src="<?php echo BASE_URL."asset/js/slidesjs-SlidesJS-3/source/jquery.slides.min.js";?>"></script>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <a href ="<?php echo BASE_URL. "index.php";?>">
                    <img src="<?php echo BASE_URL. "asset/image/logo.png";?>"width=120px/>
                </a>
                
                <div class="menu">
                    <div class="user">
                        <?php
                        if ($user_id) {
                            echo "Hi <b>$nama</b>,
                            <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list' class='btn-profile'>My Profile</a>
                            <a href='".BASE_URL."logout.php' class='btn-reg'>Logout</a>";
                        }else{
                            echo "<a href='".BASE_URL."index.php?page=login' class='btn-login'>Login</a>
                                <a href='".BASE_URL."index.php?page=register' class='btn-reg'>Register</a>
                            ";
                        }
                        ?>
                    </div>

                    <a href="<?php echo BASE_URL. "index.php?page=keranjang"; ?>" class="btn-keranjang">
                        <img src="<?php echo BASE_URL. "asset/image/cart.png"; ?>"/>
                    </a>
                </div>
            </div>
            <div class="content">
            <?php
            $filename= "$page.php";

            if(file_exists($filename)){
                include_once($filename);
            }else{
                include_once("main.php");
            }
            ?>
            </div>
               
            </div>   
 <div class="footer">
                    <p>© Copyright ALVAN TERNOLEP DI DUNIAAAA</p>
                </div>
    </body>
</html>