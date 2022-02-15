<?php

if (!empty($_POST)) {
	if (isset($_POST["name"]) && isset($_POST["document"]) && isset($_POST["email"]) && isset($_POST["gama"]) && isset($_POST["start"]) && isset($_POST["end"])) {
		if ($_POST["name"] != "" && $_POST["document"] != "" && $_POST["email"] != "") {
			include "conexion.php";

			$sql = "update rent set name=\"$_POST[name]\",document=\"$_POST[document]\",email=\"$_POST[email]\",gama=\"$_POST[gama]\",start=\"$_POST[start]\",end=\"$_POST[end]\" where id=" . $_POST["id"];
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../index.php';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../index.php';</script>";
			}
		}
	}
}
