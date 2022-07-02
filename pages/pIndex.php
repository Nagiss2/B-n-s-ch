<div class="section">

		<!-- container -->
		<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/banner01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Quà tặng<br>Bất ngờ</h3>
								<a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/banner02.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Board Game</h3>
								<a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./images/banner03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Tiệc<br>Flash sale</h3>
								<a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Sản phẩm mới nhất -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm mới nhất</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Văn học</a></li>
									<li><a data-toggle="tab" href="#tab2">Kinh Tế</a></li>
									<li><a data-toggle="tab" href="#tab3">Tâm lý - Kỹ năng sống</a></li>
									<li><a data-toggle="tab" href="#tab4">Thiếu nhi</a></li>
									<li><a data-toggle="tab" href="#tab5">Nuôi dạy con</a></li>
									<li><a data-toggle="tab" href="#tab6">Học ngoại ngữ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->


					<!-- Lấy sản phẩm từ DB -->
					<?php
						$sql1 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id
								AND P.Category_Id = 'VH' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result1 = LoadData($sql1);
						
						$sql2 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id
								AND P.Category_Id = 'KT' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result2 = LoadData($sql2);	

						$sql3 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id 
								AND P.Category_Id = 'TL-KNS' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result3 = LoadData($sql3);	

						$sql4 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id
								AND P.Category_Id = 'TN' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result4 = LoadData($sql4);	

						$sql5 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id 
								AND P.Category_Id = 'NDC' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result5 = LoadData($sql5);	

						$sql6 = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM product P, category C, publishing_company PC 
								WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id
								AND P.Category_Id = 'HNN' ORDER BY P.Product_Id DESC LIMIT 0,10";
						$result6 = LoadData($sql6);	
					?>
				
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">

								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->										
										<?php foreach($result1 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>

								<div id="tab2" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->										
										<?php foreach($result2 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>

								<div id="tab3" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-3">
										<!-- product -->										
										<?php foreach($result3 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>

								<div id="tab4" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-4">
										<!-- product -->										
										<?php foreach($result4 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>

								<div id="tab5" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-5">
										<!-- product -->										
										<?php foreach($result5 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>

								<div id="tab6" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-6">
										<!-- product -->										
										<?php foreach($result6 as $row){
									
											include '.\templates\mauSanPhamMoiNhat.php';
										
										 }  ?>										
										<!-- /product -->
									</div>
									<div id="slick-nav-6" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Sản phẩm mới nhất -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- Sản phẩm bán chạy -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<?php
						$sql = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
								FROM purchasedetail DT, product P, category C, publishing_company PC 
								WHERE P.Product_Id = DT.Product_Id 
								AND P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id
								GROUP BY DT.Product_Id ORDER BY SUM(DT.Quantity) DESC LIMIT 10";
						$result = LoadData($sql);
					?>

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm bán chạy</h3>							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav">

									<?php 
										foreach($result as $row){								
											include '.\templates\mauSanPhamBanChay.php';
										}  
									?>
																			
									</div>
									<div id="slick-nav" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Sản phẩm bán chạy -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		<!-- /NEWSLETTER -->
		
</div>