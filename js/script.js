$(function(){


    AOS.init(); //aos 플러그인 동작 실행

    //처음에 스크롤바 위치 0
    $(window).on("load",function(){

        $("html,body").stop().animate({"scrollTop":0},10); 
        
    });

    //gnb depth2

    $(".gnb > li").on("mouseenter",function(){
        $(this).children(".depth2").stop().slideDown();
        $(".gnb > li").removeClass("on");
        $(this).addClass("on");
    });
    $(".gnb > li").on("mouseleave",function(){
        $(this).children(".depth2").stop().slideUp();
        $(this).removeClass("on");
    });

    //모바일메뉴

    $(".m-btn").on("click",function(event){

        event.preventDefault();

        $(".m-wrap").stop().fadeIn(500);
    });

    $(".m-close").on("click",function(event){

        event.preventDefault();

        $(".m-wrap").stop().fadeOut(500);
        $(".m-depth2").hide();
    });

    $(".m-gnb > li > a").on("click",function(){
            
        $(this).parent().siblings().children(".m-depth2").stop().slideUp();
    
        $(this).parent().siblings().children("a").removeClass("on");
    
        $(this).siblings(".m-depth2").stop().slideToggle();
        $(this).toggleClass("on");
    
    });

    //header 고정

    $(window).on("scroll",function(){

        let scTop = $(this).scrollTop();


        if(scTop >= 780) {
            $(".searchBox").addClass("on"); 
            $(".search li").addClass("on"); 
        }

        else if(scTop == 0) {
            $("#header").removeClass("bg"); 
        }

        else if(scTop >= 80) {
            $("#header").addClass("bg");
        }

        else if(scTop <= 780) {
            $(".searchBox").removeClass("on"); 
            $(".search li").removeClass("on"); 
        }

    });

    //scrolldown 클릭시 스크롤 부분
    let firstdown;

    $(".scrolldown").on("click",function(event){
        
        event.preventDefault();
        
        firstdown = $("#container .cont").eq(0).offset().top;
        
        $("html,body").stop().animate({"scrollTop":firstdown},800,"easeInSine");
        
    });

    
    //메뉴 클릭시 스크롤 부분
    let secMove;

    $(".right_menu li").on("click",function(event){
        
        event.preventDefault();
        
        let seclist = $(this).index();
        secMove = $("#container .cont").eq(seclist).offset().top;
        
        $("html,body").stop().animate({"scrollTop":secMove},800,"easeInSine");
        
    });

    //hand버튼 눌렀을씨 맨위로
    $(".hand").on("click",function(){

        $("html,body").stop().animate({"scrollTop":0},1500); 
        
    });

    //cont1 좌우버튼

    let slideNumber = 0; 

    $(".s-left").on("click",function(event){
        
        event.preventDefault();

        if(slideNumber == 0) {
            slideNumber = 4;
        }
        else{
            slideNumber--;
        }

        slideMove();

    });
    
    $(".s-right").on("click",function(event){

        event.preventDefault();

        if(slideNumber == 4) {
            slideNumber = 0;
        }
        else{
            slideNumber++;
        }

        slideMove();

    });

    //슬라이더 자동부분

    let autoSlide;
    autoNextSlide();


    $(".viewWrap").on("mouseenter",function(){ 
        clearInterval(autoSlide);
    });


    $(".viewWrap").on("mouseleave",autoNextSlide);

    function autoNextSlide(){

        autoSlide = setInterval(function(){

            if(slideNumber == 4) {
                slideNumber = 0;
            }

            else{
                slideNumber++;
            }

            slideMove();

        },3400);
    }

    function slideMove(){ 

        $(".s-view").stop().fadeOut();
        $(".s-view").eq(slideNumber).stop().fadeIn();
        $(".p-num").children("span").eq(0).text(slideNumber+1);
    }

    //cont2
    $(".open").on("click",function(event){

        event.preventDefault();

        $(this).siblings(".introbox").css({"height":"465px","transition":"all 1.5s 3s"});
        $(this).children().fadeOut();
        $(this).parent(".stay").siblings().css({"transform":"scale(0)","transition":"all 1.5s"});
        $(this).parent(".stay").css({"transition":"width 1.5s 3s, left 1.5s 1.5s, transform 1.5s 1.5s"}).addClass("move");
    });

    $(".close").on("click",function(event){

        event.preventDefault();

        $(".introbox").css({"height":"0","transition":"all 0s 0s"});
        $(".open").children().fadeIn(700);
        $(".stay").siblings().css({"transform":"scale(1)","transition":"all 1.5s 3s"});
        $(".stay").css({"transition":"width 1.5s 0s, left 1.5s 1.5s, transform 1.5s 1.5s"}).removeClass("move");
    });
    

    //화면 열리자 마다 botlist li태그 가로값 받아오기(마진여백 포함)
    let c_move = $(".botlist li").outerWidth(true);


    $(window).on("resize",function(){

        c_move = $(".botlist li").outerWidth(true);
        
    });

    //cont2 캐러셀
    $(".v-right").on("click",function(event){

        event.preventDefault();

        $(".botlist").stop().animate({"margin-left":-c_move*2},1000,function(){
            
            $(".botlist li:first-child").appendTo(".botlist");
            $(".botlist").css({"margin-left":-c_move});
            $(".videoshow .txtBox:first-child").appendTo(".videoshow");

        });
    });

    $(".v-left").on("click",function(event){

        event.preventDefault();

        $(".botlist").stop().animate({"margin-left":0},1000,function(){

            $(".botlist li:last-child").prependTo(".botlist");
            $(".botlist").css({"margin-left":-c_move});
            $(".videoshow .txtBox:last-child").prependTo(".videoshow");

        });
    });

    //botlist눌렀을때
    
    $(".botlist > li").on("click",function(event){

        event.preventDefault();

        let tabNumber = $(this).index();
        console.log(tabNumber);
        let dataValue = $(this).attr("data-mov");

        $(".videoWrap iframe").attr({"src":dataValue});

        $(".botlist > li").removeClass("on");
        $(this).addClass("on");

        $(".videoshow .txtBox").hide();
        $(".videoshow .txtBox").eq(tabNumber).show();

    });


    //travel 페이지

    //isotope 플러그인 로딩
    $('.resultbox').isotope({
        // options
        itemSelector: '.all',
        layoutMode: 'fitRows'
    });

    //버튼 클릭시 isotope 플러그인 정렬 시작!

    $(".sb2-tabBtn li").on("click",function(event){
        event.preventDefault();
        let value = $(this).attr("data-filter");

        $(".resultbox").isotope({
            filter:value,
            transitionDuration: 500

        });
    });

    //sb2-tabBtn 눌렀을때

    $(".sb2-tabBtn > li").on("click",function(event){

        event.preventDefault();

        $(this).addClass("on");
        $(this).siblings().removeClass("on");

    });

    ///register page
    //terms 나타나고 사라짐
    $(".agreebox .agree").on("click",function(event){
        
        event.preventDefault();

        let agreeNumber = $(this).index();
        $(".termWrap").hide();
        $(".termWrap").eq(agreeNumber).show();

    });

    $(".t-close").on("click",function(event){

        event.preventDefault();

        $(".termWrap").stop().fadeOut(700);

    });
    
});