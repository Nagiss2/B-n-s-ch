<?php						
				
				$current_page = $_SESSION['current_page'];
				$total_page = $_SESSION['total_page'];
				$href = $_SESSION['href'];	

				if($current_page == 1)
					echo '<li><i class="fa fa-angle-left"></i></li>';
				else
					echo '<li><a href="' . $href .  ($current_page - 1) . '"><i class="fa fa-angle-left"></i></a></li>';
				
				for ($i = 1; $i <= $total_page; $i++){								
					if ($i == $current_page){
						
						echo '<li class="active">' . $i . '</li>';
					}
					else{
						echo '<li><a href="' . $href . $i . '">' . $i . '</a></li>';
					}
				}

				if($current_page == $total_page)
					echo '<li><i class="fa fa-angle-right"></i></li>';
				else
					echo '<li><a href="' . $href .  ($current_page + 1) . '"><i class="fa fa-angle-right"></i></a></li>';
?>