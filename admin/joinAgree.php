<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        #main {
            text-align: left;
            line-height: 1.5;
            position: relative;        
        }
        #main h3 {
            font-size: 20px;
            font-weight: 300;
            color: #000000;
            margin-bottom: 10px;
        }     
        #main .content{
            font-size: 16px;
            border: 1px solid #000;
            margin-bottom: 30px;
            padding: 10px 20px;
            color: #797979;
            overflow-y: scroll;
            width:800px;
            height:180px;
        }
        #main input{
            margin-bottom: 30px;
        }
        .content::-webkit-scrollbar {
        width:10px;
        }

        .content::-webkit-scrollbar-thumb {
        height: 30%;
        background: #ff995f;
        border-radius: 10px;
        }

        .content::-webkit-scrollbar-track {
        background: #ffd2b8;
        }
    </style>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join02.png, ../assets/img/join02@2x.png 2x, ../assets/img/join02@3x.png 3x" />
                <img src="../assets/img/join02.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 이용하실 수 있습니다.
            </p>
        </div>
        <!-- //intro__inner -->
        <div class="join__inner container">
            <h2>회원가입</h2>
            <div class="join__form">
            <div class="join__Agree">
                    <form method="post" action="form-action.html">
                        <div class="cont1">
                            <div class="content">
                                제 1조 (목적)] 이 약관은 회사(이하 "회사")가 제공하는 인터넷서비스(이하 "서비스")를 이용함에 있어 회사와 이용자(이하 "회원")의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.
                                [제 2조 (용어의 정의)] 이 약관에서 사용하는 용어의 정의는 다음과 같습니다.
                                회사: 인터넷 서비스를 제공하는 주체
                                이용자: 회사가 제공하는 서비스를 이용하는 자
                                회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                                이용자: 회사가 제공하는 서비스를 이용하는 자
                                회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                                이용자: 회사가 제공하는 서비스를 이용하는 자
                                회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                            </div>
                            <label>
                                <input type="checkbox" name="color" value="" class="agreeCheck" required>이용약관 동의</input>
                            </label>
                        </div>

                        <div class="cont2">
                            <form method="post" action="form-action.html">
                                <div class="cont2">
                                    <div class="content">
                                        [개인정보 수집 및 이용 동의서]
                                        수집하는 개인정보 항목
                                        필수항목: 성명, 주민등록번호 또는 외국인등록번호, 연락처, 이메일, 주소, 계좌번호, 신용카드번호 등 결제수단 관련 정보
                                        선택항목: 직업, 생년월일, 성별 등개인정보 수집 및 이용목적회원 가입 및 관리, 서비스 제공에 따른 본인 인증, 고객상담, 불만처리, 민원처리, 부정 이용방지, 요금결제 및 정산, 맞춤형 서비스 제공 등개인정보 보유 및 이용기간서비스 제공 및 계약이행을 위해 수집한 개인정보는 서비스 제공기간 동안에 한하여 보유 및 이용됩니다.단, 회원탈퇴 또는 계약 종료 시에는 지체 없이 파기합니다.개인정보 제공회사는 이용자의 개인정보를 외부에 제공하지 않으며, 제 3자에게 개인정보를 제공할 필요가 있는 경우 사전에 이용자에게 동의를 받습니다.다만, 관계법령에 의거한 경우나 수사상의 목적으로 관련기관으로부터 요청이 있는 경우는 예외로 합니 다.동의 거부 권리 및 불이익 안내이용자는 개인정보 수집 및 이용에 대해 동의를 거부할 권리가 있습니다.
                                        부정 이용방지, 요금결제 및 정산, 맞춤형 서비스 제공 등개인정보 보유 및 이용기간서비스 ...
                                        이용자: 회사가 제공하는 서비스를 이용하는 자
                                        회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                        이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                                        이용자: 회사가 제공하는 서비스를 이용하는 자
                                        회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                        이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                                        이용자: 회사가 제공하는 서비스를 이용하는 자
                                        회원: 이용자 중 회사와 이용계약을 체결하여 이용자 아이디(ID)를 부여 받은 자
                                        이용계약: 서비스 이용과 관련하여 회사와 회원 간에 체결하는 계약
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합
                                        아이디(ID): 회원 식별과 서비스 이용을 위해 회원이 정하고 회사가 승인하는 문자와 숫자의 조합 ...
                                    </div>
                                <label>
                                    <input type="checkbox" name="color" value="" class="agreeCheck"required>개인정보 수집 동의</input>
                                </label>   
                                    <p class="agreeMsg" style="color:red"></p>
                                    <a href="joinSave.php" class="btnStyle agreeBtn">동의</a>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script>
        //체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");

        agreeBtn.addEventListener("click", (e) => {
            
            agreeCheck.forEach((check) => {
                if(check.checked == false) {
                    agreeMsg.innerText = "* 동의하셔야 회원가입이 가능합니다.";
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>