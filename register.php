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
    <div id="register_container">
        <div class="registerBox"> 
                <form method="post" action="insert.php">
                    <div class="register_center">
                        <div class="txt_line" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"></div>
                        <h3>JOIN</h3>
                        <p class="kor">회원가입</p>
                        <div class="input_box">
                            <label for="id">아이디</label>
                            <input id="id" name="id" type="text" required placeholder="아이디를 입력하세요.">
                        </div>
                        <div class="input_box">
                            <label for="pass">비밀번호</label>
                            <input id="pass" name="password" type="password" maxlength="16" required placeholder="비밀번호를 입력하세요.">
                            <input id="repass" name="repass" type="password" maxlength="16" required placeholder="비밀번호를 확인해 주세요.">
                        </div>
                        <div class="input_box">
                            <label for="name">이름</label>
                            <input id="name" name="name" type="text" maxlength="5" required placeholder="이름을 입력하세요.">
                        </div>
                        <div class="input_box">
                            <label for="birth">생년월일</label>
                            <input type="date" name="birth">
                        </div>
                        <div class="input_box tell">
                            <label for="phone">휴대전화</label>
                            <input id="phone" name="phone" type="text"  maxlength="11" required placeholder="숫자만 입력해주세요.">
                            <a class="p-send" href="#">인증번호 받기</a>
                        </div>
                        <div class="checkbox">
                            <input id="phonecheck" name="phonecheck" type="checkbox">
                            <label for="phonecheck">휴대폰으로 인증할 때 개인정보 수집 및 이용 정책에 따라 활용되는 것에 동의합니다.</label>
                        </div>
                        <div class="input_box address">
                            <label for="postcode">주소</label>
                            <input type="text" id="postcode" name="addr1" placeholder="우편번호">
                            <input type="button" id="find" onclick="sample4_execDaumPostcode()" value="우편번호 찾기">
                            <input type="text" id="roadAddress" name="addr2" placeholder="도로명주소">
                            <input type="text" id="jibunAddress" name="addr3" placeholder="지번주소">
                            <span id="guide" style="color:#999;display:none"></span>
                            <input type="text" id="detailAddress" name="addr4" placeholder="상세주소">
                            <input type="text" id="extraAddress" name="addr5" placeholder="참고항목">
                        </div>
                        <div class="agreebox clear_fix">
                            <div class="agree">
                                <input id="agree01" name="agree01" type="checkbox">
                                <button class="terms">서비스 이용 약관 동의 (필수)</button>
                            </div>
                            <div class="agree">
                                <input id="agree02" name="agree02" type="checkbox">
                                <button class="terms">개인정보 취급방침 동의 (필수)</button>
                            </div>
                            <div class="agree">
                                <input id="agree03" name="agree03" type="checkbox">
                                <button class="terms">만 14세 이상 확인 (필수)</button>
                            </div>
                            <div class="agree">
                                <input id="agree04" name="agree04" type="checkbox">
                                <button class="terms">평생회원제 동의 (선택)</button>
                            </div>
                        </div>
                        <input id="register_btn" type="submit" value="회원가입">
                    </div>
                </form>
                <div class="termWrap">
                    <div class="term">
                        <a class="t-close" href="#"><img src="img/sub01/close.png"></a>
                        <div class="term-text">
                            <h4>서비스 이용 약관 동의 (필수)</h4>
                            <div>
                                <p>개인정보 수집 및 이용 동의</br>
                                    1. 수집항목: [필수] 이름, 연락처, 이메일주소, 인원정보</br>
                                    2. 수집 및 이용목적: 사업자회원과 예약이용자의 원활한 거래 진행, 고객상담, 불만처리 등 민원 처리, 분쟁조정 해결을 위한 기록보존, 스테이폴리오 멤버십 및 프로모션, 이벤트 안내</br>
                                    3. 보관기간: 회원탈퇴 등 개인정보 이용목적 달성 시까지 보관. 단, 상법 및 ‘전자상거래 등에서의 소비자 보호에 관한 법률’ 등 관련 법령에 의하여 일정 기간 보관이 필요한 경우에는 해당 기간 동안 보관함</br>
                                    4. 동의 거부권 등에 대한 고지: 정보주체는 개인정보의 수집 및 이용 동의를 거부할 권리가 있으나, 이 경우 상품 및 서비스 예약이 제한될 수 있습니다.
                                </p>
                                <p>개인정보 제3자 제공 동의</br>
                                    1. 개인정보를 제공받는 자: 스테이 호스트</br>
                                    2. 제공하는 개인정보 항목: [필수] 스테이폴리오 아이디, 이름, 연락처, 이메일주소, 인원정보</br>
                                    3. 개인정보를 제공받는 자의 이용목적: 사업자회원과 예약이용자의 원활한 거래 진행, 고객상담, 불만처리 등 민원 처리, 분쟁조정 해결을 위한 기록보존</br>
                                    4. 개인정보를 제공받는 자의 개인정보 보유 및 이용기간: 개인정보 이용목적 달성 시 까지 보존합니다.</br>
                                    5. 동의 거부권 등에 대한 고지: 정보주체는 개인정보 제공 동의를 거부할 권리가 있으나, 이 경우 상품 및 서비스 예약이 제한될 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="termWrap">
                    <div class="term">
                        <a class="t-close" href="#"><img src="img/sub01/close.png"></a>
                        <div class="term-text">
                            <h4>개인정보 취급방침 동의 (필수)</h4>
                            <div>
                                <p>제 1조 (총칙)</br>
                                1. 개인정보란 생존하는 개인에 관한 정보로서 당해 정보에 포함되어 있는 성명, 주민등록번호 등의 사항에 의하여 당해 개인을 식별할 수 있는 정보 (당해 정보만으로는 특정 개인을 식별할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을 포함합니다.) 를 말합니다.</br>
                                2. 스테이폴리오는 귀하의 개인정보 보호를 매우 중요시하며, ‘정보통신망이용촉진 및 정보보호에 관한 법률’ 상의 개인정보 보호규정 및 정보통신부가 제정한 ‘개인정보 보호지침’을 준수하고 있습니다.</br>
                                3. 스테이폴리오는 개인정보취급방침을 정하고 이를 귀하께서 언제나 쉽게 확인할 수 있게 공개하도록 하고 있습니다.</br>
                                4. 스테이폴리오는 개인정보 처리방침의 지속적인 개선을 위하여 개정하는데 필요한 절차를 정하고 있으며, 개인정보 처리방침을 회사의 필요한 사회적 변화에 맞게 변경할 수 있습니다. 그리고 개인정보처리방침을 개정하는 경우 버전번호 등을 부여하여 개정된 사항을 귀하께서 쉽게 알아볼 수 있도록 하고 있습니다.
                                </p>
                                <p>제 2조 (수집하는 개인정보 항목 및 수집방법)</br>
                                1. 스테이폴리오는 별도의 회원가입 절차 없이 대부분의 컨텐츠에 자유롭게 접근할 수 있습니다. 스테이폴리오에서 예약 및 프로모션, 이벤트 서비스를 이용하시고자 할 경우 다음의 정보를 입력해주셔야 합니다.</br>
                                - 입력항목 : 희망ID, 비밀번호, 성명, 이메일주소</br>
                                2. 또한 서비스 이용과정이나 사업 처리 과정에서 아래와 같은 정보들이 생성되어 수집될 수 있습니다.</br>
                                - 최근접속일, 접속 IP 정보, 쿠키, 구매로그, 이벤트로그</br>
                                - 회원가입 시 회원이 원하시는 경우에 한하여 추가 정보를 선택, 제공하실 수 있도록 되어있으며, 일부 재화 또는 용역 상품에 대한 주문 및 예약 시 회원이 원하는 정확한 주문 내용 파악을 통한 원활한 고객 응대 및 예약 처리를 위하여 추가적인 정보를 요구하고 있습니다.</br>
                                3. 스테이폴리오는 다음과 같은 방법으로 개인정보를 수집합니다.</br>
                                - 홈페이지, 서면양식, 팩스, 전화, 상담 게시판, 이메일, 이벤트 응모, 예약신청</br>
                                - 로그 분석 프로그램을 통한 생성정보 수집</br>
                                4. 개인정보 수집에 대한 동의</br>
                                - 스테이폴리오는 귀하께서 스테이폴리오의 개인정보취급방침 및 이용약관의 내용에 대해 「동의한다」버튼 또는 「동의하지 않는다」버튼을 클릭할 수 있는 절차를 마련하여, 「동의한다」버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다.</br>
                                5. 14세 미만 아동의 개인정보보호</br>
                                스테이폴리오는 법정 대리인의 동의가 필요한 만14세 미만 아동의 회원가입은 받고 있지 않습니다.</br>
                                6. 비회원의 개인정보보호</br>
                                - 스테이폴리오는 비회원 주문의 경우에도 예약정보, 대금결제, 예약내역 조회 및 예약확인, 실명여부 확인을 위하여 필요한 개인정보만을 요청하고 있으며, 이 경우 그 정보는 대금결제 및 객실예약 관련된 용도 이외에는 다른 어떠한 용도로도 사용되지 않습니다.</br>
                                - 스테이폴리오는 비회원의 개인정보도 회원과 동등한 수준으로 보호합니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="termWrap">
                    <div class="term">
                        <a class="t-close" href="#"><img src="img/sub01/close.png"></a>
                        <div class="term-text">
                            <h4>만 14세 이상 확인 (필수)</h4>
                            <div>
                                <p>정보통신망 이용촉진 및 정보보호 등에 관한 법률에 따라 만 14세 미만 아동의 개인정보 수집 시 법정대리인의 동의를 받도록 규정하고 있습니다.</br>
                                    만 14세 미만 아동이 법정대리인 동의 없이 회원가입을 할 경우 회원탈퇴 또는 서비스 이용에 제한이 있을 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="termWrap">
                    <div class="term">
                        <a class="t-close" href="#"><img src="img/sub01/close.png"></a>
                        <div class="term-text">
                            <h4>평생회원제 동의 (선택)</h4>
                            <div>
                                <p>평생회원제에 동의할 경우 1년 이상 서비스를 이용하지 않아도 휴면 처리되지 않습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                <script>
                    //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
                    function sample4_execDaumPostcode() {
                        new daum.Postcode({
                            oncomplete: function(data) {
                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                var roadAddr = data.roadAddress; // 도로명 주소 변수
                                var extraRoadAddr = ''; // 참고 항목 변수

                                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                                    extraRoadAddr += data.bname;
                                }
                                // 건물명이 있고, 공동주택일 경우 추가한다.
                                if(data.buildingName !== '' && data.apartment === 'Y'){
                                extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                }
                                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                                if(extraRoadAddr !== ''){
                                    extraRoadAddr = ' (' + extraRoadAddr + ')';
                                }

                                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                document.getElementById('postcode').value = data.zonecode;
                                document.getElementById("roadAddress").value = roadAddr;
                                document.getElementById("jibunAddress").value = data.jibunAddress;
                                
                                // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
                                if(roadAddr !== ''){
                                    document.getElementById("extraAddress").value = extraRoadAddr;
                                } else {
                                    document.getElementById("extraAddress").value = '';
                                }

                                var guideTextBox = document.getElementById("guide");
                                // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                                if(data.autoRoadAddress) {
                                    var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                                    guideTextBox.innerHTML = '(Expected Road Name Address : ' + expRoadAddr + ')';
                                    guideTextBox.style.display = 'block';

                                } else if(data.autoJibunAddress) {
                                    var expJibunAddr = data.autoJibunAddress;
                                    guideTextBox.innerHTML = '(Expeced Land-Lot Based Address : ' + expJibunAddr + ')';
                                    guideTextBox.style.display = 'block';
                                } else {
                                    guideTextBox.innerHTML = '';
                                    guideTextBox.style.display = 'none';
                                }
                            }
                        }).open();
                    }
                </script>
            </div>
        </div>
    <?php include_once "inc/footer.php"; ?>
</body>
</html>