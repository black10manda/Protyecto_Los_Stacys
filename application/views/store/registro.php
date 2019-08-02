<div class="checkout">
		<div class="container">
			<div class="row">
				<a class="btn btn-info" href="<?php echo base_url('Home/logout'); ?>">Logout</a>
			</div>
					<?php if($this->session->flashdata("err")):?>
	              <div class="alert alert-danger">
	                <p><?php echo $this->session->flashdata("err")?></p>
	              </div>
	            <?php endif; ?>		
			<div class="row">
				<div class="col-lg-12">
					<div class="billing">
						<div class="checkout_title">Registro de usuario</div>
						<div class="checkout_form_container">
							
							<form action="<?php echo base_url('Home/adduser') ?>" method="post" id="checkout_form">
		

								<input type="hidden" value="0" name="idcliente">
								<input type="email" class="checkout_input" placeholder="Email" value="" name="num_documento" required="">
								<input type="text" class="checkout_input" placeholder="Contaseña" value="" name="pass" required="">
								<input type="text" class="checkout_input" placeholder="Nombre" required="required" name="nombre" value="" >
								<input name="telefono" type="text" class="checkout_input" placeholder="Telefono" required="required" value="">
								<input name="direccion" type="text" class="checkout_input" placeholder="Direccion" required="required" value="">
								<button type="submit" class="btn btn-success">Registrar</button>
                    			
								
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>