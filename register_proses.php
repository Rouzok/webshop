<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $level = "customer";
    $status = "on";
    $nama= $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    unset($_POST['password']);
    unset($_POST['re_password']);
    $dataForm = http_build_query($_POST);

    $query = mysqli_query($db, "SELECT * FROM user WHERE email='$email'");

    if(empty($nama) || empty($email) || empty($hp) || empty($alamat) || empty($password)){
        header("location: ".BASE_URL."index.php?page=register&notif=require&$dataForm");
    }elseif($password != $re_password){
        header("location: ".BASE_URL."index.php?page=register&notif=password&$dataForm");
    }elseif(mysqli_num_rows($query) == 1){
        header("location: ".BASE_URL."index.php?page=register&notif=email&$dataForm");
    }else{
        $password = md5($password);
        mysqli_query($db, "INSERT INTO user (level, status, nama, email, hp, alamat, password)
                                VALUES ('$level','$status', '$nama' , '$email', '$hp', '$alamat', '$password')");
        header("location: ".BASE_URL."index.php?page=login");
    }
?>