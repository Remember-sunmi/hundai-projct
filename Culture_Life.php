<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>sub03</title>
  <link rel="icon" href="./images/common/favicon.png">
  <link rel="stylesheet" href="./css/import.css">
      <!-- Swiper JS -->
      <script src="./swiper-5/swiper-5/package/js/swiper.min.js"></script>
      <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="./swiper-5/swiper-5/package/css/swiper.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> <!--제이쿼리-->
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

  <!-- sub 03-->
  <?php
  include("./header.php")
  ?>

  <!-- visual -->
  <section id="sub03_visual"></section>

      <!-- c01_ pc -->
    <h1 class="c01_h1">Best Class</h1>
    <section id="sub03_c01">
      <div class="group">
        <div class="item clickable" style="background-image: url(./images/sub03/c01_1.png)">
          <div class="text textToShow">
        <h3>CH 1995 X 파브리아노 부티크</h3>
        <p>Fabriano Boutique는 La Bella carta dal 1264  파브리아노의 <br> 760년 전통을 함께하는
        전 세계 최상위 이탈리아 아트 컬렉션 브랜드로<br>
          많은 아티스트들이 참여하는 다양한 워크숍을 함께 진행합니다.
        </p>
      </div><!--//text-->
        </div><!--//item-->

        <div class="item clickable" style="background-image: url(./images/sub03/c01_2.png)">
          <div class="text textToShow">
          <h3>CH 1995 X 휘슬러 쿠킹쇼</h3>
          <p>다가올 여름 맞이 보양식으로도 안성맞춤.<br>
          토종닭 케세롤 원 팬요리를 직접 만들어 보고, 휘슬러 압력솥으로<br>
          갓 지은 건강한 나물밥도 맛 볼 수 있는 휘슬러 쿠킹쇼입니다.</p>
        </div><!--//text-->
      </div><!--//item-->


        <div class="item clickable" style="background-image: url(./images/sub03/c01_3.png)">
          <div class="text textToShow">
          <h3>국내 1위 홈 피트니스 플랫폼 콰트와 <br> 함께하는 헬스 코칭 프로젝트</h3>
          <p>인스타그램 817k 홈트여신 다솔맘의<br> 슬림탄탄 핏 완성한느 다이어트 타바타 &<br>
            아이돌에서 요가 강사로 박소리의 몸과 마음을 깨우는 빈야사 요가
          </p>
        </div><!--//text-->
      </div><!--//item-->


        <div class="item clickable" style="background-image: url(./images/sub03/c01_4.png)">
          <div class="text textToShow">
          <h3>Tennieping Special Day</h3>
          <p>
            아름다운 음악과 귀여운 티니핑들로 꾸며진 소품을 활용하여<br>
            즐겁고 신나게 발레를 배워보는 티니핑 데이! <br>
            아이들에게 행복한 꿈과 추억을 선물하세요.
          </p>
        </div><!--//text-->
      </div><!--//item-->
        
      </div><!--//group-->
    </section>

    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script  src="./js/sub03.js"></script>
    <script>
      document.querySelectorAll('.clickable').forEach(function(item) {
          item.addEventListener('click', function() {
              // 모든 텍스트 요소 숨기기
              document.querySelectorAll('.text').forEach(function(text) {
                  text.classList.remove('show');
              });

                  // 모든 아이템의 활성화 클래스 제거
                  document.querySelectorAll('.item').forEach(function(i) {
                    i.classList.remove('active');
                });


                // 클릭된 아이템에 활성화 클래스 추가
                item.classList.add('active');


              // 클릭된 요소의 텍스트 요소 가져오기
              var textElement = item.querySelector('.text');
              
              // h3 요소와 p 요소 가져오기
              var h3Element = textElement.querySelector('h3');
              var pElement = textElement.querySelector('p');
              
              // h3 요소와 p 요소 각각 다른 시간에 표시
              textElement.style.display = 'block';
              setTimeout(function() {
                  textElement.classList.add('show');
              }, 100); // 0.1초 후 텍스트 표시 시작
          });
      });
  </script>

  <!-- sub03_c01 mobile -->
  <section id="sub03_c01_m">
    <h1>Best Class</h1>
    <div class="inner">
      
      <figure>
        <img src="./images/sub03/c01_m_1.png" alt="c01_mi">
        <figcaption>
          <h3>CH 1995 X 파브리아노 부티크</h3>
        </figcaption>
      </figure>

      <figure>
        <img src="./images/sub03/c01_m_2.png" alt="c01_mi">
        <figcaption>
          <h3>CH 1995 X 휘슬러 쿠킹쇼</h3>
        </figcaption>
      </figure>

      <figure>
        <img src="./images/sub03/c01_m_3.png" alt="c01_mi">
        <figcaption>
          <h3>플랫폼 콰트와 함께하는 헬스 코칭</h3>
        </figcaption>
      </figure>

      <figure>
        <img src="./images/sub03/c01_m_4.png" alt="c01_mi">
        <figcaption>
          <h3>Tennieping Special Day</h3>
        </figcaption>
      </figure>


    </div><!--//inner-->

  </section><!--//sub03_c01_m-->


  <!-- sub03_c02  -->
  <section id="sub03_c02">
    <h1>Category</h1>
    <select id="tab-select">
      <option value="tab1">문화·예술</option>
      <option value="tab2">쿠킹</option>
      <option value="tab3">피트니스</option>
      <option value="tab4">키즈</option>
    </select>

    

<!-- tab1(문화·예술) -->
 <div id="tab1" class="tab-content active">
    <div class="inner">
      <div class="left">
        <p><img src="./images/sub03/c02-left.png" alt="c02_left"></p>
      </div><!--//left-->


      <div class="sub03_swiper-container10 swiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right01.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>목공방 정근날과 함께하는 원목 도마 만들기</h4>
                <h5>2024.05.29(수) 14:00-15:30<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">65,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right02.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>나만의 라탄 DIY 만들기</h4>
                <h5>2024.06.05(수) 18:30-20:00<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">60,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right03.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>디저트 TEA 페어링</h4>
                <h5>2024.06.03(월) 14:00-15:30<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">65,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right04.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>하루 만에 끝내는 스마트폰 사진 촬영과 보정</h4>
                <h5>2024.06.22(토) 13:00-14:30<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">30,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right05.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>흥미롭고 달콤한 유럽 이야기로 초대</h4>
                <h5>2024.06.23(일) 13:00-14:20<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">30,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

          <div class="swiper-slide">
            <div class="right">
              <p class="class-i"><img src="./images/sub03/c02-right06.png" alt="right"></p>
      
              <div class="text">
                <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
      
                <h4>서양미술 800년</h4>
                <h5>2024.06.25(화) 14:00-15:20<br>
                  (지상 6층 CH1985 스튜디오 C)</h5>
                <p class="price">30,000원</p>
      
                <div class="button">
                  <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                  <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                </div><!--//button-->
              </div><!--//text-->
            </div><!--//right-->
          </div><!--swiper-slide-->

        </div><!--swiper-wrapper-->
        </div><!--swiper-container10-->
      
    </div><!--//div.inner-->
    </div><!--tab-content01-->

    


    <!-- tab02(쿠킹) -->
    <div id="tab2" class="tab-content">
      <div class="inner">
        <div class="left">
          <p><img src="./images/sub03/c02-left2.png" alt="c02_left"></p>
        </div><!--//left-->
  
        <div class="sub03_swiper-container11 swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right01.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>목공방 정근날과 함께하는 원목 도마 만들기</h4>
                  <h5>2024.05.29(수) 14:00-15:30<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">65,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right02.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>나만의 라탄 DIY 만들기</h4>
                  <h5>2024.06.05(수) 18:30-20:00<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">60,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right03.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>디저트 TEA 페어링</h4>
                  <h5>2024.06.03(월) 14:00-15:30<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">65,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right04.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>하루 만에 끝내는 스마트폰 사진 촬영과 보정</h4>
                  <h5>2024.06.22(토) 13:00-14:30<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">30,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right05.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>흥미롭고 달콤한 유럽 이야기로 초대</h4>
                  <h5>2024.06.23(일) 13:00-14:20<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">30,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
            <div class="swiper-slide">
              <div class="right">
                <p class="class-i"><img src="./images/sub03/c02-right06.png" alt="right"></p>
        
                <div class="text">
                  <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                  <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
        
                  <h4>서양미술 800년</h4>
                  <h5>2024.06.25(화) 14:00-15:20<br>
                    (지상 6층 CH1985 스튜디오 C)</h5>
                  <p class="price">30,000원</p>
        
                  <div class="button">
                    <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                    <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                  </div><!--//button-->
                </div><!--//text-->
              </div><!--//right-->
            </div><!--swiper-slide-->
  
          </div><!--swiper-wrapper-->
          </div><!--swiper-container11-->
  
      </div><!--//div.inner-->
      </div><!--tab-content02-->


        <!-- tab03(피트니스) -->

        <div id="tab3" class="tab-content">
          <div class="inner">
            <div class="left">
              <p><img src="./images/sub03/c02-left3.png" alt="c02_left"></p>
            </div><!--//left-->
      
            <div class="sub03_swiper-container12 swiper3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right01.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>목공방 정근날과 함께하는 원목 도마 만들기</h4>
                      <h5>2024.05.29(수) 14:00-15:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">65,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right02.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>나만의 라탄 DIY 만들기</h4>
                      <h5>2024.06.05(수) 18:30-20:00<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">60,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right03.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>디저트 TEA 페어링</h4>
                      <h5>2024.06.03(월) 14:00-15:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">65,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right04.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>하루 만에 끝내는 스마트폰 사진 촬영과 보정</h4>
                      <h5>2024.06.22(토) 13:00-14:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right05.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>흥미롭고 달콤한 유럽 이야기로 초대</h4>
                      <h5>2024.06.23(일) 13:00-14:20<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right06.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>서양미술 800년</h4>
                      <h5>2024.06.25(화) 14:00-15:20<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
              </div><!--swiper-wrapper-->
              </div><!--swiper-container12-->
      
          </div><!--//div.inner-->
          </div><!--tab-content03-->

        <!-- tab04(키즈) -->
        <div id="tab4" class="tab-content">
          <div class="inner">
            <div class="left">
              <p><img src="./images/sub03/c02-left4.png" alt="c02_left"></p>
            </div><!--//left-->
      
            <div class="sub03_swiper-container13 swiper4">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right01.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>목공방 정근날과 함께하는 원목 도마 만들기</h4>
                      <h5>2024.05.29(수) 14:00-15:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">65,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right02.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>나만의 라탄 DIY 만들기</h4>
                      <h5>2024.06.05(수) 18:30-20:00<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">60,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right03.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>디저트 TEA 페어링</h4>
                      <h5>2024.06.03(월) 14:00-15:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">65,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right04.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>하루 만에 끝내는 스마트폰 사진 촬영과 보정</h4>
                      <h5>2024.06.22(토) 13:00-14:30<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right05.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>흥미롭고 달콤한 유럽 이야기로 초대</h4>
                      <h5>2024.06.23(일) 13:00-14:20<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
                <div class="swiper-slide">
                  <div class="right">
                    <p class="class-i"><img src="./images/sub03/c02-right06.png" alt="right"></p>
            
                    <div class="text">
                      <p class="icon"><img src="./images/sub03/c02-top_button1.png" alt="icon"></p>
                      <p class="icon"><img src="./images/sub03/c02-top_button2.png" alt="icon"></p>
            
                      <h4>서양미술 800년</h4>
                      <h5>2024.06.25(화) 14:00-15:20<br>
                        (지상 6층 CH1985 스튜디오 C)</h5>
                      <p class="price">30,000원</p>
            
                      <div class="button">
                        <a href="#"><img src="./images/sub03/c02-button1.png" alt="button"></a>
                        <a href="#"><img src="./images/sub03/c02-button2.png" alt="button"></a>
                      </div><!--//button-->
                    </div><!--//text-->
                  </div><!--//right-->
                </div><!--swiper-slide-->
      
              </div><!--swiper-wrapper-->
              </div><!--swiper-container13-->
          </div><!--//div.inner-->
          </div><!--tab-content04-->

  </section><!--//c02-->

    <!-- Initialize Swiper -->
    <script>
      var swiper1 = new Swiper('.swiper1', {
        
        slidesPerView: 3,
        spaceBetween: 0,
        direction: 'vertical',
        nested: true, // 중첩된 스와이프 허용
        allowTouchMove: false, // 스와이프 막기
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
        },
        499: {
          slidesPerView: 3,
        },
        2200: {
          slidesPerView: 3,
        },
        2800: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
      }
      });
      var swiper2 = new Swiper('.swiper2', {
        slidesPerView: 3,
        spaceBetween: 0,
        direction: 'vertical',
        nested: true, // 중첩된 스와이프 허용
        allowTouchMove: false, // 스와이프 막기
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
        },
        499: {
          slidesPerView: 3,
        },
        2200: {
          slidesPerView: 3,
        },
        2800: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
      }
      });
      var swiper3 = new Swiper('.swiper3', {
        slidesPerView: 3,
        spaceBetween: 0,
        direction: 'vertical',
        nested: true, // 중첩된 스와이프 허용
        allowTouchMove: false, // 스와이프 막기
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
        },
        499: {
          slidesPerView: 3,
        },
        2200: {
          slidesPerView: 3,
        },
        2800: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
      }
      });
      var swiper4 = new Swiper('.swiper4', {
        slidesPerView: 3,
        spaceBetween: 0,
        direction: 'vertical',
        nested: true, // 중첩된 스와이프 허용
        allowTouchMove: false, // 스와이프 막기
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
        },
        499: {
          slidesPerView: 3,
        },
        2200: {
          slidesPerView: 3,
        },
        2800: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
      }
      });
    </script>

<script>
  // Function to stop autoplay for all Swipers
function stopAllAutoplay() {
    swiper1.autoplay.stop();
    swiper2.autoplay.stop();
    swiper3.autoplay.stop();
    swiper4.autoplay.stop();
}

// Event listeners for tab switching
document.getElementById('tab-select').addEventListener('change', function() {
    var tabId = this.value;
    
    // Hide all tab contents and stop autoplay
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.remove('active');
    });
    stopAllAutoplay();
    
    // Show the selected tab content and start autoplay
    var selectedTab = document.getElementById(tabId);
    selectedTab.classList.add('active');
    
    if (tabId === 'tab1') {
        swiper1.update();
        swiper1.autoplay.start();
    } else if (tabId === 'tab2') {
        swiper2.update();
        swiper2.autoplay.start();
    } else if (tabId === 'tab3') {
        swiper3.update();
        swiper3.autoplay.start();
    } else if (tabId === 'tab4') {
        swiper4.update();
        swiper4.autoplay.start();
    }
});
</script>




  <!-- c03 -->

  <section id="sub03_c03">
    <h1>지점안내</h1>
    <div class="inner">
      <!-- Swiper -->
  <div class="sub03_swiper-container14">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <figure>
          <img src="./images/sub03/c03_06.png" alt="c03">
          <figcaption>
            <h3>더현대 서울</h3>
            <p>취향 커뮤니티 플랫폼</p>
          </figcaption>
        </figure>
      </div><!--//swiper-slide-->

      <div class="swiper-slide">
        <figure>
          <img src="./images/sub03/c03_01.png" alt="c03">
          <figcaption>
          <h3>압구정 본점</h3>
          <p>아트, 인문학, 웰니스 프리미엄 살롱</p>
        </figcaption>
        </figure>
      </div><!--//swiper-slide-->

      <div class="swiper-slide">
        <figure>
          <img src="./images/sub03/c03_02.png" alt="c03">
          <figcaption>
          <h3>중동점</h3>
          <p>뉴 프리미엄 라이프 스타일의 플랫폼</p>
        </figcaption>
        </figure>
      </div><!--//swiper-slide-->

      <div class="swiper-slide">
        <figure>
          <img src="./images/sub03/c03_05.png" alt="c03">
          <figcaption>
            <h3>더 현대 대구</h3>
            <p>트랜드의 중심, 독창적 감성 공존</p>
          </figcaption>
        </figure>
      </div><!--//swiper-slide-->

    </div><!--//swiper-wrapper-->
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
  </div><!--//swiper-container-->

    </div><!--//innder-->
  </section><!--//c03-->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.sub03_swiper-container14', {
        spaceBetween:10,
        pagination: {
        el: '.swiper-pagination',
      },
      });
    </script>


<?php
  include("./footer.php")
  ?>
</body>
</html>