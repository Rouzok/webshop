<?php 
    if ($user_id) {
        header("Location: ".BASE_URL);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/login.css">
    </head>
<body>
<div class="container-user-akses">
    <h1>LOGIN FORM</h1>
    <form action="<?php echo BASE_URL. "login_proses.php"; ?>" method="POST";>

        
        <?php

            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

            if ($notif == true) {
                echo "<div class='notif'>Maaf, Email Atau password Yang Kamu Masukkan Tidak Cocok</div><br>";
            }
        ?>

        <div class="element-form">
            <label>Email :</label>
            <span><input type="text" class="form-control" placeholder="Email" name="email"></span>
        </div>

        <div class="element-form">
            <label>Password :</label>
            <span><input type="password" class="form-control" placeholder="Password" name="password"></span>
        </div>

        <div class="element-form">
            <input type="submit" name="simpan" value="LOGIN">
        </div>
    </form>
<div>

    
</body>
</html>