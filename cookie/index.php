<?php
$expire = time()+3;
setcookie('netter',1,$expire);
?>
<html>
<head>
<body>
    <?php
    if(isset($_COOKIE['netter'])) {
        echo "Selamat Datang Kembali";
    }else{
        echo "Selamat Datang, ini kunjungan anda pertama kalinya";
    }
    ?>
</body>
</head>
</html>