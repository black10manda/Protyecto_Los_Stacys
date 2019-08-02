</head>
<body>


<div class="super_container">



<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">GiftsOfLove</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="<?php echo base_url(); ?>">home</a></li>
					<li><a href="<?php echo base_url('Home/store'); ?>">Tienda</a></li>
					<li><a href="<?php echo base_url('Home/info'); ?>">Nosotros</a></li>
					<li><a href="<?php echo base_url('Home/nosotros'); ?>">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="shopping">
					<!-- Cart -->
					<a href="<?php echo base_url('Home/check'); ?>">
						<div class="cart">
							<img src=" <?php echo base_url();?>assets/plantilla/images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num"><?php echo $this->cart->total_items(); ?></div>
								</div>
							</div>
						</div>
					</a>
					
					<!-- Avatar -->
					<a href="<?php echo base_url('Home/login');?>">
						<div class="avatar">
							<img src="<?php echo base_url();?>assets/plantilla/images/avatar.svg" alt="">
							<?php if ($this->session->userdata("login")) {?>
							<?php echo $this->session->userdata("nombre")?>
							<?php  }else{  ?>
								Ingresa.
							<?php  } ?>
						</div>
					</a>
				</div>
			</div>

			
	</header>

	<!-- Menu -->

	