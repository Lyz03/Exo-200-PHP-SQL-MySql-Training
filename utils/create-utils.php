<?php
$name = trim(strip_tags($_POST['name']));
$difficulty = trim(strip_tags($_POST['difficulty']));
$distance = trim(strip_tags($_POST['distance']));
$duration = trim(strip_tags($_POST['duration']));
$height_difference = trim(strip_tags($_POST['height_difference']));

try {
    $stmt = $db->prepare("
    INSERT INTO hiking (name, difficulty, distance, duration, height_difference) 
    VALUES (:name, :difficulty, :distance, :duration, :height_differece)
    ");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':difficulty', $difficulty);
    $stmt->bindParam(':distance', $distance, PDO::PARAM_INT);
    $stmt->bindParam(':distance', $duration, PDO::PARAM_INT);
    $stmt->bindParam(':distance', $height_difference, PDO::PARAM_INT);

    /*
    if ($stmt->execute()) {
        echo '<div>Randonné bien enregistrée</div>';
    }
    */

} catch (PDOException $e) {
    echo $e;
}