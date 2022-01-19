<?php 
    if ($user_id) {
        header("Location: ".BASE_URL);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
<body>
<div class="container-user-akses">
    <form action="<?php echo BASE_URL. "register_proses.php"; ?>" method="POST";>

    <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $hp = isset($_GET['hp']) ? $_GET['hp'] : false;
            $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

            if($notif == "require"){
                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
            }else if($notif == "password"){
                echo "<div class='notif'>Maaf, password yg kamu masukkan tclassak sama</div>";
            }else if($notif == "email"){
                echo "<div class='notif'>Maaf, email yang kamu masukkan sudah terdaftar</div>";
            }
        ?>  

        <div class="element-form">
            <label>Nama :</label>
            <span><input type="text" name="nama" /></span>
        </div>

        <div class="element-form">
            <label>Email :</label>
            <span><input type="text" name="email" /></span>
        </div>

        <div class="element-form">
            <label>Alamat :</label>
            <span><textarea name="alamat"></textarea></span>
        </div>

        <div class="element-form">
            <label>No Hp :</label>
            <span><input type="number" name="hp" /></span>
        </div>

        <div class="element-form">
            <label>Password :</label>
            <span><input type="password" name="password" /></span>
        </div>
        <div class="element-form">
            <label>Re-type Password :</label>
            <span><input type="password" name="re_password" /></span>
        </div>
        <div class="element-form">
            <input type="submit" name="simpan" value="REGISTER">
        </div>
    </form>
<div>

    
</body>
</html>