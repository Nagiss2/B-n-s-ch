
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/account/list_account.php');
			break;
		case 2: //Xử lý xóa
			include('pages/account/delete_account.php');
			break;
		case 3: //Cập nhật
			include('pages/account/edit_account.php');
			break;
		case 4: //Thêm mới
			include('pages/account/add_account.php');
			break;
	}
?>