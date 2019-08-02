<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/plantilla/images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Checkout</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="index.html">Carrito</a></li>
									<li>Shopping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php if (!$this->session->userdata("login")) {?>
<style type="text/css">
	
	html,body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  padding-top: 450px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>


	

<div class="container  ">
	
<div class="form-signin ">
	<p class="login-box-msg" >Introduzca sus datos de ingreso</p>
	            <?php if($this->session->flashdata("err")):?>
	              <div class="alert alert-danger">
	                <p><?php echo $this->session->flashdata("err")?></p>
	              </div>
	            <?php endif; ?>
				<form class="form-control"  action="<?php echo base_url();?>Home/site" method="post">
	                <div class="form-group has-feedback">
	                    <input type="text" class="form-control" placeholder="Usuario" name="username">
	                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
	                </div>
	                <div class="form-group has-feedback">
	                    <input type="password" class="form-control" placeholder="Password" name="password">
	                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                </div>
	                <div class="row">
	                    <div class="col-xs-12">
	                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	                    </div>
	                    <!-- /.col -->
	                </div>
	            </form>
</div>
					


</div>
<?php }else{ ?>


	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Details -->
				<div class="col-lg-6">
					<div class="billing">
						<div class="checkout_title">Detallas de contacto</div>
						<div class="checkout_form_container">
							<form action="#" id="checkout_form">
								
								<input type="hidden" value="<?php echo $this->session->userdata("id")?>" name="idcliente">
								<input type="hidden" value="<?php echo $this->session->userdata("num_documento")?>" name="num_documento">
								<input type="text" class="checkout_input" placeholder="Name" required="required" name="nombre" value="<?php echo $this->session->userdata("nombre")?>" >
								<input name="telefono" type="text" class="checkout_input" placeholder="Telefono" required="required" value="<?php echo $this->session->userdata("telefono")?>">
								<input name="direccion" type="text" class="checkout_input" placeholder="Telefono" required="required" value="<?php echo $this->session->userdata("direccion")?>">
								<h4>Correo: <?php echo $this->session->userdata("num_documento")?></h4>
                    			
								
							</form>
						</div>
					</div>
				</div>

				<!-- Cart Details -->
				<div class="col-lg-6">
					<div class="cart_details">
						<div class="checkout_title">cart total</div>
						<div class="cart_total">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Product</div>
									<div class="cart_total_price ml-auto">Total</div>
								</li>
								<?php if ($cart =$this->cart->contents()):?>
								<?php foreach($cart as $item): ?>
								<li  class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title"><?php echo $item['name']; ?> x <?php  echo $item['qty'];?></div>
									<div class="cart_total_price ml-auto">$ <?php echo $item['price']* $item['qty']; ?> </div>
								</li>
								<?php 	endforeach;?>
								<?php endif; ?>
								
								<li class="d-flex flex-row align-items-start justify-content-start total_row">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_price ml-auto">$ <?php echo $cart=$this->cart->total(); ?></div>
								</li>
							</ul>
						</div>
						<div class="payment_options">
							<div>
								<input type="radio" id="radio_payment_1" name="regular_radio" class="regular_radio" checked>
								<label for="radio_payment_1" >Pago en Efectivo</label>
							</div>
							<a href="<?php echo base_url('Home/compra') ?>"  class="btn cart_total_button">Comprar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  } ?>