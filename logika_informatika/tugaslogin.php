<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $umur = $_POST['umur'];
    
    if ($username == "jaraversion" && $password == "4714" && $umur == "20") {
        echo "Login Berhasil!";
    } else {
        echo "Gagal Login! silahkan coba lagi!";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        form {
            padding: 7px;
        }

        input{
            background: #a2b8caff;
        }
    </style>
</head>
<body>
    <form method="post" action="tugaslogin.php">
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="password" name="password"></p>
        <p>Umur: <input type="number" name="umur"></p>
        <p><input type="submit" value="Login"></p>
    </form>
</body>
</html>