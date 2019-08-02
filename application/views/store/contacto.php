	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/plantilla/images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Contacto</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php base_url(); ?>">Home</a></li>
									<li>Contacto</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d937.0941454755621!2d-100.72235491195369!3d20.03465865910376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cd66e108c49d9%3A0x510d23ea21a5131c!2sJos%C3%A9+Mar%C3%ADa+Morelos+486%2C+Zona+Centro%2C+38600+Ac%C3%A1mbaro%2C+Gto.!5e0!3m2!1ses!2smx!4v1564766462983!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">Mandanos un mensaje</div>
						<div class="review_form_content">
							<form method="post" action="<?php echo base_url('Home/envioC'); ?>" id="review_form" class="review_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input name="nombre" type="text" class="review_form_input" placeholder="Name" required="required">
									<input name="correo" type="email" class="review_form_input" placeholder="E-mail" required="required">
									<input name="asunto" type="text" class="review_form_input" placeholder="Subject">
								</div>
								<textarea name="mensaje" class="review_form_text" name="review_form_text" placeholder="Message"></textarea>
								<button type="submit" class="review_form_button">Enviar Mensaje</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="contact_text">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-5">

					<div class="contact_info">
						<div class="contact_title">contact info</div>
						<div class="contact_info_content">
							<ul>
								<li>
									<div class="contact_info_icon"><img src="<?php echo base_url();?>assets/plantilla/images/contact_info_1.png" alt=""></div>
									<div class="contact_info_text">Morelos #1130 </div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="<?php echo base_url();?>assets/plantilla/images/contact_info_2.png" alt=""></div>
									<div class="contact_info_text">giftsoflove@gmail.com</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="<?php echo base_url();?>assets/plantilla/images/contact_info_3.png" alt=""></div>
									<div class="contact_info_text">1723646</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="contact_title">faq</div>
						<div class="faq_content">

							<!-- Accordions -->
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>1. ¿Cómo hago un pedido?</div></div>
									<div class="accordion_panel">
										<p>Para poder realizar un pedido será necesario estar registrado en la web. Al acceder a la tienda online tendrás que elegir entre que te enviemos el pedido a una dirección que tú elijas o recoger el pedido en tienda. Una vez completado este paso se podrá iniciar la realización del pedido.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>¿Puedo hacer cambios en mi pedido?</div></div>
									<div class="accordion_panel">
										<p>No. Una vez que hayas finalizado tu pedido online no podrás añadir o eliminar productos o cambiar las cantidades. En caso de querer modificar la hora de entrega que habías reservado será necesario que te pongas en contacto con el Servicio de Atención al Cliente.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>¿Hay un importe mínimo/máximo para realizar un pedido?</div></div>
									<div class="accordion_panel">
										<p>No existe un importe mínimo ni máximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atención al Cliente se pondrá en contacto contigo para verificar que el pedido realizado es correcto.</p>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>