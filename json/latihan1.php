<?php 
	
	// $mahasiswa = [
	// 	[
	// 	"nama" => "Adhitya Sidiq Permana",
	// 	"nrp" => "153040049",
	// 	"email" => "adhitya.153040049@unpas.ac.id"
	// 	],
	// 	[
	// 	"nama" => "Dede Yosep",
	// 	"nrp" => "153040051",
	// 	"email" => "Dedeyosep@unpas.ac.id"
	// 	]
	// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mahasiswa);
	echo $data;


 ?>