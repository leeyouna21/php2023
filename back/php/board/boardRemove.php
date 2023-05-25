<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_GET['boardID'];
    $boardID = $connect -> real_escape_string($boardID);

    $check = "SELECT memberID FROM board WHERE boardID = '$boardID'";
    $result = $connect -> query($check);
    $sss = $result -> fetch_array(MYSQLI_ASSOC);
    
    echo $_SESSION['memberID'];
    echo $sss['memberID'];

    if($sss['memberID'] == $_SESSION['memberID']){
        $sql = "DELETE FROM board WHERE boardID = {$boardID}";
        $connect -> query($sql);
    } else {
        echo "<script>alert('작성자 본인만 삭제할 수 있습니다.'); window.history.back();</script>";
    }

?>

<script>
    // location.href = "board.php";
</script>