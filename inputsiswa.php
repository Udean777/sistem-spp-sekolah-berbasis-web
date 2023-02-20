<html>
<head>
    <title>Form Input Data </title>
    </head>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}

  input[type=text], select {
  width: 80%;
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
    height: 420px;
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
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
}
</style>
<body>
<div>
    <h1>INPUT SISWA</h1>
<form action="action-input-data.php" method="POST" name="form-input-data">
    <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="20">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="white" size="4">Form Input Data Siswa</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID Siswa / NIM</td>
            <td><input type="text" name="id_mahasiswa" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jurusan</td>
            <td><select type="text" name="jurusan">
                    <option value="-">- Pilih Jurusan -
                    <option value="XII RPL 1">XII RPL 1
                    <option value="XII RPL 2">XII RPL 2
                    <option value="Multimedia">XII Multimedia
                    <option value="UPW">XII UPW
                    <option value="OTKP 1">XII OTKP 1
                    <option value="OTKP 2">XII OTKP 2
                    <option value="BDP 1">XII BDP 1
                    <option value="BDP 2">XII BDP 2
                    <option value="Perbankan">XII Perbankan
                    <option value="AKL">XII AKL
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>No. Telp</td>
            <td><input type="text" name="telepon" size="20" maxlength="12" /></td>
        </tr>
       <center>
        <bottom></div>
            </div>
    </table>
    <a href="" class="button">Kirim</a>
    <a href="home_admin.php" class="button" type="reset">Kembali</a>
                
</form>
</div>
</body>
</html>