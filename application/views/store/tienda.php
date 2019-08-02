<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/plantilla/images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Tienda</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Tienda</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>


<div class="products">


		<!-- 
		Sidebar Right 
		<div class="sidebar_right clearfix">

			
			<div class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
				<div class="sidebar_promo_image" style="background-image: url(<?php echo base_url('assets/plantilla/');?>images/sidebar_promo_1.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>

			
			<div class="sidebar_promo_2 sidebar_promo">
				<div class="sidebar_promo_image" style="background-image: url(<?php echo base_url('assets/plantilla/');?>images/sidebar_promo_2.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>
		</div>
				-->


		<div class="container">
			
			
			<div class="row products_container">

				<div class="col">
					
					<!-- Products -->

					<div class="product_grid">
					<?php if(!empty($productos)):?>
                    <?php foreach($productos as $producto): ?>
						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="<?php echo base_url('assets/uploads/').$producto['img']; ?>" alt=""></div>
							<div class="rating rating_5" data-rating="4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product_content clearfix">
								<div class="product_info">
									<div class="product_name"><a href="<?php echo base_url();?>Home/producto/<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></a></div>
									<div class="product_price">$<?php echo $producto['precio']; ?></div>
								</div>
								<div class="product_options">
									<div class="product_buy product_option"><?=form_open('Home/add'); ?>
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
											<?=form_close(); ?></div>
								</div>
							</div>
						</div>

					<?php endforeach;?>
                   <?php endif;?>

					</div>
				</div>
					
			</div>

			

		</div>


	</div>