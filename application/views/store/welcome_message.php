

<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/plantilla/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Tienda de Regalos</div>
							<div class="home_slider_title">Gifts of Love</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/plantilla/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/plantilla/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/plantilla/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src=" <?php echo base_url();?>assets/plantilla/images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
									<li class="home_slider_custom_dot">04.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>



<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Solo lo mejor</div>
						<div class="section_title">Productos</div>
					</div>
				</div>
			</div>
			<div class="row products_container">
				  <?php if(!empty($productos)): $cont=1;?>
                    <?php foreach($productos as $producto):
                    	if($cont<=3):?>
						<!-- Product -->
						<div class="col-lg-4 product_col">
							<div class="product">
								<div class="product_image">
									<img src=" <?php echo base_url('assets/uploads/').$producto['img']; ?>" alt="">
								</div>
								<div class="rating rating_5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>

								</div>
								<div class="product_content clearfix">
									<div class="product_info">
										<div class="product_name"><a href="<?php echo base_url();?>Home/producto/<?php echo $producto['id']; ?>"><?php echo $producto['nombre'];?></a></div>
										<div class="product_price">$ <?php echo $producto['precio'];?></div>
									</div>
									<div class="product_options">
										<div class="product_buy product_option">
											<?=form_open('Home/add'); ?>
											<?=form_hidden('id',$producto['id']); ?>
											<?=form_hidden('name',$producto['nombre']); ?>
											<?=form_hidden('price',$producto['precio']); ?>
											<?=form_hidden('img',$producto['img']); ?>
											<?=form_hidden('qty','1'); ?>
											<img src=" <?php echo base_url();?>assets/plantilla/images/shopping-bag-white.svg" alt="<?php echo $producto['nombre'];?>">
											<?php 
												$btn=array(
													'class'=>'product_buy product_option',
													'name'=> 'enviar'

												);
											?>
											<?=form_submit($btn); ?>
											<?=form_close(); ?>
											

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php $cont++; endif;
							endforeach;?>
                   <?php endif;?>
				

			</div>
		</div>
	</div-->