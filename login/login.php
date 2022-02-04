<?php
session_start();
include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
    echo "<script>alert('please enter a username');location.href='form-login.php';</script>";
    //header("location: form-login.php");
}
else
{
    $pass = md5($password);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        $data = mysqli_fetch_array($result);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $data['role'];

        if($_SESSION['role'] == 'admin'){
            header("location: home-admin.php");
        } elseif($_SESSION['role']=='kasir'){
            header("location: home-kasir.php");
        } else {
            header("location: home-user.php");
        }
    }
    else{
        echo "<script>alert('username/password salah');location.href='form-login.php';</script>";

    }
}

?>