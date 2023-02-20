<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    body{
  background-image: url("pic/bg.jpeg");
  text-align: center;
    }

    div{
      text-align: center;
        border-style: solid ;
        border: 2px solid black;
        border-radius: 40px;
        width: 390px;
        height: 600px;
        margin: auto;
        background-color: whitesmoke;
    }

    .form{
      text-align: center;
        border-style: solid ;
        border: 2px solid black;
        border-radius: 40px;
        width: 300px;
        height: 240px;
        padding: 10px;
        margin: auto;
        background-color: aquamarine;
    }
    

    .button {
  background-color: #ED8D02;
  border: 2px solid black;
  border-radius: 50px;
  color: white;
  padding: 5px 10px;
  margin: 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
}

.logout{
  background-color: white;
  border: 2px solid black;
  border-radius: 30px;
  color: black;
  margin: 30px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
}
</style>
<body>
 <div>
   <section>
       <img src="logo_smkn1.png" width="150" height="150" style="border-radius: 50%;"/>
          <h1>WEB PEMBAYARAN SPP <br> SMKN 1 BINJAI</h1>
      <div class="form">
                   <a href="input_spp.php" class="button">INPUT SPP</a><br></br>
                   <a href="inputkelas.php" class="button">INPUT KELAS</a><br></br>
                   <a href="inputsiswa.php" class="button">INPUT SISWA</a><br></br>
                   <a href="inputpembayaran.php" class="button">INPUT PEMBAYARAN</a><br></br>
                   <a href="inputpetugas.php" class="button">INPUT PETUGAS</a><br></br>
                   <a href="logout.php" class="logout" onclick="return confirm('Yakin akan logout!')">Logout</a><br></br>
                   </div>
       
   </section>
   
</div>
</body>
</html>