<?php session_start();?>
<p>
<form action="" method="post">
<input type="text" name="num">
<button type="submit" name="submit">Guess</button>
<button type="reset" name="Reset">Reset</button>
</form>
</p>
<?php

if(!isset($_SESSION['x'])){
    $_SESSION['x'] = rand(1, 100);
}
echo $_SESSION['x'];
if (isset($_POST['submit'])) {
        if ($_POST['num'] < $_SESSION['x']) 
        {
            echo "Angkanya terlalu kecil! <br />";
        } elseif ($_POST['num'] > $_SESSION['x']) 
            {
            echo " Angkanya terlalu besar! <br />";
        } elseif ($_POST['num'] == $_SESSION['x']) 
            {
            echo " Selamat tebakan anda benar. <br />";
        } else 
            {
            echo " angkanya tidak ditemukan! <br />";
        }
}
?>
