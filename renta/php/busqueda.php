<?php

include "conexion.php";

$user_id = null;
$sql1 = "select * from rent where name like '%$_GET[s]%' or document like '%$_GET[s]%' or email like '%$_GET[s]%' or gama like '%$_GET[s]%' or start like '%$_GET[s]%' or end like '%$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if ($query->num_rows > 0) : ?>

	<head>
		<link rel="stylesheet" href="css/stylesHome.css">
	</head>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Nombre</th>
			<th>Cédula</th>
			<th>Email</th>
			<th>Tipo de auto</th>
			<th>De</th>
			<th>Hasta</th>
			<th></th>
		</thead>
		<?php while ($r = $query->fetch_array()) : ?>
			<tr>
				<td><?php echo $r["name"]; ?></td>
				<td><?php echo $r["document"]; ?></td>
				<td><?php echo $r["email"]; ?></td>
				<td><?php echo $r["gama"]; ?></td>
				<td><?php echo $r["start"]; ?></td>
				<td><?php echo $r["end"]; ?></td>
				<td style="width:150px;">
					<a href="./editar.php?id=<?php echo $r["id"]; ?>" class="btn btn-sm btn-warning">Editar</a>
					<a href="#" id="del-<?php echo $r["id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
					<script>
						$("#del-" + <?php echo $r["id"]; ?>).click(function(e) {
							e.preventDefault();
							p = confirm("Estas seguro?");
							if (p) {
								window.location = "./php/eliminar.php?id=" + <?php echo $r["id"]; ?>;

							}
						});
					</script>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
<?php else : ?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; ?>