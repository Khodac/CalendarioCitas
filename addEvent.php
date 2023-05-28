<?php

// Conexion a la base de datos
require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])) {

	$title = $_POST['title'];
	$color = $_POST['color'];
	$start = $_POST['start'] . ' ' . $_POST['start-time'];
	$end = $_POST['end']; 
	// . ' ' . $_POST['end-time'];

	$sql = "INSERT INTO events (title, color, start, end) VALUES ('$title', '$color', '$start', '$end')";

	

	echo $sql;

	$query = $bdd->prepare($sql);
	if ($query == false) {
		print_r($bdd->errorInfo());
		die('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
