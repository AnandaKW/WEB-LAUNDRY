<?php
session_start()
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Home Profile</h3><?=$_SESSION['username']?> Berhasil Login Sebagai <?=$_SESSION['role']?>
    <br><br>
    <a href="logout.php">logout</a>
</body>
</html>