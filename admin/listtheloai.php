<?php 
ob_start();
session_start();
if(!isset ($_SESSION["idUser"]) && $_SESSION["idGroup"]!=1 ){
	header("location:../index.php");
}

require "../lib/dbCon.php";
require "../lib/quantri.php";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title><link rel="stylesheet" type="text/css" href="layout.css"/>
</head>

<body>
<table width="1000" border="0" align="center" cellspacing="0" cellpadding="0">
  <tbody style="text-align: center">
    <tr id="HangTieuDe">
      <td >TRANG QUAN TRI
		  
		  <div style="width: 200px; float: right">
			
				Chao anh <?php echo $_SESSION["HoTen"] ?>
			
			</div>
		  
		</td>
		
    </tr>
    <tr id="Hang2">
      <td><?php require "menu.php"; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
	  <table width="600" border="1">
  <tbody>
    <tr>
    <h1>Danh Sach The Loai</h1>
    </tr>
    <tr>
      <td>idTL</td>
      <td>TenTL</td>
      <td>TenTL_KhongDau</td>
      <td>ThuTu</td>
      <td>AnHien</td>
      <td><a href="themTheLoai.php">Them</a></td>
    </tr>
	  <tr>
      <td>{idTL}</td>
      <td>{TenTL}</td>
      <td>{TenTL_KhongDau}</td>
      <td>{ThuTu}</td>
      <td>{AnHien}</td>
		  <td><a href="SuaTheLoai.php?idTL={idTL}">Sua</a>-<a href = "xoaTheLoai.php?idTL={idTL}">Xoa</a></td>
    </tr>
  </tbody>
</table>

  </tbody>
</table>
</body>
</html>
