<?php
$stmt = $db->prepare("DELETE FROM hiking WHERE id = :id");
$id = (int) $_GET['id'];
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: ' . __DIR__ . '/../pages/read.php');
}