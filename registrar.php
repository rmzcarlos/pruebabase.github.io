<?php 

include("con_db.php");


if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['materia']) >= 1) {
		$name = trim($_POST['name']);
		$materia = trim($_POST['materia']);
		$fecha = date("d/m/y");
		$consulta = "INSERT INTO `datos`(`nombre`, `materia`, `fecha`) VALUES ('$name','$materia','$fecha')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">Te has inscrito correctamente</h3>
			<?php
		} else {
			?>
			<h3 class="bad">Ha ocurrido un error</h3>
			<?php
		}
	}else{
		?>
			<h3 class="bad">Porfavor complete los campos</h3>
		<?php
	}
}

?>