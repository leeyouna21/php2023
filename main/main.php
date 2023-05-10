<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/board.jpg, ../assets/img/board.jpg 2x, ../assets/img/board.jpg 3x" />
                <img src="../assets/img/board.jpg" alt="소개이미지">
            </picture> 
            <p class="intro__text">
            개발자로서 더 넓은 견해로 세상을 바라보고 새롭고 도전적인 것에 
            흥미를 느끼며 진취적이고 개방적인 사고방식으로 바라보는 시각을 
            가지며 신입으로서의 도전하는 마음과 열정을 가진 개발자가 되겠습니다.
            </p>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>