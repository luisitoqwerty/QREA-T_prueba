<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/e2d125c5d8.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<title>Crud</title>
</head>





<body>


	<!-- Script para llamar a la API -->
	<script type="text/javascript">
		/* para facturar si el boton se preciona */
		$(document).ready(function() {

			/* btnGenerarUsuarioAPI */
			$('#btnGenerarUsuarioAPI').click(function() {
				$.ajax({
					url: 'https://randomuser.me/api/',
					dataType: 'json',
					success: function(data) {

						$("#Nombre").val(data.results[0].name.first);
						$("#Correo").val(data.results[0].email);
						$("#Direccion").val(data.results[0].location.street.name + " No." + data.results[0].location.street.number);
						$("#Genero").val(data.results[0].gender);
						document.getElementById("Foto").src = data.results[0].picture.thumbnail;
						$("#Foto2").val(data.results[0].picture.thumbnail);

					}
				});

			});
		});
	</script>

<script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            swal(':D','Agregado con exito!','success');
        } else if (mensaje == '0'){
            swal(':(','Fallo al agregar!','error');
        } else if (mensaje == '2'){
            swal(':D','Actualizado con exito!','success');
        } else if (mensaje == '3'){
            swal(':(','Fallo al Actualizar!','error');
        } else if (mensaje == '4'){
            swal(':D','Eliminado con exito!','success');
        } else if (mensaje == '5'){
            swal(':(','Fallo al eliminar!','error');
        }
    </script>



	<div class="container">

		<h1>QREA-T</h1>
		<div class="row">

			<div class="col-sm-12">

				<form id="formUno" method="POST" action="<?php echo base_url() . '/crear' ?>">

					<label for="Nombre">Nombre</label>
					<input type="text" name="Nombre" id="Nombre" class="form-control col-sm-6">
					<label for="Correo">Correo</label>
					<input type="text" name="Correo" id="Correo" class="form-control col-sm-6">

					<label for="Direccion">Direccion</label>
					<input type="text" name="Direccion" id="Direccion" class="form-control col-sm-6">

					<label for="Genero">Genero</label>
					<input type="text" name="Genero" id="Genero" class="form-control col-sm-6">

					<label for="Foto">Foto</label>
					<input name="Foto2" id="Foto2" type="text" hidden="true" > 
					<img name="Foto" id="Foto" src="">

					<br>
					<button type="button" id="btnGenerarUsuarioAPI" class="btn btn-success">Generar Usuario API</button>

					<button class="btn btn-primary">Guardar</button>
				</form>
			</div>

		</div>


		<hr>
		<h2>listado de usuarios</h2>
		<div class="row">
			<div class="col-sm-12">
				<div class="table table-responsive">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Direccion</th>
							<th>Genero</th>
							<th>Foto</th>
							<th>Activo</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
						<?php foreach ($datos as $key) : ?>
							<tr>
								<td><?php echo $key->Nombre ?></td>
								<td><?php echo $key->Correo ?></td>
								<td><?php echo $key->Direccion ?></td>
								<td><?php echo $key->Genero ?></td>
								<td><img src="<?php echo $key->Foto ?>"></td>
								<td><?php echo $key->Activo ?></td>
								<td>
									<a href="<?php echo base_url() . '/obtenerNombre/'.$key->id ?>" class="btn btn-warning btn-sm">Editar</a>
								</td>
								<td>
									<a href="<?php echo base_url() . '/eliminar/'.$key->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>



		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url() ?>/css/navbar.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/e2d125c5d8.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/librerias/datatable/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/librerias/datatable/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/librerias/alertify/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/librerias/alertify/css/themes/bootstrap.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">/
		<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">


		<script src="<?= base_url() ?>/librerias/jquery.min.js"></script>
		<script src="<?= base_url() ?>/librerias/datatable/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>/librerias/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url() ?>/librerias/alertify/alertify.js"></script>

</body>

</html>