<?php
//function TinMoiNHat_MotTin()
//{
//	$qr = " SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1 ";
//	return mysql_query($qr);
//}
 

function TinMoiNhat_MotTin(){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin 
  ORDER BY idTin DESC 
  LIMIT 0,1
 ";
 return mysqli_query($con,$qr);
}



function TinMoiNhat_BonTin(){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin 
  ORDER BY idTin DESC 
  LIMIT 1,4
 ";
 return mysqli_query($con,$qr);
}



function TinXemNhieuNhat(){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin 
  ORDER BY SoLanXem DESC 
  LIMIT 0,6
 ";
 return mysqli_query($con,$qr);
}


function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idLT = $idLT
  ORDER BY idTin DESC 
  LIMIT 0,1
 ";
 return mysqli_query($con,$qr);
}


function TinMoiNhat_TheoLoaiTin_BonTin($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idLT =$idLT
  ORDER BY idTin DESC 
  LIMIT 1,6
 ";
 return mysqli_query($con,$qr);
}

function TenLoaiTin($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT Ten FROM loaitin WHERE idLT =$idLT
 ";
	return mysqli_query($con,$qr);
}

function QuangCao($vitri){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM quangcao WHERE vitri = $vitri
 ";
	return mysqli_query($con,$qr);
}

function DanhSachTheLoai(){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM theloai
 ";
	return mysqli_query($con,$qr);
}

function DanhSachLoaiTin_Theo_TheLoai($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM loaitin WHERE idTL = $idLT
 ";
	return mysqli_query($con,$qr);
}


function TinMoi_BenTrai($idTL){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idTL = $idTL
  ORDER BY idTin DESC 
  LIMIT 0,1
 ";
 return mysqli_query($con,$qr);
	
}

function TinMoi_BenPhai($idTL){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idTL = $idTL
  ORDER BY idTin DESC 
  LIMIT 1,2
 ";
 return mysqli_query($con,$qr);
	
}

function TinTheoLoaiTin($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idLT = $idLT
  ORDER BY idTin DESC 
 ";
 return mysqli_query($con,$qr);	
}

function TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang ){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idLT = $idLT
  ORDER BY idTin DESC 
  LIMIT $from, $sotin1trang
 ";
 return mysqli_query($con,$qr);	
}

function breadCrumb($idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT TenTL, Ten FROM theloai, loaitin WHERE theloai.idTL=loaitin.idTL AND idLT = $idLT
   
 ";
 return mysqli_query($con,$qr);	
}

function ChiTietTin($idTin){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "
  SELECT * FROM tin WHERE idTin = $idTin

 ";
 return mysqli_query($con,$qr);		
}


function TinCungLoaiTin($idTin, $idLT){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "SELECT * FROM tin WHERE idTin<>$idTin AND idLT =$idLT ORDER BY RAND() LIMIT 0, 3";
	return mysqli_query($con,$qr);	
}


function CapNhatSoLanXemTin($idTin){
 $con = mysqli_connect('localhost', "root","","khoaphamtraining");
 $qr = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin = $idTin
 ";
 mysqli_query($con,$qr);	
}

function TimKiem($tukhoa){
	$con = mysqli_connect('localhost', "root", "", "khoaphamtraining");
	$qr = "SELECT * FROM tin WHERE TieuDe REGEXP '$tukhoa' ORDER BY idTin DESC
	"; //lấy ra những tin mà tiêu đề có chứa từ khóa
	remysqli_query($con,$qr);
}

?>