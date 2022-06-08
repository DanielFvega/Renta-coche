<?php

if (!empty($_POST)) {
	if (isset($_POST["name"]) && isset($_POST["document"]) && isset($_POST["email"]) && isset($_POST["gama"]) && isset($_POST["start"]) && isset($_POST["end"])) {
		if ($_POST["name"] != "" && $_POST["document"] != "" && $_POST["email"] != "") {
			include "conexion.php";

			$sql = "insert into rent(name,document,email,gama,start,end,created_at) value (\"$_POST[name]\",\"$_POST[document]\",\"$_POST[email]\",\"$_POST[gama]\",\"$_POST[start]\",\"$_POST[end]\",NOW())";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../home.php';</script>";
			} else {
				print "<script>alert(\"No se pudo agregar.\");window.location='../home.php';</script>";
			}
		}
	}
}
