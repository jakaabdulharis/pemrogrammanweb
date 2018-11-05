<?php
session_start();
if((isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
    session_destroy();
   
}

if(isset($_SESSION['login'])) {
    
?>

<body>
    Selamat Datang diweb kami | <a href="?aksi=logout">Logout</a>
</body>

<?php
}else{
header("refresh:2;url=index.php");
}
?>