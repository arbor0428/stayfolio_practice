<header id="header">
    <div class="h-center clear_fix">
        <h1 class="logo"><a href="index.php" title="logo"><img src="img/main/logo.png" alt="logo"></a></h1>
        <ul class="gnb clear_fix">
            <li>
                <a href="introduce.php" title="ABOUT">ABOUT</a>
                <ul class="depth2">
                    <li><a href="introduce.php" title="ABOUT">ABOUT</a></li>
                    <li><a href="introduce.php" title="4POINT OF VIEW">4POINT OF VIEW</a></li>
                </ul>
            </li>
            <li>
                <a href="travel.php" title="TRAVEL">TRAVEL</a>
                <ul class="depth2">
                    <li><a href="travel.php" title="FIND STAY">FIND STAY</a></li>
                    <li><a href="travel.php" title="PRE-ORDER">PRE-ORDER</a></li>
                </ul>
            </li>
            <li>
                <a href="login_view.php" title="PROMOTION">PROMOTION</a>
                <ul class="depth2">
                    <li><a href="login_view.php" title="PROMOTION">PROMOTION</a></li>
                    <li><a href="login_view.php" title="EVENT">EVENT</a></li>
                </ul>
            </li>
            <li>
                <a href="login_view.php" title="JOURNAL">JOURNAL</a>
                <ul class="depth2">
                    <li><a href="login_view.php" title="MAGAZINE">MAGAZINE</a></li>
                    <li><a href="login_view.php" title="PICK">PICK</a></li>
                </ul>
            </li>
        </ul>
        <div class="lang">
            <span><a href="#" title="KOR">KOR</a></span>
            <span><a href="#" title="ENG">ENG</a></span>
        </div>
        <?php 
                if(isset($_SESSION['userid'])) {

        ?>
        <ul class="login-menu02">
            <li><?php echo $_SESSION['userid']; ?>님</li>
            <li><a href="logout.php" title="로그아웃">로그아웃</a></li>
        </ul>
        <?php } else { ?>
        <ul class="login-menu">
            <li><a href="login_view.php" title="로그인">로그인</a></li>
            <li><a href="register.php" title="회원가입">회원가입</a></li>
        </ul>
        <?php }  ?>
        <div class="m-btn">
            <a href="#" title="m-btn">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </a>
        </div>
    </div>
    <div class="m-wrap">
        <div class="m-center">
            <div class="m-top clear_fix">
                <h1 class="logo"><a href="index.php" title="logo"><img src="img/main/logo.png" alt="logo"></a></h1>
                <a class="m-close" href="#" title="m-close"><img src="img/main/m-close.png" alt="close"></a>
            </div>
            <ul class="m-gnb">
                <li>
                    <a href="#" title="ABOUT">ABOUT</a>
                    <ul class="m-depth2">
                        <li><a href="introduce.php" title="ABOUT">ABOUT</a></li>
                        <li><a href="introduce.php" title="4POINT OF VIEW">4POINT OF VIEW</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="TRAVEL">TRAVEL</a>
                    <ul class="m-depth2">
                        <li><a href="travel.php" title="FIND STAY">FIND STAY</a></li>
                        <li><a href="travel.php" title="PRE-ORDER">PRE-ORDER</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="PROMOTION">PROMOTION</a>
                    <ul class="m-depth2">
                        <li><a href="login_view.php" title="PROMOTION">PROMOTION</a></li>
                        <li><a href="login_view.php" title="EVENT">EVENT</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="JOURNA">JOURNAL</a>
                    <ul class="m-depth2">
                        <li><a href="login_view.php" title="MAGAZINE">MAGAZINE</a></li>
                        <li><a href="login_view.php" title="PICK">PICK</a></li>
                    </ul>
                </li>
            </ul>
            <div class="m-bot clear_fix">
                <?php 
                    if(isset($_SESSION['userid'])) {

                ?>
                <ul class="login-menu">
                    <li><?php echo $_SESSION['userid']; ?>님</li>
                    <li><a href="logout.php" title="로그아웃">로그아웃</a></li>
                </ul>
                <?php } else { ?>
                <ul class="login-menu">
                    <li><a href="login_view.php" title="로그인">로그인</a></li>
                    <li><a href="register.php" title="회원가입">회원가입</a></li>
                </ul>
                <?php }  ?>
                <div class="lang">
                    <span><a href="#" title="KOR">KOR</a></span>
                    <span><a href="#" title="ENG">ENG</a></span>
                </div>
            </div>
        </div>
    </div>
</header>