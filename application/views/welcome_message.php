<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD DE PRUEBA</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<p></p>
	
	<div class="container">
		<div class="row">
			<h2>REGISTRO DE PERSONAL</h2>
		</div>

<div class="mb-5">
<?php echo form_open('welcome/agregar', ['id' => 'form-persona']); ?>
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="">Nombre</label>
			<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">		
			</div>

		<div class="form-group col-sm-4">
			<label for="">Apellido</label>
			<input type="text" name="apellido" class="form-control" required placeholder="Apellido" id="apellido">
			</div>
			
		<div class="form-group col-sm-4">
			<label for="">Genero</label>
			<input type="text" name="genero" class="form-control" required placeholder="F o M" id="genero">
		</div>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Guardar</button>
	<?php echo form_close(); ?>
		</form>
		</div>

		<div class="row">
			<div class="card col-12">
			<div class="card-header">
				<h4>TABLA DEL PERSONAL</h4>
			</div>


		<table class="table">
				<thead>
					<tr>
					<th scope="col">ID</th>
					<th scope="col">NOMBRE</th>
					<th scope="col">APELLIDO</th>
					<th scope="col">GENERO</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
					</tr>
				</thead>
	<tbody>
	<?php 
		$count = 0;
		foreach ($personas as $persona) {
			echo '
			<tr>
			<td>'.++$count.'</td>
			<td>'.$persona->nombre.'</td>
			<td>'.$persona->apellido.'</td>
			<td>'.$persona->genero.'</td>
			<td><button type="button" class="btn btn-warning text-white" onclick="llenar_datos('.$persona->id.', `'.$persona->nombre.'`, `'.$persona->apellido.'`, `'.$persona->genero.'`)">Editar</button></td>
			<td><a href="'.base_url('welcome/eliminar/'.$persona->id).'" type="button" class="btn btn-danger">Eliminar</a></td>
			</tr>
			
			';
	}
	?>
	</tbody>
				</table>

			</div>
		</div>
	</div>
	<script>
let url = "<?php echo base_url('welcome/editar'); ?>";
const llenar_datos = (id, nombre, apellido, genero) => {
	let path = url+"/"+id;
		document.getElementById('form-persona').setAttribute('action', path);
		document.getElementById('nombre').value = nombre;
	 	document.getElementById('apellido').value = apellido;
		document.getElementById('genero').value = genero;
};
	</script>
</body>
</html>