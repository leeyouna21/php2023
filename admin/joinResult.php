<?php
    include "../connect/connect.php";
    $adminName = $_POST['youName'];
    $adminEmail = $_POST['youEmail'];
    $adminNick = $_POST['youNick'];
    $adminPass = sha1($_POST['youPass']);
    $adminBirth = $_POST['youBirth'];
    $adminPhone = $_POST['youPhone'];
    $regTime = time();
    $sql = "INSERT INTO adminMembers(adminEmail, adminName, adminNick, adminPass, adminBirth, adminPhone, adminDelete, adminRegtime, adminModtime) VALUES('$adminEmail', '$adminName', '$adminNick', '$adminPass', '$adminBirth', '$adminPhone', '1', '$regTime', '$regTime')";
    $connect -> query($sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #main {
            padding: 10vh;
            /* background-color: #dff5bb3e; */
            text-align: center;
            border-radius: 10px;
        }
        #main .p{
            font-size: 30px;
            margin-bottom: 60px;
            line-height: 1.5;
            font-weight: 500;
            color: #000000;

        }
        #main a {
            font-size: 26px;
            text-decoration: none;
            color: #fff;
            /* border: 1px solid #000000; */
            background-color: #000000;
            padding: 20px 62px;
            border-radius: 10px;
            font-weight: lighter;
            
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
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 이용하실 수 있습니다.
            </p>
        </div>
        <!-- //intro__inner -->
        <div class="join__inner container">
            <h2>회원가입 완료 🙌🏻❤</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="join__form">

                <div class="join__Agree">
                    <div class="p">
                        회원가입이 완료되었습니다 ✨🎉<br>
                        더욱더 다양한 서비스를 즐겨보세요 !
                    </div>
                    <a href="#">관리자로그인</a>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>