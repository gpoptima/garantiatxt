<?php
	require 'config.php';
	$id = $_REQUEST['id'];




    /* ----------------------------- --> */
	$sql = "SELECT * FROM  e4 WHERE email='$id'";
	$resultado = $conn->query($sql);

     /* ----------------------------- --> */
    $sql2 = "SELECT * FROM  f5 WHERE email='$id'";
	$resultado2 = $conn->query($sql2);

    /* ----------------------------- --> */
    $sql3 = "SELECT * FROM  h7 WHERE email='$id'";
    $resultado3 = $conn->query($sql3);


    /* ----------------------------- --> */
    $sql4 = "SELECT * FROM  a0 WHERE email='$id'";
    $resultado4 = $conn->query($sql4);
	$filaa0  = $resultado4->fetch_assoc();
//echo $filaa0;

?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>


		<title>Relacion de Productos  E4</title>
	
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

              <div class="card">
                    <h5 class="card-header">Datos del Cliente</h5>
                    <div class="card-body">

   
                    <div class="container">
			<div class="row">
				<h1>Cliente</h1>
			</div>
			
		
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
                      <th>Nombre</th>
                      <th>E-mail</th>
					  <th>Fecha</th>
                  		<th>var2</th>
						  <th>Sucursal</th>
                        <th></th>								
					</tr>
				</thead>
				<tbody>
					<?php while($fila3 = $resultado3->fetch_assoc()) { ?>
						<tr>
                            <td><?php echo $fila3['var5']; ?></td>
					    	<td><?php echo $fila3['email']; ?></td>
							<td><?php echo $fila3['var4']; ?></td>					
							<td><?php echo $fila3['var2']; ?></td>
							<td><?php echo $filaa0['sucursal']; ?></td>
                            <td></td>
							
						
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
                    </div>

                </div>
</div>

		<div class="container">
			<div class="row">
				<h1>Relacion de Productos E4</h1>
			</div>
			
		
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
					<!--<th>id</th> -->
						<!-- <th>R</th> -->
						<th>Descripcion</th>
						<!-- <th>var3</th> -->
						<th>var4</th>
						<th>var5</th>
						<th>var6</th>
						<th>var7</th>
						<th>var8</th>
						<th>var9</th>
						<th>var10</th>
                        <th></th>								
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
						
					<!-- 	<td><?php echo $fila['email']; ?></td>  -->
						  <!--   <td><?php echo $fila['var2']; ?></td> -->
					    	<td><?php echo $fila['var3']; ?></td>
							<td><?php echo $fila['var4']; ?></td>
							<td><?php echo $fila['var5']; ?></td>
							<td><?php echo $fila['var6']; ?></td>
							<td><?php echo $fila['var7']; ?></td>
							<td><?php echo $fila['var8']; ?></td>
							<td><?php echo $fila['var9']; ?></td>
							<td><?php echo $fila['var10']; ?></td>
                            <td></td>
							
						
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

    




	<div class="row">
				<a href="#" class="btn btn-primary">Inicio </a>
			</div>

            <div class="container">
			<div class="row">
				<h1>Relacion de Productos F5</h1>
			</div>
			
		
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
                    <th>var2</th>
                    <th>var3</th>
						<th>var4</th>
						<th>var5</th>
						<th>var6</th>
						<th>var7</th>
						<th>var8</th>
						<th>var9</th>
						
                        <th></th>								
					</tr>
				</thead>
				<tbody>
					<?php while($fila2 = $resultado2->fetch_assoc()) { ?>
						<tr>
                            <td><?php echo $fila2['var2']; ?></td>
					    	<td><?php echo $fila2['var3']; ?></td>
							<td><?php echo $fila2['var4']; ?></td>
							<td><?php echo $fila2['var5']; ?></td>
							<td><?php echo $fila2['var6']; ?></td>
							<td><?php echo $fila2['var7']; ?></td>
							<td><?php echo $fila2['var8']; ?></td>
							<td><?php echo $fila2['var9']; ?></td>
							
                            <td></td>
							
							
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>




	</div>



</body>
</html>						