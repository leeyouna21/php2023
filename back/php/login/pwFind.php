<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://webfontworld.github.io/score/SCoreDream.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    
    <main id="main" class="container ">
        <div class="login_inner">
            <div class="banner"><img src="../../assets/img/logo.png" alt="배너이미지"></div>
            <p>비밀번호를 찾기 위한 정보를 입력해 주세요</p>
            <div class="login_form">
                <form action="#" name="#" method="post">
                    <fieldset>
                        <legend class="blind">비밀번호 찾기</legend>
                        <div>
                            <label for="youEmail">이름</label>
                            <input type="text" id="youName" name="youName" placeholder="이메일" required>
                        </div>
                        <div>
                            <label for="youPass">아이디</label>
                            <input type="email" id="youId" name="youId" placeholder="비밀번호" required>
                        </div>
                        <div>
                            <label for="youPass">이메일</label>
                            <input type="email" id="youEmail" name="youEmail"placeholder="비밀번호" required>
                        </div>
                        <div>
                            <label for="youPass">인증코드</label>
                            <div class="code_inner">
                                <input type="email" id="youcode" name="youcode" placeholder="비밀번호" required>
                                <a href="#">코드번호</a >
                            </div>
                        </div>
                        <button type="submit" class="button">비밀번호 재설정</button>
                    </fieldset>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>