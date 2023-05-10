<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
        <div class="intro__inner center">
            <picture class="intro__images small">
                <source srcset="../assets/img/board.jpg, ../assets/img/board.jpg, ../assets/img/board.jpg" />
                <img src="../assets/img/board.jpg" alt="회원가입 이미지">
            </picture>
            <h2>게시글 보기</h2>
            <p class="intro__text">
                프론트앤드 개발자를 위한 게시판 입니다.<br>
                관련 된 문의사항은 여기서 확인하세요 😊
            </p>
        </div>
        <!-- //intro__inner -->
        <div class="board__inner">
            <div class="board__view">
                <table>
                    <colgroup>
                        <col style="width: 20%">
                        <col style="width: 80%">
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>게시판 제목입니다.</td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td>유나로그</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023-04-24</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼 프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼
                                프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼
                                프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼
                                프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼
                                프론트앤드 개발자 취업 노하우는 열심히 살아야지 열심히 살지 않으면 열심히 살지 않은 날들에 대한 보복이 미래의 나에게 닥칠거야 사람은 살면서 다 돌려받게 돼 있어 지금 좀 부당하고 아닌 거 같아도 나중에 다 돌려받게 돼 있으니 내가 할 수 있는 걸 하고 내 미래에 대해 깊게 생각하고 노력하먄 돼
                                
                                </td>
                        </tr> -->

<?php
    $boardID = $_GET['boardID'];

    // 보드뷰에서 +1을 시키는 방법
    $sql = "UPDATE board SET boardView = boardView + 1 WHERE boardID = {$boardID}";
    $connect -> query($sql);

    // echo $boardID;
    $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);

    if($result) {
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo"<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo"<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo"<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
        echo"<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo"<tr><th>조회수</th><td>".$info['boardContents']."</td></tr>";
    } else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
?>

                    </tbody>
                </table>
            </div>
            <div class="border__btn mb100">
                <a href="boardModify.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3">수정하기</a>
                <a href="boardRemove.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3" onclick="return confirm('삭제하시겠습니까?', '')">삭제하기</a>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>
        
    </main>
    <!-- //main -->


    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>