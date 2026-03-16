<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM time WHERE id = :id";
$stmt = $conexao->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

header("Location: index.php");
exit;

?>