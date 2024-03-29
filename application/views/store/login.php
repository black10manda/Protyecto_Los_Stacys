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
	            </form><a href="<?php echo base_url('Home/registro'); ?>">Registrarse</a>
</div>
					
					


</div>
<?php }else{ ?>

<div class="super_container">
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/plantilla/images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Perfil de <?php echo $this->session->userdata("nombre")?></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php echo base_url(); ?>">Home</a></li>
									<li>Perfil</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="checkout">
		<div class="container">
			<div class="row">
				<a class="btn btn-info" href="<?php echo base_url('Home/logout'); ?>">Logout</a>
			</div>
							
			<div class="row">
				<div class="col-lg-12">
					<div class="billing">
						<div class="checkout_title">Detalles de usuario</div>
						<div class="checkout_form_container">
							
							<form action="" id="checkout_form">
		

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

			</div>
		</div>
	</div>
</div>

<?php  } ?>