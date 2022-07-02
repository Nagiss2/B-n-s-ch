<?php

	$sql = "SELECT * FROM user WHERE Email = '" . $_SESSION["email"] . "'";
	$result = LoadData($sql);
	
?>

<!-- SECTION -->
<div class="section" id="sectionThanhToan">
	<!-- container -->
	<div class="container">

		<form action="./pages-handle/xlThanhToan.php" method="POST">
			<!-- row -->
			<div class="row">

				<?php 
					if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 )
						echo '<h2 class="notification-error"> BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG </h2>';
					else{
					
				?>
				<!-- Chi tiết thông tin thanh toán -->
				<div class="col-md-7">

					<?php 
						if(count($result) > 0){
							foreach($result as $row){																								
					?>
			
					<div class="billing-details">

						<div class="section-title">
							<h3 class="title">Địa chỉ thanh toán</h3>
						</div>

						<div class="form-group">
							<input class="input-ThanhToan" type="text" id="name" name="name" placeholder="Họ tên" value="<?php echo $row['Last_Name'] . ' ' . $row['First_Name'] ?>" required>
						</div>

						<div class="form-group">
							<input class="input-ThanhToan" type="text" id="address" name="address" placeholder="Địa chỉ" value="<?php echo $row['Address'] ?>" required>
						</div>

						<div class="form-group">
							<input class="input-ThanhToan" type="number" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $row['Phonenumber'] ?>" required>
						</div>	

						<div class="form-group">
							<input class="input-ThanhToan" type="email" id="email" name="email" placeholder="Email" value="<?php echo $row['Email'] ?>" required>
						</div>

						<?php }} ?>

					</div>
					
				</div>
				<!-- /Chi tiết thông tin thanh toán -->
		

				<!-- Chi tiết đơn hàng -->
				<div class="col-md-5 order-details">			
				
					<div class="section-title text-center">
						<h3 class="title">Đơn hàng</h3>
					</div>

					<div class="order-summary">
						<div class="order-col">
							<div><strong>Sản phẩm</strong></div>
							<div><strong>Tổng</strong></div>
						</div>

						<?php
							if(isset($_SESSION['cart'])){
								foreach ($_SESSION['cart'] as $key => $value){
									echo '<div class="order-products">
											<div class="order-col">
												<div>' . $value['quantity'] 
													. ' x ' . '<a href="index.php?page=ChiTiet&id=' . $key . '">' . $value['name'] . '</a>
												</div>
												<div>' . number_format($value['price'] * $value['quantity'], 0, '.', '.') . ' ₫'
													. '</div> 
											</div>
										</div>';
								}
							}
						?>
		
						<div class="order-col">
							<div>Phí vận chuyển</div>
							<div><strong>Miễn phí</strong></div>
						</div>
						<div class="order-col">
							<div><strong>Tổng tiền</strong></div>
							<div><strong class="order-total">  
								<?php 
									if(isset($_SESSION['subTotal']))
										echo number_format($_SESSION['subTotal'], 0, '.', '.') . ' ₫';                                                                                    
								?> 
								</strong>
							</div>
						</div>
					</div>

					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1" checked>
							<label for="payment-1">
								<span></span>
								Thanh toán khi nhận hàng
							</label>					
						</div>	
					</div>
					<button type="submit" class="primary-btn checkout-submit">Thanh toán</button>
				</div>
				<!-- /Chi tiết đơn hàng -->
				<?php } ?>
			</div>
			<!-- /row -->
		</form>
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->