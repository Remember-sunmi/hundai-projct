<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>FAQ</title>
  <link rel="stylesheet" href="./css/import.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
   <!-- test custom cursor -->
   <div class="cursor"></div>
   <div class="cursor2">More</div>
   <!-- <div class="cursor3"></div> -->
 
 
   <script>
     let mouseCursor = document.querySelector(".cursor");
     let mouseCursorText = document.querySelector(".cursor2");
 
 
     window.addEventListener("scroll", cursor);
     window.addEventListener("mousemove", cursor);
     window.addEventListener("mousedown", cursor);
     window.addEventListener("mouseup", cursor);
 
 
 
     function cursor(e) {
       mouseCursor.style.left = e.pageX + "px";
       mouseCursor.style.top = e.pageY - scrollY + "px";
       mouseCursorText.style.left = e.pageX + "px";
       mouseCursorText.style.top = e.pageY - window.scrollY + "px";
     }
     document.addEventListener("DOMContentLoaded", function () {
       var links = document.querySelectorAll("img");
       var cursor = document.querySelector(".cursor");
 
       links.forEach(function (link) {
         link.addEventListener("mouseover", function () {
           mouseCursor.style.opacity = 0;
           mouseCursorText.style.opacity = 1;
         });
 
         link.addEventListener("mouseout", function () {
           mouseCursorText.style.opacity = 0;
           mouseCursor.style.opacity = 1;
         });
       });
     });
   </script>

  <?php
  include("./header.php")
  ?>
  

  <!-- sub04_c01 -->
  <section id="sub04_c01">
    <h1>FAQ</h1>

    <div class="faq">

      <form action="#" method="get">
        <input type="text" name="SEARCH" id="search" placeholder="검색어를 입력해 주세요.">
        <input type=image src="./images/sub04/search.png" id="s-bt" alt="검색 버튼">
      </form>

      <ul>
        <li><a href="#"># 교환</a>
        <li><a href="#"># 상품권</a>
        <li><a href="#"># 반려동물</a>
        <li><a href="#"># 개강</a>
        </li>
      </ul>
    </div><!--//faq-->
  </section><!--//c01-->


  <!-- sub04_c02 -->
  <section id="sub04_c02">
    <div class="container">
      <div id="tabs" class="tabs">
        <nav>
          <ul>
            <li><a href="#">전체</a></li>
            <li><a href="#">교환 · 환불</a></li>
            <li><a href="#">현대백화점카드</a></li>
            <li><a href="#">상품권</a></li>
            <li><a href="#">고객서비스</a></li>
            <li><a href="#">배송서비스</a></li>
            <li><a href="#">회원정보</a></li>
            <li><a href="#">클럽</a></li>
            <li><a href="#">문화센터</a></li>
          </ul>
        </nav>

        <div class="content">
          <section id="box01">
            <div class="info">
              <h3>전체(1515)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>결제일은 몇일이 있나요?</a>
                <p>
                  결제일은 1일, 5일, 10일, 15일, 18일, 24일, 26일 7가지가 있으며 신규/변경 후 2개월 이내에는 재변경이 불가능 합니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>결제방법이 자동이체인데 다른 방법으로 입금할 수
                  있나요?</a>
                <p>
                  인터넷 바로결제 및 가상계좌를 통해 입금하실 수 있습니다.<br>
                  단, 연체회원 및 결제일 당일에 바로결제 신청 또는 가상계좌로 입금하시는 경우, 자동이체계좌에서 이중 입금이 될 수 있사오니 주의하시기 바랍니다.<br><br><br>
                  '인터넷 바로결제' 이용 방법<br><br>
                  1. [홈페이지] → [카드·상품권·멤버십] → [나의 백화점카드] → [결제서비스] → [즉시결제] → [카드대금 바로결제 신청]<br>
                  2. [현대백화점 앱] → [우측상단 메뉴] → [즉시결제] 이용<br><br><br>
                  '가상계좌 입금' 이용 방법<br><br>
                  1. [홈페이지] → [나의 백화점카드] → [결제서비스] → [가상계좌 조회/신청]
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>비대면으로 현대백화점카드 신청이 가능한가요?</a>
                <p>
                  홈페이지, 현대백화점 APP을 통해 비대면으로 카드 신청이 가능합니다.<br>
                  카드를 신청한 경우 신청일로부터 약 3영업일 이내에 심사 담당자가 연락드려 카드 신청내용을 확인합니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>

          </section><!--//box01-->

          <script>
            document.addEventListener('DOMContentLoaded', function () {
              const paginationNumbers = document.querySelectorAll('.pagination .num');

              paginationNumbers.forEach(num => {
                num.addEventListener('click', function (event) {
                  event.preventDefault();

                  // Remove the 'active' class from all numbers
                  paginationNumbers.forEach(n => n.classList.remove('active'));

                  // Add the 'active' class to the clicked number
                  this.classList.add('active');
                });
              });
            });

          </script>

          <section id="box02">
            <div class="info">
              <h3>교환 · 환불 (52)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>교환 환불 기준은 무엇입니까?</a>
                <p>
                  현대백화점 교환/환불 기준은 아래와 같습니다.<br><br>
                  - 제품 구입 후 7일 이내 제품에 손상이 없는 경우: 공정위 고시에 의거한 소비자 분쟁해결기준에 근거함<br>
                  - 현대백화점에서 구입한 사실이 확인될 경우에 한함 : 영수증, 당사 가격표 등으로 판매사실 확인 要<br>
                  - 배송 후 식품/가전의 경우는 교환/환불 불가능
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>마음에 들지 않은 상품의 교환이나 환불 기준은?</a>
                <p>
                  사이즈, 디자인, 색상에 대한 불만 등 고객변심으로 인한 교환 및 환불은 원칙적으로 구입 후 7일 이내에 가능하며 <br>구입하신 상품과 영수증을 지참하시고 구입하신 매장으로 방문해
                  주시면
                  됩니다.<br><br>
                  단, 수선상품이나 상품에 손상이 있는 경우는 교환이나 환불이 불가능 합니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>비대면으로 현대백화점카드 신청이 가능한가요?</a>
                <p>
                  홈페이지, 현대백화점 APP을 통해 비대면으로 카드 신청이 가능합니다.<br>
                  카드를 신청한 경우 신청일로부터 약 3영업일 이내에 심사 담당자가 연락드려 카드 신청내용을 확인합니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box02-->

          <section id="box03">
            <div class="info">
              <h3>현대백화점 카드(88)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>결제일 변경이 안되는데 왜 그런가요?</a>
                <p>
                  결제대금이 미납 상태이시거나 결제일 변경이력이 2개월 이내에 있을 경우는 변경이 불가능합니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>비대면으로 현대백화점카드 신청이 가능한가요?</a>
                <p>
                  홈페이지, 현대백화점 APP을 통해 비대면으로 카드 신청이 가능합니다.<br>
                  카드를 신청한 경우 신청일로부터 약 3영업일 이내에 심사 담당자가 연락드려 카드 신청내용을 확인합니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>결제방법이 자동이체인데 다른 방법으로 입금할 수
                  있나요?</a>
                <p>
                  인터넷 바로결제 및 가상계좌를 통해 입금하실 수 있습니다.<br>
                  단, 연체회원 및 결제일 당일에 바로결제 신청 또는 가상계좌로 입금하시는 경우, 자동이체계좌에서 이중 입금이 될 수 있사오니 주의하시기 바랍니다.<br><br>

                  '인터넷 바로결제' 이용 방법<br>
                  1. [홈페이지] → [카드·상품권·멤버십] → [나의 백화점카드] → [결제서비스] → [즉시결제] → [카드대금 바로결제 신청]<br>
                  2. [현대백화점 앱] → [우측상단 메뉴] → [즉시결제] 이용<br><br>

                  '가상계좌 입금' 이용 방법<br>
                  1. [홈페이지] → [나의 백화점카드] → [결제서비스] → [가상계좌 조회/신청]
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box03-->

          <section id="box04">
            <div class="info">
              <h3>상품권(75)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>상품권의 유효기간이 언제까지 입니까?</a>
                <p>
                  상품권은 상사채권 소멸시효(5년)내에 사용하셔야 하지만, 현대백화점상품권은 고객의 편의를 위하여 유효기간이 경과하더라도 사용하실 수 있습니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>상품권 구입시 세금계산서 발행이 가능한가요?</a>
                <p>
                  상품권은 유가증권으로 분류되기 때문에 상품권 구입시에는 세금계산서가 발행되지 않습니다.<br>
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>상품권으로 카드대금을 납부할 수 있나요?</a>
                <p>
                  상품권은 유가증권으로서 금액에 상응하는 물품을 제공받는 것이며, <br>백화점 신용카드 회원규약 제8조 대금결제 조항에 카드대금은 원화로만 결제할 수 있도록 규정되어 있으므로
                  카드대금으로 납부하실 수 없습니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box04-->

          <section id="box05">
            <div class="info">
              <h3>고객서비스(214)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>반려동물과 백화점에 가려고 하는데 가능한가요?</a>
                <p>
                  비식품 매장은 전용 가방 & 애견 유모차 이용 시 출입이 가능합니다.<br>
                  가방 및 유모차 이용 시에도 커버(차양막)을 씌워야하며, 품에 안는것은 불가합니다.<br>
                  또한 식품관 · 식당가 · 카페의 경우, 반려동물 가방과 애견 유모차 이용 시에도 위생 안전을 위해 출입이 불가하오니 양해 부탁드립니다.<br><br>
                  (하늘 정원의 경우, 식품관 · 식당가 · 카페 기준 동일 적용)<br>
                  ('장애인 보조견' 및 '퍼피 워킹견' 의 경우 전시설 출입 가능)<br>
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>요즘 식품 위생에 대한 걱정이 많은데 현대백화점은 믿어도
                  될까요?</a>
                <p>
                  현대백화점에서는 고객님께 믿음을 드릴 수 있는 안전한 식품을 제공해 드리기 위해, 식품위생 전문가인 '식품 위생 감식관 제도'를 운영하고 있습니다.<br>
                  수퍼나 델리 매장에서 '전문 감식관'들이 조리 직원과 도구의 위생상태, 유통기한, 식품 보관상태들을 하루도 빠짐없이 꼼꼼하게 체크하고 있습니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>아기가 배가 고파요. 조용하게 수유할 공간 없나요?</a>
                <p>
                  유아와 함께 오신 고객님들을 위해 각 점의 아동층에서 유아휴게실을 운영하고 있습니다.<br>
                  수유공간, 수유기구 세척실, 유아용품 등은 물론 침대, 소파, 체중계 등 각종 편의 시설을 갖추고 있습니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box05-->

          <section id="box06">
            <div class="info">
              <h3>배송서비스(1515)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>배송 변경사항(취소 /배송일 연기 / 교환 등) 발생시 어디로
                  연락하면 됩니까?</a>
                <p>
                  구입하신 영업매장 연락처 또는 배송센터(080-463-2430)로 연락 주시면 즉시 처리해 드립니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>인수한 선물상품을 반송하고 싶은데 어떻게 하죠?</a>
                <p>
                  배송사원에게 즉시 반품하시거나 배송센터(080-463-2430)로 연락 주시면 즉시 처리해 드립니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>상품이 파손(훼손)되어 있는데 어떻게 해야 하나요?</a>
                <p>
                  배송사원 방문 시 확인된 경우 배송사원에게 즉시 반품 하시고, <br>상품인수 이후 확인 시 파손(훼손)된 상품을 잘 보관하시고 구입하신 영업매장 연락처 또는
                  배송센터(080-463-2430)로 연락 주시면<br> 24시간 이내 상품교환 처리해 드립니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box06-->

          <section id="box07">
            <div class="info">
              <h3>회원정보(23)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>개명을 한 경우 어떻게 변경하나요?</a>
                <p>
                  로그인 > 마이페이지 > 회원정보 변경 > 이름변경 메뉴에서 변경 가능합니다.<br>
                  이름 변경시 휴대폰, 아이핀, 공인인증서 중 하나의 방법으로 본인 인증 후 변경이 가능합니다.<br><br>
                  (NICE 신용정보에 등록되어 있는 고객님 성함을 기준으로 변경 가능합니다.)<br>
                  *H포인트 멤버십 정보 연동 체크시 H포인트 정보도 동일하게 변동됩니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>만 19세미만의 청소년도 회원가입이 가능한가요?</a>
                <p>
                  현대백화점 홈페이지는 H.Point 통합 멤버십 회원 가입을 기본으로 하고있습니다.<br>
                  H.Point 회원 가입은 만 14세 이상의 고객이 본인인증(휴대폰, 아이핀, 네이버,카카오) 후 가입 가능합니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>외국에 거주하는 사람도 회원가입이 가능한가요?</a>
                <p>
                  외국인인 경우 휴대폰 또는 아이핀 본인인증 후 H.Point 가입이 가능합니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box07-->

          <section id="box08">
            <div class="info">
              <h3>클럽(3)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>CLUB WEDDING 이란 무엇인가요?</a>
                <p>
                  CLUB WEDDING은 결혼을 앞둔 예비 신부 또는 신랑 회원분들께 9개월 동안 차별화된 혜택을 드리는 클럽 서비스입니다.<br>
                  9개월간의 웨딩 마일리지 혜택과 다양한 쇼핑/제휴 혜택을 드립니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>CLUB WEDDING 회원으로 가입하면 어떤 혜택이
                  있나요?</a>
                <p>
                  9개월간 현대백화점에서 구매한 누적 금액 구간대별 5% 상당 현대백화점 상품권을 드리는 '웨딩마일리지' 혜택을 이용하실 수 있습니다. .<br>또한 최대 10% 스페셜 리워드와
                  현대백화점카드 10만원 즉시 할인 혜택 및 다양한 제휴 혜택 등을 이용하실 수 있습니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>웨딩마일리지에 대하여 알고싶습니다.</a>
                <p>
                  웨딩마일리지는 예복,예물,가전,가구 등 혼수를 구입하실 때 적립하실 수 있습니다.<br><br>
                  적립대상<br>
                  클럽웨딩 회원<br><br>
                  증정기준<br>
                  300/500/700/1,000/1,500/2,000/3,000/4,000/5,000만원 이상 적립시,
                  15/25/35/50/75/100/150/200/250만원 상품권 증정<br><br>
                  적립기간<br>
                  가입 후 9개월간<br><br>
                  적립매장<br>
                  현대백화점 전점(아울렛 제외)<br><br>
                  적립방법<br>
                  클럽웨딩 가입 후 사전 등록된 적립카드(최대5개)로 결제시 익일 자동 적립<br><br>
                  *삼성Pay 등 모바일 페이 이용시 적립이 제외될 수 있습니다.<br>
                  *현금, 상품권으로 구매 또는 다른 사은행사에 참여하신 영수증은 마일리지 적립에서 제외됩니다.<br><br>
                  예외적립률<br>
                  50%적립:가전,골프용품,에르메스,고야드,오데마피게,피아제,리바트,일부 해외명품 브랜드<br>
                  적립제외:식품,아동,롤렉스,샤넬,루이비통(남성포함),까르띠에,반클리프아펠,불가리,부쉐론,타파니,몽클레르(앙팡 포함),튜더,임대매장<br>(문화센터,식당가 등) 일부 해외명품
                  브랜드<br>
                  *마일리지 적립 기준은 점별로 일부 상이합니다.<br><br>
                  정산방법<br>
                  적립기간 종료 후 3개월 이내 본인방문 정산<br>
                  *적립 금액은 분할하여 상품권을 증정하지 않습니다.<br>
                  *웨딩 마일리지 정산 후 상품 취소시, 적립 기준에 따라 수령 상품권을 반납하셔야 합니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box09-->

          <section id="box03">
            <div class="info">
              <h3>문화센터(434)</h3>
            </div>

            <ul class="accordion">
              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>CH1985 · 문화센터 강좌 신청시 할인 및 혜택이
                  있나요?</a>
                <p>
                  CH1985 · 문화센터 이용시 현대백화점 VIP고객의 경우 5회 이상 정규강좌에 한해서 5% 할인혜택이 가능합니다.<br>
                  현대백화점 계열사 카드로 결제시에는 11회 이상 정규강좌에 한하여 10~20%할인이 가능합니다.<br>
                  재료비는 할인에 포함되지 않으며, 강좌 수강료에 한해서만 할인이 가능합니다.<br>
                  (강좌 할인은 카드 소지자 본인에 한해서만 가능합니다.)
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>신청한 강좌의 개강,폐강은 언제 결정되나요?</a>
                <p>
                  강좌는 통상적으로 개강 1주일 전에 개강, 폐강이 결정됩니다.<br>
                  개강이 확정된다면 강좌 4일전 개강안내 문자가 발송되며, 폐강이 되는 경우엔 강좌일 5~7일 전 폐강안내 문자를 발송해 드립니다.
                </p>
              </li>

              <li>
                <a><span><img src="./images/sub04/q_icon.png" alt="qustion"></span>강사님의 연락처를 알고싶습니다.</a>
                <p>
                  개인정보 보호로 인하여 강사님의 연락처는 공개해 드리기가 어렵습니다. <br>
                  단, 강사님께 문의하실 내용을 직원에게 남겨주시면 직원이 강사님께 문의 후 답변을 전달 드리고 있습니다.
                </p>
              </li>
            </ul>

            <!-- test-pagination -->
            <div class="pag">
              <ul class="pagination modal">
                <li><a href="#" class="arrow-left"></a></li>
                <li><a href="#" class="num">1</a></li>
                <li><a href="#" class="num">2</a></li>
                <li><a href="#" class="num">3</a></li>
                <li><a href="#" class="num">4</a></li>
                <li><a href="#" class="num">5</a></li>
                <li><a href="#" class="num">6</a></li>
                <li><a href="#" class="arrow-right"></a></li>
              </ul>
            </div>
          </section><!--//box09-->
        </div><!--//content-->
      </div><!--//tabs-->
    </div><!--//container-->
  </section><!--//c02-->



  <script src="./js/sub04.js"></script>
  <script>
    new CBPFWTabs(document.getElementById('tabs'));
  </script>

  <script>
    (function ($) {
      //$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

      $('.accordion a').click(function (j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).closest('.accordion').find('a.active').removeClass('active');
          $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
      });
    })(jQuery);
  </script>

<?php
  include("./footer.php")
  ?>

</body>

</html>