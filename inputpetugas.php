<html>
<head>
    <title>Form Input Data </title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
        
  input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block ;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 40%;
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

</head>
<body>
   <div>
    <h1>INPUT PETUGAS</h1>
<form action="action-input-data.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="10">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="white" size="4">Form Input Data Siswa</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID PETUGAS</td>
            <td><input type="text" name="id_spp" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Username</td>
            <td><input type="text" name="tahun" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>password</td>
            <td><input type="password" name="password" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama Petugas</td>
            <td><input type="text" name="nama_petugas" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Level</td>
            <td><input type="text" name="level" size="50" maxlength="30" /></td>
        </tr>
    </table>
    <a href="" class="button">Kirim</a>
    <a href="home_admin.php" class="button" type="reset">Kembali</a>
</form>
</div>
</body>
</html>
