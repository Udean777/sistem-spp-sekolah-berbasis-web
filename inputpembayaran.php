<html>
<head>
    <title>Form Input Data </title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
body{
  background-image: url("pic/bg.jpeg");
}

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block ;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

div{
        text-align: center;
        border-style: solid ;
        border: 2px solid black;
        border-radius: 30px;
        width: 500px;
        height: 600px;
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

</head>
<body>
<div>
    <h1>INPUT PEMBAYARAN</h1>
<form action="action-input-data.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="white" size="4">Form Input Data Siswa</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID Pembayaran</td>
            <td><input type="text" name="id_pembayaran" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Id Petugas</td>
            <td><input type="text" name="id_petugas" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nisn</td>
            <td><input type="text" name="Nisn" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Tanggal Pembayaran</td>
            <td><input type="text" name="tgl_bayar" size="20" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Bulan Pembayaran</td>
            <td><input type="text" name="bulan_dibayar" size="20" maxlength="12" /></td>
        </tr> 
         <tr height="46">
            <td> </td>
            <td>Tahun Pembayaran</td>
            <td><input type="text" name="bulan_dibayar" size="20" maxlength="12" /></td>
        </tr>
          <tr height="46">
            <td> </td>
            <td>Id Spp</td>
            <td><input type="text" name="tahun_dibayar" size="20" maxlength="12" /></td>
        </tr> 
         <tr height="46">
            <td> </td>
            <td>Jumlah Pembayaran</td>
            <td><input type="text" name="id_spp" size="20" maxlength="12" /></td>
        </tr> 
    </table>
    <a href="" class="button">Kirim</a>
    <a href="home_admin.php" class="button" type="reset">Kembali</a>
                
</form>
</div>
</body>
</html>