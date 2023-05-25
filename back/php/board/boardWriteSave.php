<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $boardAuthor = $_SESSION['youNick'];
    $boardName = $_POST['boardName'];
    $boardTitle = $_POST['boardTitle'];
    $boardIngre = $_POST['boardIngre'];
    $boardContents1 = nl2br($_POST['boardContents1']);
    $boardView = 1;
    $regTime = time();

    $boardName = $connect -> real_escape_string($boardName);
    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents1 = $connect -> real_escape_string($boardContents1);

    if(isset($_FILES['boardImg1'])){
        $boardImg1 = $_FILES['boardImg1'];
        $boardImgSize1 = $_FILES['boardImg1']['size'];
        $boardImgType1 = $_FILES['boardImg1']['type'];
        $boardImgName1 = $_FILES['boardImg1']['name'];
        $boardImgTmp1 = $_FILES['boardImg1']['tmp_name'];

        if($boardImgType1){
            $fileTypeExtension = explode("/", $boardImgType1);
            $fileType = $fileTypeExtension[0];          // image
            $fileExtension = $fileTypeExtension[1];      // jpeg

            // 이미지 타입 확인
            if($fileType == "image"){
                if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                    $boardImgDir = "../img/board/";
                    $boardImgName1 = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                    echo "이미지 파일이 맞습니다.";
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                }
            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
            // 이미지 사이즈 확인
            if($boardImgSize1 > 10000000){
                echo "<script>alert('첫 번째 이미지 파일 용량이 1MB를 초과했습니다.')</script>";
            }
        }
        move_uploaded_file($boardImgTmp1, $boardImgDir.$boardImgName1);
        $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardAuthor, boardView, ImgSrc1, ImgSize1, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgSize1', '$regTime')";
    } else {
        $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardAuthor, boardView, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardAuthor', '$boardView', '$regTime')";
    }
    // 1번 내용(이미지)

    if(isset($_POST['boardContents2'])){
        $boardContents2 = nl2br($_POST['boardContents2']);

        $boardContents2 = $connect -> real_escape_string($boardContents2);
        if(isset($_FILES['boardImg2'])){
            $boardImg2 = $_FILES['boardImg2'];
            $boardImgSize2 = $_FILES['boardImg2']['size'];
            $boardImgType2 = $_FILES['boardImg2']['type'];
            $boardImgName2 = $_FILES['boardImg2']['name'];
            $boardImgTmp2 = $_FILES['boardImg2']['tmp_name'];

            if($boardImgType2){
                $fileTypeExtension = explode("/", $boardImgType2);
                $fileType = $fileTypeExtension[0];          // image
                $fileExtension = $fileTypeExtension[1];      // jpeg
    
                // 이미지 타입 확인
                if($fileType == "image"){
                    if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                        $boardImgDir = "../img/board/";
                        $boardImgName2 = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                        echo "이미지 파일이 맞습니다.";
                    } else {
                        echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                    }
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                }
                // 이미지 사이즈 확인
                if($boardImgSize2 > 10000000){
                    echo "<script>alert('첫 번째 이미지 파일 용량이 1MB를 초과했습니다.')</script>";
                }
            }
            move_uploaded_file($boardImgTmp2, $boardImgDir.$boardImgName2);
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSize1, ImgSize2, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgSize1', '$boardImgSize2', '$regTime')";
        } else {
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardAuthor, boardView, ImgSrc1, ImgSize1, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgSize1', '$regTime')";
        }
    }
    // 2번 내용

    if(isset($_POST['boardContents3'])){
        $boardContents3 = nl2br($_POST['boardContents3']);

        $boardContents3 = $connect -> real_escape_string($boardContents3);
        if(isset($_FILES['boardImg3'])){
            $boardImg3 = $_FILES['boardImg3'];
            $boardImgSize3 = $_FILES['boardImg3']['size'];
            $boardImgType3 = $_FILES['boardImg3']['type'];
            $boardImgName3 = $_FILES['boardImg3']['name'];
            $boardImgTmp3 = $_FILES['boardImg3']['tmp_name'];

            if($boardImgType3){
                $fileTypeExtension = explode("/", $boardImgType3);
                $fileType = $fileTypeExtension[0];          // image
                $fileExtension = $fileTypeExtension[1];      // jpeg
    
                // 이미지 타입 확인
                if($fileType == "image"){
                    if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                        $boardImgDir = "../img/board/";
                        $boardImgName3 = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                        echo "이미지 파일이 맞습니다.";
                    } else {
                        echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                    }
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                }
                // 이미지 사이즈 확인
                if($boardImgSize3 > 10000000){
                    echo "<script>alert('첫 번째 이미지 파일 용량이 1MB를 초과했습니다.')</script>";
                }
            }
            move_uploaded_file($boardImgTmp3, $boardImgDir.$boardImgName3);
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSrc3, ImgSize1, ImgSize2, ImgSize3, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgName3', '$boardImgSize1', '$boardImgSize2', '$boardImgSize3', '$regTime')";
        } else {
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2,  boardContents3, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSize1, ImgSize2, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgSize1', '$boardImgSize2', '$regTime')";
        }
    }
    // 3번 내용

    if(isset($_POST['boardContents4'])){
        $boardContents4 = nl2br($_POST['boardContents4']);

        $boardContents4 = $connect -> real_escape_string($boardContents4);
        if(isset($_FILES['boardImg4'])){
            $boardImg4 = $_FILES['boardImg4'];
            $boardImgSize4 = $_FILES['boardImg4']['size'];
            $boardImgType4 = $_FILES['boardImg4']['type'];
            $boardImgName4 = $_FILES['boardImg4']['name'];
            $boardImgTmp4 = $_FILES['boardImg4']['tmp_name'];

            if($boardImgType4){
                $fileTypeExtension = explode("/", $boardImgType4);
                $fileType = $fileTypeExtension[0];          // image
                $fileExtension = $fileTypeExtension[1];      // jpeg
    
                // 이미지 타입 확인
                if($fileType == "image"){
                    if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                        $boardImgDir = "../img/board/";
                        $boardImgName4 = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                        echo "이미지 파일이 맞습니다.";
                    } else {
                        echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                    }
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                }
                // 이미지 사이즈 확인
                if($boardImgSize4 > 10000000){
                    echo "<script>alert('첫 번째 이미지 파일 용량이 1MB를 초과했습니다.')</script>";
                }
            }
            move_uploaded_file($boardImgTmp4, $boardImgDir.$boardImgName4);
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardContents4, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSrc3, ImgSrc4, ImgSize1, ImgSize2, ImgSize3, ImgSize4, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardContents4', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgName3', '$boardImgName4', '$boardImgSize1', '$boardImgSize2', '$boardImgSize3', '$boardImgSize4', '$regTime')";
        } else {
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardContents4, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSrc3, ImgSize1, ImgSize2, ImgSize3, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgName3', '$boardImgSize1', '$boardImgSize2', '$boardImgSize3', '$regTime')";
        }
    }
    // 4번 내용

    if(isset($_POST['boardContents5'])){
        $boardContents5 = nl2br($_POST['boardContents5']);

        $boardContents5 = $connect -> real_escape_string($boardContents5);
        if(isset($_FILES['boardImg5'])){
            $boardImg5 = $_FILES['boardImg5'];
            $boardImgSize5 = $_FILES['boardImg5']['size'];
            $boardImgType5 = $_FILES['boardImg5']['type'];
            $boardImgName5 = $_FILES['boardImg5']['name'];
            $boardImgTmp5 = $_FILES['boardImg5']['tmp_name'];

            if($boardImgType5){
                $fileTypeExtension = explode("/", $boardImgType5);
                $fileType = $fileTypeExtension[0];          // image
                $fileExtension = $fileTypeExtension[1];      // jpeg
    
                // 이미지 타입 확인
                if($fileType == "image"){
                    if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                        $boardImgDir = "../img/board/";
                        $boardImgName5 = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                        echo "이미지 파일이 맞습니다.";
                    } else {
                        echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                    }
                } else {
                    echo "<script>alert('이미지 파일이 아닙니다.')</script>";
                }
                // 이미지 사이즈 확인
                if($boardImgSize5 > 10000000){
                    echo "<script>alert('첫 번째 이미지 파일 용량이 1MB를 초과했습니다.')</script>";
                }
            }
            move_uploaded_file($boardImgTmp5, $boardImgDir.$boardImgName5);
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardContents4, boardContents5, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSrc3, ImgSrc4, ImgSrc5, ImgSize1, ImgSize2, ImgSize3, ImgSize4, ImgSize5, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardContents4', '$boardContents5', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgName3', '$boardImgName4', '$boardImgName5', '$boardImgSize1', '$boardImgSize2', '$boardImgSize3', '$boardImgSize4', '$boardImgSize5', '$regTime')";
        } else {
            $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardContents4, boardContents5, boardAuthor, boardView, ImgSrc1, ImgSrc2, ImgSrc3, ImgSrc4, ImgSize1, ImgSize2, ImgSize3, ImgSize4, regTime) VALUES('$memberID', '$boardName', '$boardTitle', '$boardIngre', '$boardContents1', '$boardContents2', '$boardContents3', '$boardContents4', '$boardContents5', '$boardAuthor', '$boardView', '$boardImgName1', '$boardImgName2', '$boardImgName3', '$boardImgName4', '$boardImgSize1', '$boardImgSize2', '$boardImgSize3', '$boardImgSize4', '$regTime')";
        }
    }
    // 5번 내용

    $connect -> query($sql);

    // echo $memberID, $boardAuthor, $boardName, $boardTitle, $boardIngre, $boardContents1, $boardContents2, $boardContents3, $boardContents4, $boardContents5;
    // echo "<pre>";
    //     if(isset($boardImg1)){
    //         var_dump($boardImg1);
    //     }
    // echo "</pre>";
?>

<script>
    location.href = "board.php";
</script>