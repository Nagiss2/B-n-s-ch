<?php
	// include("../../../DBConnect.php");
	
	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$sql = "DELETE FROM `ebook`.`user` WHERE `User_Id` = '$id'";
		DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL('../../ebook/admin/index.php?act=1');
?>
