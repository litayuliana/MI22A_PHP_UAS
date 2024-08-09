<?php
/**
 * NIM : 2257401018
 * NAMA : LITA YULIANA
 * KELAS : MI22A
 */
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
  body{
    background-image: linear-gradient(to bottom, #0a4655, #a8ebe7);
    background-size: 100% 100%;
    background-attachment: fixed;
    }
  .main {
        display: flex;
    }
    /*bagian login*/
    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 300px;
        background-color:rgb(211, 230, 243);
        box-shadow: 0 0 10px rgba(255,255,255,.3);
        border: 15px ;
    }
    .container h1{
        text-align: center;
        margin-bottom: 20px;
        color: #333333;
    }
    .container label{
        margin-bottom: 6px;
        color: #555555;
    }
    .container form input{
        width: 90%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #dddddd;
        border-radius: 4px;
        font-size: 15px;
    }
    .container form button{
        width: 100%;
        background-color: darkturquoise;
        color: white;
        border: none;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }   
    .container form button[type="submit"]:hover {
  background-color: blue;
    }
    </style>

</head>
    <body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>Form Login</h1>

                <form action="" method="POST">
                    <label for="username">Username :</label><br>
                    <input type="text" name="username" id="username"><br><br>
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <button type="submit" name="login">Login</button><br><br>
                </form>

                <p id="error">
                    <?php 
                    if (isset($_SESSION['error'])){
                        echo "<span style='color:red'>".$_SESSION['error']."</label>";
                        unset($_SESSION['error']);
                    }
                    ?>
                </p>

    <?php 
      if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username, password FROM user WHERE username = '$username' AND password = sha1('$password');";

        $koneksi = mysqli_connect("localhost", "root", "", "uas_litayuliana");
        $result = mysqli_query($koneksi, $sql);

        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['user'] = $username;
            header('location: admin.php');
        } else {
            $_SESSION['error'] = "Username / Password tidak sesuai";
            header('location: login.php');
        }
    }
    ?>
            </div>
        </div>     
    </div>
   </body>
</html>