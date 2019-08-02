
<div class="product">
	<div class="container">

	<div class="row product_row">

		<!-- Product Image -->
		<div class="col-lg-7">
			<div class="product_image">
				<div class="product_image_large"><img  style="" src="<?php echo base_url();?>assets/uploads/<?php echo $producto->img;?>" alt=""></div>
			</div>
		</div>

		<!-- Product Content -->
		<div class="col-lg-5">
			<div class="product_content">
				<div class="product_name"><?php echo $producto->nombre; ?></div>
				<div class="product_price">$<?php echo $producto->precio; ?></div>
				<div class="rating rating_5" data-rating="4">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<!-- In Stock -->
				
				<div class="product_text">
					<p><?php echo $producto->descripcion; ?>.</p>
				</div>
				<!-- Product Quantity -->
				<div class="product_quantity_container">
					<span>Cantidad</span>
					<?=form_open('Home/add'); ?>
					<div class="product_quantity clearfix">
						<input name="qty" type="number" pattern="[0-9]*" value="1">
					</div>
					<div>
						
							<?=form_hidden('id',$producto->id); ?>
							<?=form_hidden('name',$producto->nombre); ?>
							<?=form_hidden('price',$producto->precio); ?>
							<?=form_hidden('img',$producto->img); ?>
							<?php 
								$btn=array(
									'class'=>'button cart_button',
									'name'=> '+ Agregar',
									'value'=>'+ Agregar'

								);
							?>
							<?=form_submit($btn); ?>
						<?=form_close(); ?>
					</div>
				</div>
				<!-- Product Size -->
				
			</div>
		</div>
	</div>
</div>
