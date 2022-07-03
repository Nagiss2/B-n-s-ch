<?php
	include("../../../DBConnect.php");


	if(isset($_POST["txtSKU"]) == true)
	{
        $name =$_POST["txtProduct_Name"];
        $catid =$_POST["txtCat_Id"];
        $sku =$_POST["txtSKU"];
        $publish =$_POST["txtPublishingCo_Id"];
        $author =$_POST["txtAuthor"];
        $price =$_POST["txtPrice"];
        $quantity =$_POST["txtQuantity"];
        $date =$_POST["txtDate"];
		$description = $_POST["txtDecription"];

		var_dump($_FILES);
		// move_uploaded_file($_FILES['myfile']['tmp_name'],'../../../images/'.$_FILES['myfile']['name']);
		$_FILES['myfile']['name'] = $sku.".jpg";
		move_uploaded_file($_FILES['myfile']['tmp_name'],'../../../images/'.$_FILES['myfile']['name']);
		//$image= $_FILES['myfile']['txtSKU'];
		$image= '.\\\\images\\\\'.$_FILES['myfile']['name'];
		echo $image;
		// if($image != null)
		// 		{
		// 		$path = "../../../images/";
		// 		$tmp_name = $_FILES['myfile']['tmp_name'];
		// 		$image = $_FILES['myfile']['txtSKU'];

		// 		move_uploaded_file($tmp_name,$path.$image);
				
		// 		}
        // $avatar =$_POST["txtAvatar"];
		$sql = "SELECT * FROM product WHERE SKU='$sku' ";
		// $bang=DataProvider::ExecuteQuery($ktsql);
		$bang=LoadData($sql);
		
		// $dong=mysqli_num_rows($bang);
		if(count($bang) != 0)
		{
			echo "<script type='text/javascript'>alert('Trùng dữ liệu! thêm sản phẩm không thành công');</script>";
			DataProvider::ChangeURL('../../index.php?act=4');
		}
		else
		{
			$insertsql = "INSERT INTO `ebook`.`product`(`Category_Id`, `SKU`, `Name` , `Publishing_Company_Id`, `Author`, `Price`, `Quantity`, `Description`, `Date`, `Avatar`)
					VALUES ('$catid','$sku','$name','$publish','$author','$price','$quantity','$description','$date','$image')";
			DataProvider::ExecuteQuery($insertsql);
		}
		
			
	}
	//DataProvider::ChangeURL('../../index.php?act=4');
?>
