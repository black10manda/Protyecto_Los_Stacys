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

<?php if ($this->session->userdata("login")) {?>
	

<div class="container  ">
	
<div class="form-signin ">
	<p class="login-box-msg" >Introduzca sus datos de ingreso</p>
	            <?php if($this->session->flashdata("error")):?>
	              <div class="alert alert-danger">
	                <p><?php echo $this->session->flashdata("error")?></p>
	              </div>
	            <?php endif; ?>
				<form class="form-control"  action="<?php echo base_url();?>auth/login" method="post">
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
<?php } ?>
<div class="container  ">
<div class="row">
                    <h1><?php echo $this->session->userdata("nombre")?></h1>
                     <h1><?php echo $this->session->userdata("telefono")?></h1>
                     <h1><?php echo $this->session->userdata("direccion")?></h1>
                     <h1><?php echo $this->session->userdata("num_documento")?></h1>
                     <h1>fadfbhadfhadfh</h1>

                </div>
                 </div>