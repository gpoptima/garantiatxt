<?php
	
	require 'conexion.php';
	
	//$sql = "SELECT id, nombre, telefono, fecha_nacimiento, estado_civil FROM empleados WHERE activo=1";
	
	$sql = "SELECT id, email,var2,var3,var4,var5,var6,var7,var8,var9,var10,var11,var12,var13,var14 FROM  c2";
	$resultado = $conexion->query($sql);
	//$resultado = $conn->query($sql);


//echo $resultado;	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		 <link rel="stylesheet" href="css/bootstrap.min.css">
		<!--  <link rel="stylesheet" href="css/jquery.dataTables.css">
		 -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css"> -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- <script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script> -->
		
		 <script src="https://code.jquery.com/jquery-3.5.1.js" ></script> 
		<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
		<!-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bulmas.min.js" ></script> -->
		
		
		<title>Relacion de Productos</title>
		
		<script>
			$(document).ready(function() {
			$('#tabla').DataTable();
			} );
			
		</script>
		
		<style>
			body {
			background: white;
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Relacion de Productos</h1>
			</div>
			
			<!-- <table id="example" class="table is-striped" style="width:100%"> -->
		
			<table id="tabla" class="dtable is-striped" style="width:100%">
				<thead>
					<tr>
					 
                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th>Direcion</th>
                            <th>C.P.</th>
                            <th>Telefono</th>
                           
                            												
						<th></th>
					
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
						
					    	
						    <td><?php echo $fila['var11']." ". $fila['var12']." ". $fila['var13'];?></td>
					    	<td><?php echo $fila['email'];?></td>
							<td><?php echo $fila['var2']." ". $fila['var3']." ". $fila['var7']; ?></td>
							
							<td><?php echo $fila['var4']; ?></td>
							<td><?php echo $fila['var9']; ?></td>
							
							
							

							<td><a href="Listado.php?id=<?php echo $fila['email']; ?>" class="btn btn-primary">Ver</a> </td>
						
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>
	
	<div class="row">
				<a href="index.php" class="btn btn-primary">Inicio</a>
			</div>
			
</body>
</html>						