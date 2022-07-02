
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/category/list_category.php');
			break;
		case 2: //Xử lý xóa
			include('pages/category/delete_category.php');
			break;
		case 3: //Cập nhật
			include('pages/category/edit_category.php');
			break;
		case 4: //Thêm mới
			include('pages/category/add_category.php');
			break;
	}
?>