<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sub01</title>
  <!-- 파비콘 -->
  <link rel="icon" href="./images/common/favicon.png" type="image/x-icon">
  <!-- style css-->
  <link rel="stylesheet" href="./css/import.css">
  <!-- c01 tab 스크립트 -->
  <script src="./Tab/js/cbpFWTabs.js"></script>
  <!-- c05 tab 스크립트 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Swiper JS&CSS -->
  <script src="./swiper-5/swiper-5/package/js/swiper.min.js"></script>
  <link rel="stylesheet" href="./swiper-5/swiper-5/package/css/swiper.css">
  <!-- hover -->
  <link rel="stylesheet" type="text/css" href="./Hover/HoverEffectIdeas-master/css/set1.css" />
  <!-- 애니메이션 -->
  <link rel="stylesheet" href="./kissui/example/css/kissui.css">
  <!-- <script src="./js/s_gambit-smoothscroll-min.js"></script> --> <!--마우스 스크롤 부드럽게-->
</head>
<!--버튼 숨김/나타남 스크립트-->

<!-- <script> 
  $(function() {
    $(window).scroll(function() { 
      if ($(this).scrollTop() > 200) { 
        $('#topBtn').fadeIn(); } 
      else { $('#topBtn').fadeOut(); }
    }); 
    $("#topBtn").click(function() { 
       $('html, body').animate({ scrollTop : 0  }, 400); 
      return false; });
  });
  </script>-->

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
   include ("./header.php")
   ?>


  <section id="sub01_visual">
    <div class="inner">
      <div class="v_title">
        <figure><img src="./images/sub01/sub01_visual.png" alt="visual"></figure>
        <h2 data-kui-anim="fadeInLeft">THE HYUNDAI SEOUL</h2>
      </div>
    </div><!-- inner -->
  </section><!-- visual -->

  <section id="sub01_c01">
    <div class="inner">
      <div id="tabs" class="tabs01">
        <nav>
          <ul>
            <li><a href="#section-1"><span>한눈에 보기</span></a></li>
            <li><a href="#section-2"><span>층별 안내</span></a></li>
            <li><a href="#section-3"><span>행사 안내</span></a></li>
            <li><a href="#section-4"><span>CH 1985</span></a></li>
            <li><a href="#section-5"><span>서비스 시설</span></a></li>
          </ul>
        </nav>
        <div class="content">
          <section id="section-1">
            <div class="left">
              <h3>더현대 서울</h3>
              <p>오늘의 영업시간은<br> <strong>10:30 ~ 20:00</strong> 입니다.</p>

              <ul class="weekday">
                <li>평일(월~목)</li>
                <li>10:30 ~ 20:00</li>
              </ul>

              <ul class="weekend">
                <li>주말(금~일)</li>
                <li>10:30 ~ 20:00</li>
              </ul>

              <ul class="food">
                <li>식당가</li>
                <li>10:30 ~ 20:00</li>
              </ul>
            </div><!-- left -->

            <div class="center">
              <ul class="call">
                <li>대표전화</li>
                <li>02-767-2233</li>
              </ul>

              <ul class="close">
                <li>휴점일</li>
                <li>06.17(월)</li>
              </ul>
            </div><!--center-->

            <!-- 모바일 -->
            <div id=c01_m>
                <h3>더현대 서울</h3>
                <p>오늘의 영업시간은<strong>10:30 ~ 20:00</strong> 입니다.</p>

                <div class="left_m">
                <ul class="weekday">
                  <li>평일(월~목)</li>
                  <li>10:30 ~ 20:00</li>
                </ul>

                <ul class="weekend">
                  <li>주말(금~일)</li>
                  <li>10:30 ~ 20:00</li>
                </ul>

                <ul class="food">
                  <li>식당가</li>
                  <li>10:30 ~ 20:00</li>
                </ul>
              </div><!-- left -->

              <div class="center_m">
                <ul class="call">
                  <li>대표전화</li>
                  <li>02-767-2233</li>
                </ul>

                <ul class="close">
                  <li>휴점일</li>
                  <li>06.17(월)</li>
                </ul>
              </div><!--center-->
            </div>
            <!-- 모바일 -->

            <!-- 선 -->
            <div class="divider"></div>
            <!-- 선 -->

            <div class="right">
              <div class="calendar">
                <div class="header">
                  <div class="year-month"></div>
                  <div class="nav">
                    <button class="nav-btn go-prev" onclick="prevMonth()">&lt;</button>
                    <button class="nav-btn go-today" onclick="goToday()">Moth</button>
                    <button class="nav-btn go-next" onclick="nextMonth()">&gt;</button>
                  </div>
                </div>
                <div class="main">
                  <div class="days">
                    <div class="day sunday">S</div>
                    <div class="day">M</div>
                    <div class="day">T</div>
                    <div class="day">W</div>
                    <div class="day">T</div>
                    <div class="day">F</div>
                    <div class="day saturday">S</div>
                  </div>
                  <div class="dates"></div>
                </div>
              </div><!--calendar  -->

              <p><img src="./images/sub01/sub01_c01_store.png">연장 영업</p>
              <p><img src="./images/sub01/sub01_c01_closed.png">휴점</p>
            </div><!-- right -->
          </section> <!-- section-1-->

          <section id="section-2">
            준비중
          </section>

          <section id="section-3">
            준비중
          </section>

          <section id="section-4">
            준비중
          </section>

          <section id="section-5">
            준비중
          </section>
        </div><!-- /content -->
      </div><!-- /tabs -->
    </div><!-- inner -->
  </section><!-- c01 -->

  <!-- 달력 스크립트 -->
  <script src="./calendar/index.js"></script>

  <!--c01 스크립트 -->
  <script>
    new CBPFWTabs(document.getElementById('tabs'));
  </script>

  <section id="sub01_c02">
    <div class="inner">
      <div class="app">
        <figcaption class="sub02_text">
          <p>백화점 카드 결제, 주차쿠폰,식당가 예약까지</p>
          <h3>또 하나의 백화점<br>현대백화점 APP</h3>
        </figcaption>
        <figure><img src="./images/sub01/sub01_c02_app.png" alt="c02"></figure>
      </div>

      <div class="grocery">
        <figcaption class="sub02_text">
          <p>유익한 식료품 이야기</p>
          <h3>그로서리 가이드</h3>
        </figcaption>
        <figure><img src="./images/sub01/sub01_c02_grocery.png" alt="c02"></figure>
      </div>
    </div><!-- inner -->
  </section><!-- c02 -->

  <section id="sub01_c03">
    <div class="inner">
      <h3>행사 안내</h3>
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_01.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 2024 WATERBOMB</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_02.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 르메메</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_03.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 츄바스코</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_01.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 2024 WATERBOMB</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_02.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 르메메</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure>
              <img src="./images/sub01/sub01_c03_03.png" alt="c03">
              <figcaption>
                <p>[POP-UP] 츄바스코</p>
                <p>05.30(목) ~ 06.05(수)</p>
              </figcaption>
            </figure>
          </div>
        </div><!-- swiper-wrapper -->
      </div><!-- swiper-container -->
    </div><!-- inner -->
  </section><!-- c03 -->

  <!-- c03 스트립트 -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        380: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        500: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        750: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1000: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 35,
        },
      }
    });
  </script>

  <section id="sub01_c04">
    <div class="inner">
      <h3>식당가</h3>
      <div class="c04_pc">
      <figure class="effect-zoe">
        <img src="./images/sub01/sub04_c01.png" alt="c04">
        <figcaption>
          <p>이탈리</p>
        </figcaption>
      </figure>

      <figure class="effect-zoe">
        <img src="./images/sub01/sub04_c02.png" alt="c04">
        <figcaption>
          <p>카페 레이어드</p>
        </figcaption>
      </figure>

      <figure class="effect-zoe">
        <img src="./images/sub01/sub04_c03.png" alt="c04">
        <figcaption>
          <p>호우섬</p>
        </figcaption>
      </figure>

      <figure class="effect-zoe">
        <img src="./images/sub01/sub04_c04.png" alt="c04">
        <figcaption>
          <p>아임유부</p>
        </figcaption>
      </figure>
    </div>

<!-- 모바일 -->
<div class="c04_m">
  <figure class="effect-zoe_m">
    <img src="./images/sub01/sub04_c01_m.png" alt="c04">
    <figcaption>
      <p>이탈리</p>
    </figcaption>
  </figure>

  <figure class="effect-zoe_m">
    <img src="./images/sub01/sub04_c02_m.png" alt="c04">
    <figcaption>
      <p>카페 레이어드</p>
    </figcaption>
  </figure>

  <figure class="effect-zoe_m">
    <img src="./images/sub01/sub04_c03_m.png" alt="c04">
    <figcaption>
      <p>호우섬</p>
    </figcaption>
  </figure>

  <figure class="effect-zoe_m">
    <img src="./images/sub01/sub04_c04_m.png" alt="c04">
    <figcaption>
      <p>아임유부</p>
    </figcaption>
  </figure>
</div>


    </div><!-- inner -->
  </section><!-- c04 -->

  <section id="sub01_c05">
    <div class="inner">
      <h3>오시는 길</h3>
      <div id="tabs" class="tabs2">
        <nav>
          <ul>
            <li><a href="#section2-1" class="icon-shop"><span>주차안내</span></a></li>
            <li><a href="#section2-2" class="icon-cup"><span>지하철</span></a></li>
            <li><a href="#section2-3" class="icon-food"><span>버스</span></a></li>
          </ul>
        </nav>

        <div class="content">
          <!--section2-1-->
          <section id="section2-1">
            <figure><img src="./images/sub01/sub05_map.png" alt="c05">
              <figcaption>
                <p>서울 영등포구 여의대로 108, (여의도동,파크원) </p>
              </figcaption>
            </figure>
            <div class="text">
              <ul class="parking">
                <li>무료 주차 안내</li>
                <li>5만원 이상 구매 : 1시간</li>
                <li>10만원 이상 구매 : 2시간</li>
                <li>15만원 이상 구매 : 3시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>

              <ul class="parking_money">
                <li>주차요금</li>
                <li>최소 30분 무료 (초과시 10분당 : 2,000원)</li>
              </ul>

              <ul class="culture">
                <li>전시장, 문화센터 이용고객 무료 주차</li>
                <li>ALT.1 티켓소지 : 2시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>
            </div>
          </section>

          <!--section2-2-->
          <section id="section2-2">
            <figure><img src="./images/sub01/sub05_map.png" alt="c05">
              <figcaption>
                <p>서울 영등포구 여의대로 108, (여의도동,파크원) </p>
              </figcaption>
            </figure>
            <div class="text">
              <ul class="parking">
                <li>지하철 안내</li>
                <li>5만원 이상 구매 : 1시간</li>
                <li>10만원 이상 구매 : 2시간</li>
                <li>15만원 이상 구매 : 3시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>

              <ul class="parking_money">
                <li>주차요금</li>
                <li>최소 30분 무료 (초과시 10분당 : 2,000원)</li>
              </ul>

              <ul class="culture">
                <li>전시장, 문화센터 이용고객 무료 주차</li>
                <li>ALT.1 티켓소지 : 2시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>
            </div>
          </section>

          <!--section2-3-->
          <section id="section2-3">
            <figure><img src="./images/sub01/sub05_map.png" alt="c05">
              <figcaption>
                <p>서울 영등포구 여의대로 108, (여의도동,파크원) </p>
              </figcaption>
            </figure>
            <div class="text">
              <ul class="parking">
                <li>버스 안내</li>
                <li>5만원 이상 구매 : 1시간</li>
                <li>10만원 이상 구매 : 2시간</li>
                <li>15만원 이상 구매 : 3시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>

              <ul class="parking_money">
                <li>주차요금</li>
                <li>최소 30분 무료 (초과시 10분당 : 2,000원)</li>
              </ul>

              <ul class="culture">
                <li>전시장, 문화센터 이용고객 무료 주차</li>
                <li>ALT.1 티켓소지 : 2시간</li>
                <li>CH1985 수강고객 : 2시간</li>
              </ul>
            </div>
          </section>
        </div><!-- /content -->
      </div><!-- /tabs -->
    </div><!-- inner -->
  </section><!-- c05 -->

  <!--c05 스크립트 -->
  <script src="./js/c05_tab.js"></script>

  <!--top버튼-->
  <!-- <a id="topBtn" href="#">TOP</a> -->

  <!-- footer -->
  <footer>
    <div class="f_inner">
      <div class="f_logo">
        <h2><img src="./images/common/f_logo.svg" alt="하단로고"></h2>
      </div>

      <div class="f_text">
        <ul class="first">
          <li>주식회사 현대백화점 대표이사 : 정지영 외 1인</li>
          <li>사업자등록번호 : 211-87-21455</li>
          <li>사업자등록확인 통신판매업 신고 : 강남-01882</li>
        </ul>

        <ul class="second">
          <li>개인정보관리책임 : 회원운영관리담당 박근호</li>
          <li>서울시 강남구 테헤란로 98길 12</li>
          <li>현대백화점 대표전화 : 02. 549. 2233</li>
        </ul>

        <p class="copyright">© Hyundai Department Store. All rights reserved.</p>

      </div>

      <div class="f_right">
        <ul>
          <li><a href="#">투자정보</a></li>
          <li class="F_SITE">FAMILY SITE </li>
          <li class="down"><img src="./images/common/down.svg" alt="down_icon"></li>
        </ul>
      </div>
    </div><!-- inner -->
  </footer>

  <footer class="m-footer">
    <div class="inner">
      <h2><img src="./images/common/f_logo.svg" alt="m-footer"></h2>

      <div class="f-right">
        <ul>
          <li><a href="#">투자정보</a></li>
          <li class="F_SITE">FAMILY SITE </li>
          <li class="down"><img src="./images/common/down.svg" alt="down_icon"></li>
        </ul>
      </div>

      <div class="text">
        <ul>
          <li>주식회사 현대백화점 대표이사 : 정지영 외 1인</li>
          <li>사업자등록번호 : 211-87-21455</li>
          <li>사업자등록확인 통신판매업 신고 : 강남-01882</li>
          <li>개인정보관리책임 : 회원운영관리담당 박근호</li>
          <li>서울시 강남구 테헤란로 98길 12</li>
          <li>현대백화점 대표전화 : 02. 549. 2233</li>
        </ul>
        <p class="copyright">© Hyundai Department Store. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <script src='./kissui/build/scrollanim.min.js'></script>
</body>

</html>