
<?php
	if(isset($_GET['sub']) == false)
		$sub = 1;
	else
		$sub = $_GET['sub'];
	
	switch($sub)
	{
		case 1: //Liệt kê danh sách
			include('pages/publisher/list_publisher.php');
			break;
		case 2: //Xử lý xóa
			include('pages/publisher/delete_publisher.php');
			break;
		case 3: //Cập nhật
			include('pages/publisher/edit_publisher.php');
			break;
		case 4: //Thêm mới
			include('pages/publisher/add_publisher.php');
			break;
	}
?>