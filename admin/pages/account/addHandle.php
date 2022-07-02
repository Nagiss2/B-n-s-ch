<?php
	session_start();
	include("../../../DBConnect.php");

	if(isset($_REQUEST["submit"]))
	{       
		$email = $_POST["txtEmail"];

		#Kiểm tra Email đã tồn tại hay chưa
        $sql = "SELECT * FROM user WHERE Email = '$email'";
		$result = LoadData($sql);
		$url = '../../index.php?act=1&sub=1';
		
		if(count($result) > 0){			
			echo "<script type='text/javascript'>alert('Email đã tồn tại');</script>";
            DataProvider::ChangeURL($url);
		}
		else{
			#Kiểm tra xem Email đã được xác minh hay chưa
            $sql = "SELECT * FROM user WHERE Email = '$email'";
            $result = LoadData($sql);
            if(count($result) > 0){
				echo "<script type='text/javascript'>alert('Email đã tồn tại nhưng chưa xác minh');</script>";
            	DataProvider::ChangeURL($url);
			}
			else{
				$first_name = $_POST["txtFirstName"];
				$last_name = $_POST["txtLastName"];
				$phone = $_POST["txtPhonenumber"];
				$address = $_POST["txtAddress"];
				$pass = md5($_POST["txtPassword"]);
				$role = $_POST["RoleSelect"];					

					$sql = "INSERT INTO user (User_Role, Email, Password, Last_Name, First_Name, Address, Phonenumber)
						VALUES ($role, '$email', '$pass', '$last_name', '$first_name', '$address', '$phone')";
					$result = Insert($sql);
		
					if($result == true){
						echo "<script type='text/javascript'>alert('Thêm tài khoản thành công');</script>";
            			DataProvider::ChangeURL($url); 
					}				
					else{	
						echo "<script type='text/javascript'>alert('Thêm tài khoản thất bại');</script>";
            			DataProvider::ChangeURL($url);				
					}				
			}
			
		}
			
	}
		
?>
