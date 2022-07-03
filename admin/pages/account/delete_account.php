<?php
	// include("../../../DBConnect.php");
	$url = 'index.php?act=1&sub=1';
	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$sql = "DELETE FROM `ebook`.`user` WHERE `User_Id` = '$id'";
		DataProvider::ExecuteQuery($sql);
		echo "<script type='text/javascript'>alert('Xoá tài khoản thành công');</script>";
		DataProvider::ChangeURL($url);
    }
    // DataProvider::ChangeURL('../../ebook/admin/index.php?act=1');
?>
