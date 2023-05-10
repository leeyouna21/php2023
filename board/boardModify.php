<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle center">
            <picture class="intro__images small">
                <source srcset="../assets/img/board.jpg, ../assets/img/board.jpg, ../assets/img/board.jpg" />
                <img src="../assets/img/board.jpg" alt="회원가입 이미지">
            </picture>
            <h2>게시글 수정하기</h2>
            <p class="intro__text">
                프론트앤드 개발자를 위한 게시판 입니다.<br>
                관련 된 문의사항은 여기서 확인하세요 😊
            </p>
        </div>
        <div class="board__inner">
            <div class="board__write">
                <form action="boardModifySave.php" name="boardWriteSave" method="post">
                    <fieldset>
                        <legend class="blind">게시글 수정하기</legend>
<?php
    $memberID = $_SESSION['memberID'];
    $boardID = $_GET['boardID'];

    $sql = "SELECT boardID, boardTitle, boardContents FROM board WHERE boardID = {$boardID} AND memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result && $result -> num_rows > 0){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<div style='display:none'><label for='boardID'>번호</label><input type='text' id='boardID' name='boardID' class='inputStyle' value='".$info['boardID']."'></div>";
        echo "<div><label for='boardTitle'>제목</label><input type='text' id='boardTitle' name='boardTitle' class='inputStyle' value='".$info['boardTitle']."'></div>";
        echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='20' class='inputStyle'>".$info['boardContents']."</textarea></div>";
        echo "<div class='mt50'><label for='boardPass'>비밀번호</label><input type='password' id='boardPass' name='boardPass' class='inputStyle' autocomplete='off' required placeholder='글을 수정하려면 비밀번호를 입력하셔야 합니다.'></div>";
    } else {
        echo "<tr><td colspan='4'>작성자만 수정할 수 있습니다.</td></tr>";
    }
?>
                        <!-- <div>
                            <label for="">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="inputStyle">
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" id="boardContents" rows="20" class="inputStyle"></textarea>
                        </div> -->
                        <button type="submit" class="btnStyle3">수정하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>