<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php 
    if (!isset($_COOKIE['username'])) { 
    echo "Selamat Datang, Silahkan masukan nama anda";
    ?>
  
    <form method="POST" action="">
        <label for="nama">Masukan nama : </label><input type="text" name="nama">
        <input type="submit" name="submit">
    </form>

    <?php 
        if(isset($_POST['submit'])) {
            
            //Pertama kali buka, baca username dari form
            $cookie_name = $_POST['nama'];
            
            //Baca tanggal & jam
            $cookie_date = date("Y-m-d H:i:s");
            
            //Save data ke var $cookie_date
            $cookie_counter = 1;
            setcookie("count", $cookie_counter);
            setcookie('username',$cookie_name,time()+3*30*24*3600);
            setcookie('date',$cookie_date,time()+3*30*24*3600);
            header("location: cookietest.php");
        }
    ?>

    <?php
        } elseif($_COOKIE['count'] == 1) {
            
            //Tampilan visit ke-2+
            echo "Hello " . $_COOKIE['username'];
            echo "<br> Ini adalah kunjungan anda";
            echo "<br>Kamu telah mengunjungi halaman ini".$_COOKIE['count']." times.";

            //Counter tambah 1
            $cookie_counter = ++$_COOKIE['count'];
            
            //Update counter
            setcookie("count", $cookie_counter);
            
            //Update date
            $cookie_date = date("Y-m-d H:i:s");
            setcookie('date',$cookie_date,time()+3*30*24*3600);
        } elseif($_COOKIE['count'] > 1) {
            
            //Tampilan visit ke-2+
            echo "Hello " . $_COOKIE['username'];
            echo "<br>Kamu telah mengunjungi halaman ini ".$_COOKIE['count']." times.";
            echo "<br>Terakhir dikunjungi
             : " . $_COOKIE['date']; 
            
            //Counter tambah 1
            $cookie_counter = ++$_COOKIE['count'];
            
            //Update counter
            setcookie("count", $cookie_counter);
            
            //Update date
            $cookie_date = date("Y-m-d H:i:s");
            setcookie('date',$cookie_date,time()+3*30*24*3600);
        } 
    ?> 
  </body> 
</html>