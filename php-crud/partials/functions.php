<?php

function getAll($conn,$table){
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $results = [];
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $results[]= $row;
        }
    } elseif ($result) {
    $results = [];
    } else {
    $results = false;
    }
    $conn->close();
    return $results;
    }

    function removeId($conn, $table, $id, $basepath) {
        $sql = "DELETE FROM stanze WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);
        $id = $_POST['id'];
        $stmt-> execute();

        if ($stmt && $stmt->affected_rows >0) {
            header("location: $basepath/index.php?roomId=$id");
        } else {
        header("location: $basepath/index.php?roomN=$id");


        }


        $conn->close();

    }


    function getId($conn, $table, $id){
        $sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();



        } elseif ($result) {
        $row = "";
        } else {
        $row = false;
        }
        $conn->close();
        return $row;


    }





     ?>
