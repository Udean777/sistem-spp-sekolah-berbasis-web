<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input SPP</title>
</head>
<style>

input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block ;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

body{
        background-image: url("pic/bg.jpeg");
       }

    div{
        text-align: center;
        border-style: solid ;
        border: 2px solid black;
        border-radius: 30px;
        width: 500px;
        height: 400px;
        margin: auto;
        background-color: white;
    }

    .button {
  background-color: #F0FFFF;
  border: 2px solid black;
  border-radius: 30px;
  color: black;
  padding: 5px 10px;
  margin-top: 30px;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
}
</style>
<body>
    <div>
<form action="action-input-data.php" method="POST" name="form-input-data">
<h1>INPUT SPP</h1>    
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="10">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="white" size="4">Form Input Data Siswa</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID SPP / NIM</td>
            <td><input type="text" name="id_spp" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Tahun</td>
            <td><input type="text" name="tahun" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nominal</td>
            <td><input type="text" name="nomial" size="50" maxlength="30" /></td>
        </tr>
                <br>
        </tr>
    </table>
    <a href="" class="button">Kirim</a>
    <a href="home_admin.php" class="button" type="reset">Kembali</a>
</form>
</div>
</body>
</html>