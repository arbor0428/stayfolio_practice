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
    <div class="sub_visual sub02_visual">
        <div class="black_bg"></div>
        <h3>FIND STAY</h3>
    </div>
    <div id="sub02_container">
        <div class="sb2-center">
            <div class="searchbox">
                <div class="house">
                    <label for="house">여행지/숙소</label>
                    <input id="txt_box" type="text" name="txt_box" required>
                </div>
                <div class="checkin">
                    <label for="in">체크인</label>
                    <input type="date" name="checkin">
                </div>
                <div class="checkout">
                    <label for="out">체크아웃</label>
                    <input type="date" name="checkout">
                </div>
            </div>
            <input id="submit" type="submit" value="SEARCH">
            <ul class="sb2-tabBtn clear_fix">
                <li class="on" data-filter="*">
                    <a href="#">전체</a>
                </li>
                <li data-filter=".jeju">
                    <a href="#">제주</a>
                </li>
                <li data-filter=".seoul">
                    <a href="#">서울</a>
                </li>
                <li data-filter=".gi">
                    <a href="#">경기</a>
                </li>
                <li data-filter=".gangwon">
                    <a href="#">강원</a>
                </li>
                <li data-filter=".chung">
                    <a href="#">충청</a>
                </li>
                <li data-filter=".jeolla">
                    <a href="#">전라</a>
                </li>
                <li data-filter=".gyeong">
                    <a href="#">경상</a>
                </li>
            </ul>
            <div class="resultbox clear_fix">
                <div class="all result01 jeju">
                    <img src="img/sub01/result01.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>눈먼고래</h5>
                        <p class="dt">돌집스테이</p>
                        <p class="dt2">제주/제주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result02 jeju">
                    <img src="img/sub01/result02.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>와온</h5>
                        <p class="dt">돌집스테이</p>
                        <p class="dt2">제주/제주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result03 seoul">
                    <img src="img/sub01/result03.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>누와</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">서울/종로구</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result04 jeolla">
                    <img src="img/sub01/result04.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>사로</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">전라/전주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result05 gangwon">
                    <img src="img/sub01/result05.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>명주하녹</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">강원/강릉시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result06 gangwon">
                    <img src="img/sub01/result06.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>의림여관</h5>
                        <p class="dt">디자인펜션</p>
                        <p class="dt2">강원/춘천시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result07 gyeong">
                    <img src="img/sub01/result07.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>오소한옥</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">경상/경주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result08 gangwon">
                    <img src="img/sub01/result08.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>삼박한집</h5>
                        <p class="dt">렌탈하우스</p>
                        <p class="dt2">강원/고성군</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result09 jeju">
                    <img src="img/sub01/result09.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>풀부엌이층집</h5>
                        <p class="dt">돌집스테이</p>
                        <p class="dt2">제주/제주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result10 jeju">
                    <img src="img/sub01/result10.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>돌채</h5>
                        <p class="dt">민박</p>
                        <p class="dt2">제주/제주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result11 jeju">
                    <img src="img/sub01/result11.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>월령선인장</h5>
                        <p class="dt">민박</p>
                        <p class="dt2">제주/제주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result12 seoul">
                    <img src="img/sub01/result12.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>한옥에세이</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">서울/종로구</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result13 seoul">
                    <img src="img/sub01/result13.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>스테이카키</h5>
                        <p class="dt">렌탈하우스</p>
                        <p class="dt2">서울/용산구</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result14 chung">
                    <img src="img/sub01/result14.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>수화림</h5>
                        <p class="dt">디자인펜션</p>
                        <p class="dt2">충성/서산시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result15 jeolla">
                    <img src="img/sub01/result15.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>소양고요</h5>
                        <p class="dt">민박</p>
                        <p class="dt2">전라/완주군</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result16 gyeong">
                    <img src="img/sub01/result16.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>흐르는결</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">경상/경주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result17 chung">
                    <img src="img/sub01/result17.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>제로플레이스</h5>
                        <p class="dt">디자인펜션</p>
                        <p class="dt2">충청/서산시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result18 gyeong">
                    <img src="img/sub01/result18.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>스테이 무메</h5>
                        <p class="dt">렌탈하우스</p>
                        <p class="dt2">경상/양산시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result19 jeolla">
                    <img src="img/sub01/result19.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>숲과생활</h5>
                        <p class="dt">민박</p>
                        <p class="dt2">전라/전주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result20 gi">
                    <img src="img/sub01/result20.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>스테이보다</h5>
                        <p class="dt">렌탈하우스</p>
                        <p class="dt2">경기/남양주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result21 gi">
                    <img src="img/sub01/result21.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>에덴파라다이스</h5>
                        <p class="dt">부티끄호텔</p>
                        <p class="dt2">경기/이천시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result22 gi">
                    <img src="img/sub01/result22.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>다이얼로그</h5>
                        <p class="dt">디자인펜션</p>
                        <p class="dt2">경기/파주시</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result23 gi">
                    <img src="img/sub01/result23.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>일리스테이</h5>
                        <p class="dt">디자인펜션</p>
                        <p class="dt2">인천/강화군</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result24 seoul">
                    <img src="img/sub01/result24.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>여느날</h5>
                        <p class="dt">한옥스테이</p>
                        <p class="dt2">서울/종로구</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result25 seoul">
                    <img src="img/sub01/result25.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>르릿</h5>
                        <p class="dt">부티끄호텔</p>
                        <p class="dt2">서울/중구</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
                <div class="all result26 gangwon">
                    <img src="img/sub01/result26.jpg">
                    <div class="bg"></div>
                    <div class="txtBox">
                        <h5>셀로판_비</h5>
                        <p class="dt">디자인호스텔</p>
                        <p class="dt2">강원/양양군</p>
                    </div>
                    <div class="hover">
                        <a href="#">
                            <img src="img/sub01/mobile.png">
                            <p class="book">예약하기</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "inc/footer.php"; ?>
</body>
</html>