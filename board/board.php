<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "SELECT count(boardID) FROM board";
    $result = $connect -> query($sql);

    $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardTotalCount = $boardTotalCount['count(boardID)'];
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
        <div class="intro__inner center bmStyle">
            <picture class="intro__images small">
                <source srcset="../assets/img/board.jpg, ../assets/img/board.jpg, ../assets/img/board.jpg" />
                <img src="../assets/img/board.jpg" alt="게시판">
            </picture>
            <h2>게시판</h2>
            <p class="intro__text">
                프론트앤드 개발자를 위한 게시판 입니다.<br>
                관련 된 문의사항은 여기서 확인하세요 😊
            </p>
        </div>

        <div class="board__inner">
            <div class="board__search">
                <div class="left">
                    * 총 <em><?=$boardTotalCount?></em>건의 게시물이 등록 돼 있습니다.
                </div>
                <div class="right">
                    <form action="boardSearch.php" name="boardSearch" method="get">
                        <fieldset>
                            <legend class="blind">게시판 검색 영역</legend>
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요" required>
                            <select name="searchOption" id="searchOption" id="#">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">등록자</option>
                            </select>
                            <button type="submit" class="btnStyle3 white">검색</button>
                            <a href="boardWrite.php" class="btnStyle3 black">글쓰기</a>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="board__table">
                <table>
                    <colgroup>
                    <col style="width: 5%">
                    <col>
                    <col style="width: 10%">
                    <col style="width: 15%">
                    <col style="width: 7%">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>등록자</th>
                        <th>등록일</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1</td>
                        <td><a href="boardView.html">게시판 제목</a></td>
                        <td>유나로그</td>
                        <td>2023-04-24</td>
                        <td>1000</td>
                    </tr> -->

<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    // 1-20 DESC LIMIT   0, 20 --> page1 (viewNum*1) - viewNum
    // 21-40 DESC LIMIT 20, 20 --> page2 (viewNum*2) - viewNum
    // 41-60 DESC LIMIT 40, 20 --> page3 (viewNum*3) - viewNum
    // 61-80 DESC LIMIT 60, 20 --> page4 (viewNum*4) - viewNum

    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM BOARD B join members m ON(b.memberID = m.memberID) ORDER BY boardID DESC LIMIT {$viewLimit},{$viewNum}";
    $result = $connect -> query($sql);

    if($result) {
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>".$info['boardID']."</td>";
                echo "<td><a href='boardView.php?boardID={$info['boardID']}'>".$info['boardTitle']."</a></td>";
                echo "<td>".$info['youName']."</td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo "<td>".$info['boardView']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
        }
    }
?>
                </tbody>
                </table>
            </div>
            <div class="board__pages">
                <ul>

<?php




    //총 페이지 갯수
    $boardTotalCount = ceil($boardTotalCount/$viewNum);

    //1 2 3 4 5 6 7 8 9  10 11 12 13
    $pageView = 5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;

    //마지막 페이지 초기화 /처음 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $boardTotalCount) $endPage = $boardTotalCount;

    //처음으로
    if($page != 1 && $page <= $boardTotalCount){
        $prevPage = $page -1;
        echo "<li><a href='board.php?page=1'>처음으로</a></li>";
        echo "<li><a href='board.php?page={$prevPage}'>이전</a></li>";
    }

// 페이지
for($i=$startPage; $i<=$endPage; $i++){
    if($page >0 && $page <= $boardTotalCount){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
    }
}

    //마지막으로 / 다음
    if($page > 0 && $page < $boardTotalCount){
        $next = $page + 1;
        echo "<li><a href='board.php?page={$next}'>다음</a></li>";
        echo "<li><a href='board.php?page={$boardTotalCount}'>마지막으로</a></li>";
    }

?>
                    <!-- <li><a href="#">처음으로</a></li>
                    <li><a href="#">이전</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="active">2</a></li>
                    <li><a href="active">3</a></li>
                    <li><a href="active">4</a></li>
                    <li><a href="active">5</a></li>
                    <li><a href="active">6</a></li>
                    <li><a href="active">7</a></li>
                    <li><a href="active">다음</a></li>
                    <li><a href="active">마지막</a></li> -->
                </ul>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>