<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>PAGINA DE LOGIN</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <script src="<?php echo site_url();?>">assets/toast/jqm.js</script>
    <script src="<?php echo site_url();?>">assets/toast/toast.js</script>
 </head>

<body>
	<section class="h-100">
		<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
		<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
		<div class="text-center my-5">
		</div>
			<div class="card shadow-lg">
			<div class="card-body p-5">
			    <h1 class="fs-4 card-title fw-bold mb-4">LOGIN</h1>
            <?php echo form_open('Auth/login_form'); ?>
			 
			<div class="mb-3">
		    <label class="mb-2 text-muted" for="email">Correo Electronico</label>
			<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
			</div>

			<div class="mb-3">
								
            <label class="mb-2 text-muted" for="password">Contraseña</label>
			<input id="password" type="password" class="form-control" name="password" required>				  
			</div>

			<div class="d-flex align-items-center">
			<button type="submit" class="btn btn-primary ms-auto">
				Entrar
			</button>
			</div>
			<?php echo form_close(); ?>
				</div>
				<div class="card-footer py-3 border-0">
				<div class="text-center">
				<a href="Auth/register" class="text-dark">Crear una Cuenta</a>
				</div>
				</div>
				</div>
					
				</div>
			</div>
		</div>
	</section>

    <script type="text/javascript">


    <?php if($this->session->flashdata('suc')){ ?>
        toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
    <?php }else if($this->session->flashdata('worng')){  ?>
        toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
    <?php }else if($this->session->flashdata('warning')){  ?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php }else if($this->session->flashdata('info')){  ?>
        toastr.info("hola");
    <?php } ?>
    <?php
	$this->session->unset_userdata ( 'suc' ); ?>
	
	<?php
    $this->session->unset_userdata ( 'worng' ); ?>

    </script>
</body>
</html>