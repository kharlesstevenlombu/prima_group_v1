<?php
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $host="localhost";
    $user="root";
    $pass="";
    $db="db_prima_group";
    $koneksi=mysqli_connect($host,$user,$pass,$db);
    if($koneksi==true)
    {
        $sql="select * from tbl_user where user_name='$user_name' and password='$password'";
        $query=mysqli_query($koneksi,$sql);
        if($query==true)
        {
            if(mysqli_num_rows($query)>0){
                header('location:home.php');  
            }
            
            else{
                header('location:login.php?pesan=user tidak ditemukan');
            }
            
        }
        else
        {
            echo 'perintah salah';
        }
    }
?>