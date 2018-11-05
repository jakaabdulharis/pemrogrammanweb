<?php
session_start();
if(isset($_POST['login'])){
    if(($_POST['nama']=="") AND ($_POST['pass']=="")){
        echo "USERNAME dan PASSWORD masih Kosong";
        session_destroy();
    } else {
    if(($_POST['nama']=="Jaka") AND ($_POST['pass']=="123")) {
        $_SESSION['login']=1;
        header("location: login.php");
    }    
}
}
?>

<html>
<head>
</head>
<title>Session</title>
<body>
    <form name="session" method="POST" action="">
    <p>Form Login</p>
    <p>User Name <input type="text" name="nama"/></p>
    <p>Password <input type="password" name="pass"/></p>
    <input type="submit" name="login" value="login"/>

    </form>
</body>
</html>