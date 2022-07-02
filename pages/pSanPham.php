<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Filter -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Loại sách</h3>
					<div class="checkbox-filter" id="loaiSach">
						
						<?php include './pages-handle/xlCheckbox.php'; ?>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('VH');								
								echo '<input type="checkbox" id="category-1"' . $result;								
							?>
							<label for="category-1">
								<span></span>
								Văn học
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('KT');
								echo '<input type="checkbox" id="category-2"' . $result;
							?>
							<label for="category-2">
								<span></span>
								Kinh tế
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('TL-KNS');
								echo '<input type="checkbox" id="category-3"' . $result;
							?>	
							<label for="category-3">
								<span></span>
								Tâm lý - Kỹ năng sống
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('TN');
								echo '<input type="checkbox" id="category-4"' . $result;
							?>								
							<label for="category-4">
								<span></span>
								Thiếu nhi
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('NDC');
								echo '<input type="checkbox" id="category-5"' . $result;
							?>
							<label for="category-5">
								<span></span>
								Nuôi dạy con
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_LoaiSach('HNN');
								echo '<input type="checkbox" id="category-6"' . $result;
							?>							
							<label for="category-6">
								<span></span>
								Học ngoại ngữ
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Nhà xuất bản</h3>
					<div class="checkbox-filter" id="nhaXuatBan">

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('1');
								echo '<input type="checkbox" id="brand-1"' . $result;
							?>								
							<label for="brand-1">
								<span></span>
								Thái Hà Books
							</label>
						</div>
						
						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('2');
								echo '<input type="checkbox" id="brand-2"' . $result;
							?>
							<label for="brand-2">
								<span></span>
								Phương Nam Book
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('3');
								echo '<input type="checkbox" id="brand-3"' . $result;
							?>
							<label for="brand-3">
								<span></span>
								NXB Văn Học
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('4');
								echo '<input type="checkbox" id="brand-4"' . $result;
							?>
							<label for="brand-4">
								<span></span>
								NXB Tổng Hợp TPHCM
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('5');
								echo '<input type="checkbox" id="brand-5"' . $result;
							?>
							<label for="brand-5">
								<span></span>
								NXB Trẻ
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('6');
								echo '<input type="checkbox" id="brand-6"' . $result;
							?>
							<label for="brand-6">
								<span></span>
								NXB Thế Giới
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('7');
								echo '<input type="checkbox" id="brand-7"' . $result;
							?>
							<label for="brand-7">
								<span></span>
								NXB Lao Động
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('8');
								echo '<input type="checkbox" id="brand-8"' . $result;
							?>
							<label for="brand-8">
								<span></span>
								NXB Kinh Tế
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('9');
								echo '<input type="checkbox" id="brand-9"' . $result;
							?>
							<label for="brand-9">
								<span></span>
								NXB Kim Đồng
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('10');
								echo '<input type="checkbox" id="brand-10"' . $result;
							?>
							<label for="brand-10">
								<span></span>
								NXB Hội Nhà Văn
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('11');
								echo '<input type="checkbox" id="brand-11"' . $result;
							?>
							<label for="brand-11">
								<span></span>
								NXB Dân Trí
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('12');
								echo '<input type="checkbox" id="brand-12"' . $result;
							?>
							<label for="brand-12">
								<span></span>
								NXB Nhã Nam
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('13');
								echo '<input type="checkbox" id="brand-13"' . $result;
							?>
							<label for="brand-13">
								<span></span>
								First News
							</label>
						</div>

						<div class="input-checkbox">
							<?php
								$result = isChecked_NXB('14');
								echo '<input type="checkbox" id="brand-14"' . $result;
							?>
							<label for="brand-14">
								<span></span>
								Cambridge University
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Danh sách bán chạy</h3>
					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product01.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product02.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product03.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /Filter -->

			<!-- Danh sách sản phẩm -->
			<div id="store" class="col-md-9" id="soTrang">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Sắp xếp:
							<select class="input-select">
								<option value="0">Giá tăng dần</option>
								<option value="1">Giá giảm dần</option>
							</select>
						</label>

						<label>
							Show:
							<select class="input-select">
								<option value="0">20</option>
								<option value="1">50</option>
							</select>
						</label>
					</div>
					<ul class="store-grid">
						<li class="active"><i class="fa fa-th"></i></li>
						<li><a href="#"><i class="fa fa-th-list"></i></a></li>
					</ul>
				</div>
				<!-- /store top filter -->

				<!-- Danh sách sản phẩm -->
				<div class="row" id="dsSanPham">
					
					<?php 
						include '.\pages-handle\xlHienThiSanPham.php';
					?>					

				</div>
				<!-- /Danh sách sản phẩm -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<ul class="store-pagination">
						<?php
							include '.\templates\mauSoTrang.php';
						?>
					</ul>
				</div>
				<!-- /store bottom filter -->
			</div>
			<!-- /Danh sách sản phẩm -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
