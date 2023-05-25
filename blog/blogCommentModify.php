<?php
    include "../connect/connect.php";

    $commentMsg = $_POST['commentMsg'];
    $commentPass = $_POST['commentPass'];
    $commentID = $_POST['commentID'];

    $sql = "SELECT commentPass FROM blogComment WHERE commentPass = '$commentPass' AND CommentID = '$commentID'";
    $result = $connect -> query($sql);

    if($result -> num_rows == 0){
        $jsonResult = "bad";
    } else {
        $sql = "UPDATE blogComment SET commentMsg = '$commentMsg' WHERE CommentID = '$commentID'";
        $connect -> query($sql);
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));
?>