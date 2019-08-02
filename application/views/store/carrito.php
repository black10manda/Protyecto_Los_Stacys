
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/plantilla/images/cart.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Carrito de compras</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php echo base_url();?>">Inicio</a></li>
									<li>Carrito de compras</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->

	<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_title">Tu Carrito de compras</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_bar d-flex flex-row align-items-center justify-content-start">
						<div class="cart_bar_title_name">Producto</div>
						<div class="cart_bar_title_content ml-auto">
							<div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
								<div class="cart_bar_title_price">Precio</div>
								<div class="cart_bar_title_quantity">Cantidad</div>
								<div class="cart_bar_title_total">Total</div>
								<div class="cart_bar_title_button"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_products">
						<ul>
							<?php if ($cart =$this->cart->contents()):?>
							<?php foreach($cart as $item): ?>
							<li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
								<!-- Product Image -->
								<div class="cart_product_image"><img style="height: 90px;" src="<?php echo base_url();?>assets/uploads/<?php echo $item['img']; ?>" alt=""></div>
								<!-- Product Name -->
								<div class="cart_product_name"><a href="<?php echo base_url();?>Home/producto/<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></div>
								<div class="cart_product_info ml-auto">
									<div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
										<!-- Product Price -->
										<div class="cart_product_price">$ <?php echo $item['price']; ?></div>
										<!-- Product Quantity -->
										<div class="cart_product_total">
											<div class="">
												<?php echo $item['qty']; ?>
												
											</div>
										</div>
										<!-- Products Total Price -->
										<div class="cart_product_total">$ <?php  echo $item['qty']*$item['price']; ?></div>
										<!-- Product Cart Trash Button -->
										<div class="cart_product_button">
											<a class="cart_product_remove" href="<?php echo base_url('Home/quitP/'); echo $item['rowid'];?>">
												<img src="<?php echo base_url();?>assets/plantilla/images/trash.png">
											</a>
										</div>
									</div>
								</div>
							</li>
						<?php 	endforeach;?>
						<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
						<a class="button_clear cart_button" href="<?php echo base_url('Home/clear') ?>"><p>Vaciar Carrito</p></a>
						<a  href="<?php echo base_url('Home/store'); ?>" class="button_update cart_button_2 ml-md-auto"><strong style="text-align: justify-all;">Continua Comprando</strong></a>
					</div>
				</div>
			</div>
			<div class="row cart_extra">
				<!-- Cart Coupon -->
				<div class="col-lg-6">
					<div class="cart_coupon">
						<div class="cart_title"><p>Gracias por comprar con nosotros</p></div>
						
					</div>
				</div>
				<!-- Cart Total -->
				<div class="col-lg-5 offset-lg-1">
					<div class="cart_total">
						<div class="cart_title">Total del Carrito</div>
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Total</div>
								<div class="cart_total_price ml-auto">$ <?php echo $cart=$this->cart->total(); ?></div>
							</li>
						</ul>
						<a href="<?php  echo base_url('Home/checkout') ?>"  class="btn cart_total_button">Continua</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	
	
