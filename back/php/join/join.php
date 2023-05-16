<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        /* body {
            position: relative;
        } */
        form > .modal {
            position : fixed;
            left: 50%;
            top: 50%;
            transform : scale(0.8) translate(-65%, -70%);
            opacity: 0;
            box-shadow: 0 1px 15px rgba(116, 116, 116, 0.226);
            width: 1000px;
            display: flex;
            justify-content: center;
            background-color: #F6F6F6;
            border-radius : 10px;
            transition : all 0.5s;
            z-index: -1000;
        }
        form > .modal.show {
            position : fixed;
            left: 50%;
            top: 50%;
            transform : scale(0.8) translate(-65%, -65%);
            opacity: 1;
            box-shadow: 0 1px 15px rgba(116, 116, 116, 0.226);
            width: 1000px;
            display: flex;
            justify-content: center;
            background-color: #F6F6F6;
            border-radius : 10px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->
    <main id="main" class="container">
        <div class="join__inner">
            <img src="../../assets/img/logo.png" alt="로고이미지" class="logoimg">
            <h2>회원가입</h2>
            <div class="join__form">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div class="name__wrap">
                            <div class="name">
                                <label for="youName" class="required">이름</label>
                                <input type="text" id="youName" name="youName" placeholder="이름을 입력해주세요." class="inputStyle" required>
                            </div>
                            <div class="nickname">
                                <label for="nickName" class="required">닉네임</label>
                                <input type="text" id="nickName" name="nickName" placeholder="사용하실 닉네임을 입력해주세요." class="inputStyle" required>
                                <a href="#">중복 확인</a>
                            </div>
                        </div>
                        <div class="you">
                            <label for="youID" class="required">아이디</label>
                            <input type="text" id="youID" name="youID" placeholder="아이디는 숫자와 영어만 입력이 가능합니다." class="inputStyle" required>
                            <a href="#">아이디 중복검사</a>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요." class="inputStyle" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호를 다시한번 입력해주세요." class="inputStyle" required>
                        </div>
                        <div class="you">
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요." class="inputStyle" required>
                            <a href="#">아이디 중복검사</a>
                        </div>
                        <div class="you">
                            <label for="youPhone" class="required">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락받으실 번호를 입력해주세요." class="inputStyle" required>
                            <a href="#">아이디 중복검사</a>
                        </div>
                        <div class="age__wrap">
                            <div class="youage">
                                <label for="youAge" class="required">연령대</label>
                                <select name="youAge" id="youAge">
                                    <option value="10s">10 대</option>
                                    <option value="20s">20 대</option>
                                    <option value="30s">30 대</option>
                                    <option value="40s">40 대</option>
                                    <option value="50s">50 이상</option>
                                </select>
                            </div>
                            <div class="gender">
                                <label for="youGender" class="required">성별</label>
                                <select name="youGender" id="youGender">
                                    <option value="woman">여자</option>
                                    <option value="man">남자</option>
                                </select>
                            </div>
                        </div>
                        <label class="checkagree">
                            <input type="checkbox" name="agree" value="0" disabled required><span class="checkagree__span"> 개인정보 제공동의 (필수)</span>
                        </label>
                        <button type="submit" class="btnStyle1">회원가입 완료</button>
                    </fieldset>
                    <div class="modal">
                        <?php include "joinTerms.php" ?>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->
    <!-- //main -->
    <script>
        const checkAgree = document.querySelector(".checkagree__span");
        const termsAgree = document.querySelector(".terms__agree");
        const termsBtn = document.querySelector(".term__button")
        checkAgree.addEventListener("click", () => {
            document.querySelector(".modal").classList.add("show");
        });
        termsBtn.addEventListener("click", (e) => {
            if(document.querySelector(".terms1").checked && document.querySelector(".terms2").checked){
                // e.preventDefault();
                document.querySelector(".checkagree input").disabled = true;
                document.querySelector(".checkagree input").checked = true;
                document.querySelector(".modal").classList.remove("show");
            } else {
                alert("이용약관 동의에 체크해주세요.")
            }
        });
        document.querySelector(".close__btn").addEventListener("click", () => {
            document.querySelector(".modal").classList.remove("show");
        });
        // document.querySelectorAll(".terms").forEach(el => {
        //     if(el.checked){
        //         termsBtn.addEventListener("click", e => {
        //             e.preventDefault();
        //             document.querySelector(".checkagree input").disabled = true;
        //             document.querySelector(".modal").classList.remove("show");
        //         })
        //     } else {
        //         termsBtn.addEventListener("click", () => {
        //             console.log(el.checked)
        //         })
        //     }
        // });
        // if(document.querySelectorAll("input[name='terms']").checked == true){
        //     termsAgree.addEventListener("click", e => {
        //         e.preventDefault();
        //         document.querySelector(".checkagree input").disabled = true;
        //         document.querySelector(".modal").style.display = "none";
        //     });
        // } else {
        //     termsAgree.addEventListener("click", e => {
        //         alert("ddd");
        //     })
        // }
    </script>
</body>
</html>
