<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Login</title>
</head>

<style>

input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin-left: 10px;
  display: inline-block ;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 60%;
  padding: 12px 20px;
  margin-left: 11px;
  display: inline-block ;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

body{
        background-image: url("pic/bg.jpeg");
       }

    form{
        text-align: center;
        border-style: solid ;
        border: 2px solid black;
        border-radius: 30px;
        width: 430px;
        height: 430px;
        margin: auto;
        background-color: white;
    }

    input[type=submit], select {
  background-color: #F0FFFF;
  border: 2px solid black;
  border-radius: 30px;
  color: black;
  padding: 5px 30px;
  margin-top: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
}
</style>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
          echo "<center><h2 style='color:red';>Username atau password salah</h2>";
        }
    ?>



<form method="post" action="cek_login.php">
   <img src="logo_smkn1.png" width="130" height="130" margin-top="40px" style="border-radius: 50%;"/>
    <h1>Login</h1>
        <p>Username:<input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p>Password:<input type="password" name="password" value="" placeholder="Password"></p>
        <a class="submit"><input type="submit" name="commit" value="Login"></a>
    </form>
</body>
</html> 




