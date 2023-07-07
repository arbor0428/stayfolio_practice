<?php include "inc/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스테이폴리오</title>
    <?php include_once "default.php"; ?>
</head>
<body>
    <?php include_once "inc/header.php"; ?>
    <div id="login_container">
        <div class="loginBox">
            <form method="post" action="login.php">
                <h3>LOGIN</h3>
                <p class="kor">로그인</p>
                <div class="input_box first">
                    <input id="id" name="id" type="text" required placeholder="아이디 (hannah1155)">
                </div>
                <div class="input_box second">
                    <input id="password" name="password" type="password" required placeholder="비밀번호 (123456)">
                </div>
                <input id="login_btn" type="submit" value="로그인">
                <div class="mWrap clear_fix">
                    <div class="checkbox">
                        <input id="idsave" name="idsave" type="checkbox"><label for="idsave">아이디 저장</label>
                    </div>
                    <div class="idpass clear_fix">
                        <a class="find01" href="#">아이디찾기</a>
                        <a class="find02" href="#">비밀번호 찾기</a>
                    </div>
                </div>
                <div class="or-line">
                    <span class="line"></span>
                    <span class="or">SNS 계정으로 로그인하기</span>
                    <span class="line"></span>
                </div>
                <ul class="icons clear_fix">
                    <li><a href="#">NAVER</a></li>
                    <li><a href="#">KAKAO TALK</a></li>
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">APPLE</a></li>
                </ul>
                <div class="register clear_fix">
                    <p class="r-detail">스테이폴리오 회원이 아니신가요?</br>
                        회원가입을 통해 다양한 정보를 얻으실 수 있습니다.</p>
                    <a class="r-btn" href="register.php">회원가입</a>
                </div>
            </form>
        </div>
    </div>
    <?php include_once "inc/footer.php"; ?>
</body>
</html>