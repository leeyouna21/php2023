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
    <title>블로그</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="blog__search">
            <h2>개발자 블로그입니다.</h2>
            <p>개발과 관련된 글입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search"class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요.">
                    <button type="submit" class="btnStyle4 m120" >검색하기</button>
                <?php if(isset($_SESSION['memberID'])){ ?> 
                    <a href="blogWrite.php" class="btnStyle4 white">글쓰기</a>
                    <?php }  ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
            <div class="blog__wrap">
                    <div class="cards__inner col3 line2">
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기술에 대한 자습서 및 가이드</h3>
                                <p>이것은 블로그를 위한 고전적인 선택이며 다른 코딩 블로그와 차별화하는 좋은 방법입니다. 코딩에 대한 기본부터 고급 주제에 이르기까지 무엇이든 가르칠 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩의 최신 트렌드 및 기술에 대한 기사</h3>
                                <p>코딩 세계는 빠르게 변화하고 있으므로 독자가 최신 정보를 얻을 수 있는 장소를 제공하는 것이 중요합니다. 업계 뉴스, 새로운 기술 및 트렌드에 대한 기사를 게시할 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>다른 코더가 작성한 코드의 예 및 샘플</h3>
                                <p>다른 코더의 작업에서 영감을 얻고 배우는 좋은 방법입니다. 자신의 코드와 다른 코더의 코드를 비교하여 자신의 기술을 향상시키는 방법을 배울 수도 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>질문 및 답변 섹션</h3>
                                <p>독자가 코딩 문제에 대한 도움을 받을 수 있는 좋은 방법입니다. 자신의 경험을 공유하고 다른 코더의 질문에 답할 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기술에 대한 자습서 및 가이드</h3>
                                <p>이것은 블로그를 위한 고전적인 선택이며 다른 코딩 블로그와 차별화하는 좋은 방법입니다. 코딩에 대한 기본부터 고급 주제에 이르기까지 무엇이든 가르칠 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩의 최신 트렌드 및 기술에 대한 기사</h3>
                                <p>코딩 세계는 빠르게 변화하고 있으므로 독자가 최신 정보를 얻을 수 있는 장소를 제공하는 것이 중요합니다. 업계 뉴스, 새로운 기술 및 트렌드에 대한 기사를 게시할 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>다른 코더가 작성한 코드의 예 및 샘플</h3>
                                <p>다른 코더의 작업에서 영감을 얻고 배우는 좋은 방법입니다. 자신의 코드와 다른 코더의 코드를 비교하여 자신의 기술을 향상시키는 방법을 배울 수도 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>질문 및 답변 섹션</h3>
                                <p>독자가 코딩 문제에 대한 도움을 받을 수 있는 좋은 방법입니다. 자신의 경험을 공유하고 다른 코더의 질문에 답할 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                            <img src="../assets/img/board.jpg" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            개발자로서 더 넓은 견해로 세상을 바라보고 새롭고 도전적인 것
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신댓글</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
            div class intro__inner </div> 각 페이지 소개 배너
            div class intro__inner </div> 회원가입 페이지
            div class intro__inner </div> 로그인페이지
            div class intro__inner </div> 게시판페이지
            div class blog__inner </div> 블로그메인
        -->
    </main>
    <!-- //main -->


    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>