<?php
	session_start();
	include("../../../DBConnect.php");	

	if(isset($_REQUEST["id"]) == true)
	{
		$id = $_POST["id"];
		$firstname = $_POST["txtFirst_name"];
		$lastname = $_POST["txtLast_name"];
        $email = $_POST["txtEmail"];
		$phone = $_POST["txtPhonenumber"];
		$address = $_POST["txtAddress"];
        //$password = $_POST["txtPassword"];
		$role = $_POST["RoleSelect"];

		$sql = "UPDATE `ebook`.`user` 
		SET `User_Role`= $role,
			`First_Name` = '$firstname',
			`Last_Name`= '$lastname',  
			`Phonenumber`='$phone', 
			`Address`='$address',
		WHERE User_Id = $id";
		

		$url = '../../index.php?act=1&sub=1';
		#Thực hiện câu truy vấn để UPDATE dữ liệu mới
		$result = Insert($sql);
		if($result == true){
			echo "<script type='text/javascript'>alert('Sửa tài khoản thành công');</script>";
			DataProvider::ChangeURL($url);
		}
		else{
			echo "<script type='text/javascript'>alert('Đã xảy ra lỗi khi sửa tài khoản');</script>";
			DataProvider::ChangeURL($url);
		}
	}
?>
