<?php include "inc/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스테이폴리오</title>
    <?php include_once "default.php"; ?>
</head>
<body>
    <div class="firstWrap">
        <div class="beigebg"></div>
        <?php include_once "inc/header.php"; ?>
        <div id="visual">
            <div class="v-center">
                <div class="videowrap">
                    <video autoplay loop muted>
                        <source src="img/main/visual_bg.mp4">
                    </video>
                </div>
                <div class="coverbg"></div>
                <img class="bglogo" src="img/main/logo03.png" alt="bglogo">
                <p class="subtitle">머무름 만으로도 여행이 되다</p>
                <a class="scrolldown" href="scrolldown" title="scroll down">Scroll Down</a>
            </div>
            <div class="searchBox">
                <ul class="search">
                    <li><a href="#" title="where">어디로 떠날까요?<span></span></a></li>
                    <li><a href="#" title="when">언제 떠날까요?<span></span></a></li>
                    <li><a href="#" title="how many people">몇 명인가요?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="right_scroll">
        <div class="hoverbox"></div>
    </div>
    <ul class="right_menu">
        <li>
            <a href="#" title="BEST STAY">BEST STAY</a>
            <span>BEST STAY</span>
        </li>
        <li>
            <a href="#" title="NEW STAY">NEW STAY</a>
            <span>NEW STAY</span>
        </li>
        <li>
            <a href="#" title="WITH DISON">WITH DISON</a>
            <span>WITH DISON</span>
        </li>
        <li>
            <a href="#" title="VIDEO">VIDEO</a>
            <span>VIDEO</span>
        </li>
        <li>
            <a href="#" title="STAYFOLIO">STAYFOLIO</a>
            <span>STAYFOLIO</span>
        </li>
    </ul>
    <div class="hand">
        <a href="#" title="hand">
            <img src="img/main/hand.png" alt="hand">
        </a>
    </div>
    <div id="container">
        <section id="cont1" class="cont">
            <img class="line" src="img/main/cont01_bg.png" alt="line">
            <div class="ct1-center">
                <h3>
                    <span>스테이폴리오가 선정한</span>
                    베스트 스테이
                </h3>
                <div class="viewWrap">
                    <div class="s-view">
                        <div class="v-center">
                            <div class="left">
                                <img src="img/main/view01.jpg" alt="제주테라피하우스">
                            </div>
                            <div class="right">
                                <img class="s-logo" src="img/main/waon.png" alt="waonlogo">
                                <p>마음을 노곤하게 데워주는<br>
                                제주 테라피 하우스</p>
                                <a class="view" href="#" title="viewmore">
                                    <span class="hover">hover</span>
                                    <span class="txt">자세히 보기</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="s-view">
                        <div class="v-center">
                            <div class="left">
                                <img src="img/main/view02.jpg" alt="소요소림">
                            </div>
                            <div class="right">
                                <img class="s-logo" src="img/main/soyosorim.jpeg" alt="soyosorimlogo">
                                <p>작은 숲에서<br>
                                한가로이 시간을 보내다.</p>
                                <a class="view" href="#" title="viewmore">
                                    <span class="hover">hover</span>
                                    <span class="txt">자세히 보기</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="s-view">
                        <div class="v-center">
                            <div class="left">
                                <img src="img/main/view03.jpg" alt="thechae">
                            </div>
                            <div class="right">
                                <img class="s-logo" src="img/main/thechae.png" alt="thechaelogo">
                                <p>한옥에 대한<br>
                                    순수한 애정과 열정으로</p>
                                <a class="view" href="#" title="viewmore">
                                    <span class="hover">hover</span>
                                    <span class="txt">자세히 보기</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="s-view">
                        <div class="v-center">
                            <div class="left">
                                <img src="img/main/view04.jpg" alt="명월일기">
                            </div>
                            <div class="right">
                                <img class="s-logo" src="img/main/myeong.jpg" alt="myeonglogo">
                                <p>달빛과 풀벌레 소리,<br>
                                제주의 풍경을 온전히 누리다</p>
                                <a class="view" href="#" title="viewmore">
                                    <span class="hover">hover</span>
                                    <span class="txt">자세히 보기</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="s-view">
                        <div class="v-center">
                            <div class="left">
                                <img src="img/main/view05.jpg" alt="사로">
                            </div>
                            <div class="right">
                                <img class="s-logo" src="img/main/saro.jpg" alt="sarologo">
                                <p>그 작은 길에서 마주했을 때<br>
                                당신을 사로잡을</p>
                                <a class="view" href="#" title="viewmore">
                                    <span class="hover">hover</span>
                                    <span class="txt">자세히 보기</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="arrow clear_fix">
                        <div class="s-left">
                            <a href="#" title="prev">
                                <div class="left_r">left_r</div>
                                <div class="s-cir">s_cir</div>
                            </a>
                        </div>
                        <div class="p-num">
                            <span>1</span>
                            <span>/ 5</span>
                        </div>
                        <div class="s-right">
                            <a href="#" title="next">
                                <div class="right_r">right_r</div>
                                <div class="s-cir">s-cir</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section >
        <section id="cont2" class="cont">
            <div class="ct2-center">
                <h3>
                    <span>스테이폴리오가 선정한</span>
                    새로운 스테이</h3>
                <div class="stayWrap">
                    <div class="stay">
                        <div class="stay_bg"></div>
                        <div class="open">
                            <p class="first">즐거운 시간은 언제나</p>
                            <p class="second">라온가</p>
                            <a class="wider" href="#" title="펼쳐보기">펼쳐보기</a>
                        </div>
                        <div class="introbox">
                            <div class="close">
                                <a href="#" title="close">
                                    <img src="img/main/close.png" alt="close">
                                </a>
                            </div>
                            <p class="title">ROOM INFORMATION</p>
                            <div class="boxWrap">
                                <p class="main">라온가</p>
                                <p class="sub">90년대에 지어진 옛 주택을 리모델링해 만들어진 라온가는<br>
                                    30년 전의 공간과 현재의 공간을 둘 다 느낄 수 있습니다.<br>
                                    익숙하면서도 새로운 공간 라온가는 주방, 거실, 두 개의 침실, 화장실로 이루어졌습니다.</p>
                                <ul class="roominfo">
                                    <li>체크인 15:00 / 체크아웃 11:00</li>
                                    <li>기준 인원 2 명 (최대 인원 4 명)</li>
                                    <li>객실면적 79㎡</li>
                                    <li>퀸사이즈 베드2</li>
                                </ul>
                                <span class="price">₩240,000~</span>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="stay">
                        <div class="stay_bg"></div>
                        <div class="open">
                            <p class="first">흐르는 시간 속 작은 기쁨</p>
                            <p class="second">어바웃플로우</p>
                            <a class="wider" href="#" title="펼쳐보기">펼쳐보기</a>
                        </div>
                        <div class="introbox">
                            <div class="close">
                                <a href="#" title="close">
                                    <img src="img/main/close.png" alt="close">
                                </a>
                            </div>
                            <p class="title">ROOM INFORMATION</p>
                            <div class="boxWrap">
                                <p class="main">어바웃플로우</p>
                                <p class="sub">9about pause(쉼에 관하여) 오롯한 휴식을 위한 공간(거실, 침실)과<br>
                                    about interest(관심 있는 것들에 관하여)<br>
                                    여가를 즐길 수 있는 공간(다이닝룸, 서재)으로 나누어져 있습니다.</p>
                                <ul class="roominfo">
                                    <li>체크인 16:00 / 체크아웃 11:00</li>
                                    <li>기준 인원 4 명 (최대 인원 6 명)</li>
                                    <li>객실면적 110㎡</li>
                                    <li>더블베드 2</li>
                                </ul>
                                <span class="price">₩300,000~</span>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="stay">
                        <div class="stay_bg"></div>
                        <div class="open">
                            <p class="first">머물고, 감상하고, 편하게 뉠 곳</p>
                            <p class="second">뉠스테이</p>
                            <a class="wider" href="#" title="펼쳐보기">펼쳐보기</a>
                        </div>
                        <div class="introbox">
                            <div class="close">
                                <a href="#" title="close">
                                    <img src="img/main/close.png" alt="close">
                                </a>
                            </div>
                            <p class="title">ROOM INFORMATION</p>
                            <div class="boxWrap">
                                <p class="main">뉠스테이</p>
                                <p class="sub">아늑한 두 개의 침실, 넉넉한 세 개의 화장실,<br>
                                    정갈한 주방이 있는 한옥입니다. 지하의 비밀 공간에는<br>
                                    100인치 스크린과 빔프로젝터가 있는 미디어룸이 있습니다.</p>
                                <ul class="roominfo">
                                    <li>체크인 16:00 / 체크아웃 11:00</li>
                                    <li>기준 인원 2 명 (최대 인원 4 명)</li>
                                    <li>객실면적 65㎡</li>
                                    <li>퀸사이즈 베드2</li>
                                </ul>
                                <span class="price">₩350,000~</span>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="stay">
                        <div class="stay_bg"></div>
                        <div class="open">
                            <p class="first">온전한 우리만의 공간</p>
                            <p class="second">소양고요</p>
                            <a class="wider" href="#" title="펼쳐보기">펼쳐보기</a>
                        </div>
                        <div class="introbox">
                            <div class="close">
                                <a href="#" title="close">
                                    <img src="img/main/close.png" alt="close">
                                </a>
                            </div>
                            <p class="title">ROOM INFORMATION</p>
                            <div class="boxWrap">
                                <p class="main">소양고요</p>
                                <p class="sub">25년 전 인테리어 및 실내 장식을 활용해<br>
                                    현재의 시각으로 보았을 때 독특한 느낌을 줍니다.<br>
                                    마당을 향해 큰 통창이 나있어 넓고 푸른 마당을 보며 여유로운 시간을 보낼 수 있습니다.</p>
                                <ul class="roominfo">
                                    <li>체크인 15:00 / 체크아웃 11:00</li>
                                    <li>기준 인원 2 명 (최대 인원 10 명)</li>
                                    <li>객실면적 115㎡</li>
                                    <li>퀸 사이즈 베드 3</li>
                                </ul>
                                <span class="price">₩240,000~</span>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section >
        <section id="cont3" class="cont">
            <div class="bannerWrap">
                <div class="banner_bg"></div>
                <div class="ct3-center">
                    <h4>다이슨과 스테이폴리오가 제안하는 건강한 공간</h4>
                    <p>다이슨과 스테이폴리오가 ‘Healthy Home’을 통해 보다 안전하고 건강한 여행을 선보입니다.
                        일상 곳곳에 숨어있는 작은 문제점을 발견하고 최적의 방법으로<br>
                        해결하는 다이슨의 5가지 제품을 스테이폴리오의 공간에서 직접 경험해보세요.</p>
                    <a class="view" href="#" title="view">
                        <span class="hover">hover</span>
                        <span class="txt">체험하기</span> 
                    </a>
                </div>
            </div>
        </section >
        <section id="cont4" class="cont">
            <div class="graybg">graybg</div>
            <div class="ct4-center">
                <h3>
                    <span>스테이폴리오's</span>
                    VIDEO
                </h3>
                <div class="boxWrap">
                    <div class="videoWrap">
                        <iframe src="https://www.youtube.com/embed/0K5c5bkwCxs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="videoshow">
                            <div class="txtBox">
                                <h5>
                                    <span>삼일을 온전히 누려도 좋을 집</span>
                                    삼박한 집
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>아름다운 숲속 나그네의 집</span>
                                    의림여관
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>작은 숲에서의 하루</span>
                                    소요소림
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>제주 중산간 속에 녹아든 단층 호텔</span>
                                    포도호텔
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>달빛이 영롱한 바닷가 여인숙의 재해석</span>
                                    월화여인숙
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>'여인숙'과 '풍년빌라'의 식구로 지내는 하루</span>
                                    여정
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox">
                                <h5>
                                    <span>서울에서 만나는 핀란드 집</span>
                                    탈로서울
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                            <div class="txtBox clear_fix">
                                <h5>
                                    <span>서울의 내일</span>
                                    A better place.
                                </h5>
                                <a class="book" href="#" title="book">
                                    <span class="hover">hover</span>
                                    <span class="txt">BOOK</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="listview">
                        <ul class="botlist clear_fix">
                            <li data-mov="https://www.youtube.com/embed/timPi6BNwlI">
                                <a class="bg01" href="#" title="삼박한집">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">삼박한 집</p>
                                        <p class="staydetail">삼일을 온전히 누려도 좋을 집</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li class="on" data-mov="https://www.youtube.com/embed/0K5c5bkwCxs">
                                <a class="bg02" href="#" title="의림여관">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">의림여관</p>
                                        <p class="staydetail">아름다운 숲속 나그네의 집</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/0EYFiMokVH0">
                                <a class="bg03" href="#" title="소요소림">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">소요소림</p>
                                        <p class="staydetail">작은 숲에서의 하루</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/IMGUKTtSTug">
                                <a class="bg04" href="#" title="포도호텔">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">포도호텔</p>
                                        <p class="staydetail">제주 중산간 속에<br>녹아든 단층 호텔</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/c3BaPKD3GSs">
                                <a class="bg05" href="#" title="월화여인숙">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">월화여인숙</p>
                                        <p class="staydetail">달빛이 영롱한 바닷가<br>여인숙의 재해석</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/yYMlQ8q_DHs">
                                <a class="bg06" href="#" title="여정">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">여정</p>
                                        <p class="staydetail">'여인숙'과 '풍년빌라'의<br> 식구로 지내는 하루</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/nrJTygTzKu4">
                                <a class="bg07" href="#" title="탈로서울">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">탈로서울</p>
                                        <p class="staydetail">서울에서 만나는 핀란드 집</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                            <li data-mov="https://www.youtube.com/embed/T_JHS7Y6ig4">
                                <a class="bg08" href="#" title="서울의 내일">
                                    <div class="coverbg">coverbg</div>
                                    <div class="txtbox">
                                        <p class="staynm">A better place.</p>
                                        <p class="staydetail">서울의 내일</p>
                                    </div>
                                    <div class="watch_hover">
                                        <img class="c1" src="img/main/circle.png" alt="maincir">
                                        <div class="c2">c2line</div>
                                        <img class="play" src="img/main/play-button.png" alt="play">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="v-left" href="#" title="v-left">v-left</a>
                    <a class="v-right" href="#" title="v-right">v-right</a>
                </div>
            </div>
        </section >
        <section id="cont5" class="cont">
            <div class="ct5-center">
                <div class="banrWrap clear_fix">
                    <div class="left_banr banr">
                        <div class="black_bg">black_bg</div>
                        <h5>유니크한 숙소 공간을 추천해 주세요.</h5>
                        <div class="text">
                            <p>스테이폴리오는 여행자와 창작자 사이에서<br>
                                혁신적인 스테이 모델을 지속적으로 소개하고 있습니다.
                            </p>
                            <a class="morebtn" href="#" title="viewmore">더 알아보기</a>
                        </div>
                    </div>
                    <div class="right_banr banr">
                        <div class="black_bg">black_bg</div>
                        <h5>FIND STAY AGENCY STAYFOLIO</h5>
                        <div class="text">
                            <p>콘텐츠 제작, 마케팅 전략, 예약시스템<br>
                                비지니스 모델의 경쟁력을 높이는 호스트 솔루션을 만나보세요.
                            </p>
                            <a class="morebtn" href="#" title="viewmore">더 알아보기</a>
                        </div>
                    </div>
                </div>
            </div>
        </section >
    </div>
    <?php include_once "inc/footer.php"; ?>
    
    <script>
        $(function(){

            $(window).on("resize",function(){

            let wid = $(window).width(); 

            if(wid >= 1024) {

                $(".right_menu").stop().fadeIn();
                $(".right_scroll").stop().fadeIn();
                $(".hand").stop().fadeIn();
                $(".m-btn").stop().fadeOut();
                $(".m-wrap").stop().fadeOut();

            }

            else {

                $(".right_menu").stop().fadeOut();
                $(".right_scroll").stop().fadeOut();
                $(".hand").stop().fadeOut();

            }

            });

            $(window).on("scroll",function(){

                let scTop = $(this).scrollTop();

                let sec1 = $(".cont:nth-child(1)").offset().top;
                let sec2 = $(".cont:nth-child(2)").offset().top;
                let sec3 = $(".cont:nth-child(3)").offset().top;
                let sec4 = $(".cont:nth-child(4)").offset().top;
                let sec5 = $(".cont:nth-child(5)").offset().top;
                
                $(".right_menu li").removeClass("on");
                
                if(scTop >= sec1 && scTop < sec2) {
                    $(".right_menu li").eq(0).addClass("on");

                }
                
                else if(scTop >= sec2 && scTop < sec3) {
                    $(".right_menu li").eq(1).addClass("on");
                }
                
                else if(scTop >= sec3 && scTop < sec4) {
                    $(".right_menu li").eq(2).addClass("on");
                }
            
                else if(scTop >= sec4 && scTop < sec5) {
                    $(".right_menu li").eq(3).addClass("on");
                }

                else if(scTop >= sec5) {
                    $(".right_menu li").eq(4).addClass("on");


                }

                let win_height = $(window).height(); //웹브라우저 현재 보는 높이값
                let doc_height = $(document).height(); //웹브라우저 전체 높이값
                let hoverbox = Math.floor(scTop/(doc_height-win_height)*100);
                
                $(".hoverbox").css({"height":hoverbox+"%"});
            });


        });
    </script>
</body>
</html>