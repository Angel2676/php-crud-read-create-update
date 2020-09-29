<?php
include __DIR__ .'/../database.php';


$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if ($result) {
    echo "ok";
} else {
    echo "non cancellato";
}


$conn->close();


 ?>
