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
    <title>블로그</title>

    <?php include "../include/head.php" ?>

    <!-- Toast UI Editor -->
    <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
        <style>
            :not(.auto-height)>.toastui-editor-defaultUI>.toastui-editor-main {
                background-color: #fff;
            }
        </style>

</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="blog__search">
            <h2>개발자 블로그 게시글 작성</h2>
            <p>개발과 관련된 글을 작성할 수 있는 공간입니다.</p>
        </div>
        <div class="blog__inner">
            <div class="blog__write">
                <form action="blogWriteSave.php" name="blog__writeSave" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="blogCategory">카테고리</label>
                            <select name="blogCategory" id="blogCategory">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="react">react</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                        <div>
                            <label for="">제목</label>
                            <input type="text" id="blogTitle" name="blogTitle" class="inputStyle" required>
                        </div>
                        <div>
                            <label for="blogContents">내용</label>
                            <textarea name="blogContents" id="blogContents" rows="20" class="inputStyle" required></textarea>
                            <!-- <div id="editor"></div> -->
                        </div>
                        <div class="mt30">
                            <label for="blogFile">파일</label>
                            <input type="file" name="blogFile" id="blogFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣을 수 있습니다. 이미지 용량은 1메가를 넘길 수 없습니다.">
                        </div>
                        <button type="submit" class="btnStyle3">저장하기</button>
                    </fieldset>
                </form>
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

    <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
    <script>
        const Editor = toastui.Editor;

        const editor = new Editor({
            el: document.querySelector('#editor'),
            height: '1000px',
            initialEditType: 'markdown',
            previewStyle: 'vertical'
            });
    </script>

</body>
</html>