<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sub02</title>
  <!-- 파비콘 -->
  <link rel="icon" href="./images/common/favicon.png" type="image/x-icon">
  <!-- style css-->
  <link rel="stylesheet" href="./css/import.css">
  <!-- hover -->
  <link rel="stylesheet" type="text/css" href="./Hover/HoverEffectIdeas-master/css/set2.css" />
  <!-- 애니메이션 -->
  <link rel="stylesheet" href="./kissui/example/css/kissui.css">
  <!-- 더보기 버튼-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/custom.js"></script>
  <!-- 더보기 버튼 hover -->
  <link rel="stylesheet" type="text/css" href="./LineHover/LineHoverStyles-main/css/base.css" />
  <!-- 팝업스크립트 -->
  <script src="./js/Popup.js"></script>
  <!-- 버튼 스크립트 -->
  <script>
    document.documentElement.className = "js"; var supportsCssVars = function (
    ) {
      var e, t = document.createElement("style"); return t.innerHTML = "root: { --tmp-var: bold; }",
        document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports
          ("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
    }; supportsCssVars(
    ) || alert("Please view this demo in a modern browser that supports CSS Variables.");
  </script>


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

   
  <!-- header -->
     <?php
     include ("./header.php")
     ?>

  <!-- visual -->
  <section id="sub02_visual">
    <div class="inner">
      <div class="title">
        <h2><img src="./images/sub02/sub02_brand_logo.svg" alt="브랜드로고"></h2>
        <p>현대백화점과 한섬이 추구하는 특별한 가치와 새로운 경험을 제공하는<br> 차별화된 패션, 라이프 복합 편집숍</p>
        <p class="m_500">현대백화점과 한섬의 차별화된 패션, 라이프 복합 편집숍</p>
      </div>
    </div><!--inner -->
  </section> <!-- sub02_visual -->

  <!--sub02_c01"  -->
  <section id="sub02_c01">
    <div class="inner">
      <h3>브랜드소개</h3>
      <!-- PC -->
      <div class="c01_left">
        <figure class="effect-apollo"><img src="./images/sub02/sub02_c01_01.png" alt="c01">
          <figcaption>
            <p>폼(FOURM)</p>
            <p>고급스럽고 세련된 여성복을 제안하는 수입 플래티넘 편집숍</p>
            <p>#Sophisticated & Exquisite Luxury</p>
          </figcaption>
        </figure>
        <p class="shop"><a href="#">매장안내</a></p>
      </div>

      <!-- 모바일 -->
      <div class="c01_left_m">
        <figure class="effect-apollo"><img src="./images/sub02/sub02_c01_m01.png" alt="c01">
          <figcaption>
            <p>폼(FOURM)</p>
            <p>고급스럽고 세련된 여성복을 제안하는 수입 플래티넘 편집숍</p>
            <p>#Sophisticated & Exquisite Luxury</p>
          </figcaption>
        </figure>
        <p class="shop"><a href="#">매장안내</a></p>
      </div>

      <!-- PC -->
      <div class="c01_right">
        <figure class="effect-apollo_right"><img src="./images/sub02/sub02_c01_02.png" alt="c01">
          <figcaption>
            <p>폼 라운지(FOURM LOUNGE)</p>
            <p>차별화된 프리미엄 브랜드로 구성된 라이프스타일 & 잡화 전문 편집숍</p>
            <p>#Sophisticated & Exquisite Luxury</p>
          </figcaption>
        </figure>
        <p class="shop"><a href="#">매장안내</a> </p>
        <p class="online"><a href="#">온라인몰</a></p>
      </div>

      <!-- 모바일 -->
      <div class="c01_right_m">
        <figure class="effect-apollo_right"><img src="./images/sub02/sub02_c01_m02.png" alt="c01">
          <figcaption>
            <p>폼 라운지(FOURM LOUNGE)</p>
            <p>차별화된 프리미엄 브랜드로 구성된 라이프스타일 & 잡화 전문 편집숍</p>
            <p>#Sophisticated & Exquisite Luxury</p>
          </figcaption>
        </figure>
        <p class="shop"><a href="#">매장안내</a> </p>
        <p class="online"><a href="#">온라인몰</a></p>
      </div>
    </div> <!--inner -->
  </section><!-- sub02_c01 -->

  <!-- sub02_c02 -->
  <section id="sub02_c02">
    <div class="inner">
      <h3>브랜드 뉴스</h3>
    </div>

    <div class="News">
      <!-- 01 -->
      <div class="more">
        <div class="c02_1">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>FOURM LOUNGE 기프트 가이드</h4>
                <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>FOURM LOUNGE 기프트 가이드</h4>
                <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_1 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      <!-- 02 -->
      <div class="more">
        <div class="c02_2">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>트랜스페어런트 스피커</h4>
                <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>트랜스페어런트 스피커</h4>
                <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>New Blossom 🌼🌹♥️</h4>
                <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>New Blossom 🌼🌹♥️</h4>
                <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_2 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      <!-- 03 -->
      <div class="more">
        <div class="c02_3">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>피에르 루이 마시아</h4>
                <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>피에르 루이 마시아</h4>
                <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>3.1 Phillip Lim</h4>
                <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>3.1 Phillip Lim</h4>
                <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_3 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      <!-- 더보기 -->
        <!-- 01 -->
        <div class="more">
          <div class="c02_1">
            <!-- pc&태블릿 -->
            <figure class="first" data-kui-anim="fadeInLeft">
              <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>FOURM LOUNGE 기프트 가이드</h4>
                  <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                  <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="first_m">
              <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>FOURM LOUNGE 기프트 가이드</h4>
                  <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                  <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
                </div>
              </div>
            </figure>
  
            <!-- pc&태블릿 -->
            <figure class="last" data-kui-anim="fadeInRight">
              <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                  <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                  <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="last_m">
              <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                  <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                  <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
                </div>
              </div>
            </figure>
          </div><!--more  -->
        </div> <!-- c02_1 -->
        <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>
  
        <!-- 02 -->
        <div class="more">
          <div class="c02_2">
            <!-- pc&태블릿 -->
            <figure class="first" data-kui-anim="fadeInLeft">
              <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>트랜스페어런트 스피커</h4>
                  <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                  <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="first_m">
              <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>트랜스페어런트 스피커</h4>
                  <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                  <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- pc&태블릿 -->
            <figure class="last" data-kui-anim="fadeInRight">
              <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>New Blossom 🌼🌹♥️</h4>
                  <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                  <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="last_m">
              <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>New Blossom 🌼🌹♥️</h4>
                  <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                  <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
                </div>
              </div>
            </figure>
          </div><!--more  -->
        </div> <!-- c02_2 -->
        <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>
  
        <!-- 03 -->
        <div class="more">
          <div class="c02_3">
            <!-- pc&태블릿 -->
            <figure class="first" data-kui-anim="fadeInLeft">
              <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>피에르 루이 마시아</h4>
                  <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                  <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="first_m">
              <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>피에르 루이 마시아</h4>
                  <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                  <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- pc&태블릿 -->
            <figure class="last" data-kui-anim="fadeInRight">
              <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>3.1 Phillip Lim</h4>
                  <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                  <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
                </div>
              </div>
            </figure>
  
            <!-- 모바일 -->
            <figure class="last_m">
              <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
              <div class="popup">
                <img class="popupImage" src="" alt="Popup Image">
                <div class="popupText">
                  <h4>3.1 Phillip Lim</h4>
                  <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                  <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
                </div>
              </div>
            </figure>
          </div><!--more  -->
        </div> <!-- c02_3 -->
        <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

          <!-- 01 -->
      <div class="more">
        <div class="c02_1">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>FOURM LOUNGE 기프트 가이드</h4>
                <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_01.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>FOURM LOUNGE 기프트 가이드</h4>
                <p>한섬의 FOURM LOUNGE가 스타일조선과 함께한 5월 기프트 가이드를 만나보세요.</p>
                <p>클래식부터 캐주얼까지 다양한 제품들이 준비되어 있습니다.🎁💝</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_02.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4> 폼이 제안하는 2024 S/S 컬렉션🍀</h4>
                <p>어깨 꼬임 디테일의 '디아볼로' 드레스, 티어드 밑단의 '아스터' 드레스</p>
                <p>아이코닉 라운드 로프 소가죽 '건터 파스망트리' 백이 소개됩니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_1 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      <!-- 02 -->
      <div class="more">
        <div class="c02_2">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>트랜스페어런트 스피커</h4>
                <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_03.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>트랜스페어런트 스피커</h4>
                <p>트랜스페어런트는 북유럽 감성으로 디자인된 오디오 브랜드입니다. </p>
                <p>투명한 강화유리와 알루미늄 프레임을 사용하여 간결한 디자인과 풍부한 음향을 제공합니다.</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>New Blossom 🌼🌹♥️</h4>
                <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_04.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>New Blossom 🌼🌹♥️</h4>
                <p>스타일H 4월호 속 폼이 제안하는 스프링 룩은 화사한 봄을 느낄 수 있는 방법을 소개합니다.</p>
                <p>화려한 봄꽃을 사는 것과 럭셔리 편집숍 폼이 선택한 스프링 룩을 입고 거리를 즐기는 것입니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_2 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      <!-- 03 -->
      <div class="more">
        <div class="c02_3">
          <!-- pc&태블릿 -->
          <figure class="first" data-kui-anim="fadeInLeft">
            <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>피에르 루이 마시아</h4>
                <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="first_m">
            <img src="./images/sub02/sub02_c02_05.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>피에르 루이 마시아</h4>
                <p>프랑스 일러스트 전문가인 피에르 루이 마시아가 런칭한 프린트 및 패턴 전문 브랜드입니다. </p>
                <p>시선을 사로잡는 디테일과 고급스러운 우아함을 풍기며, 현대백화점 에서 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- pc&태블릿 -->
          <figure class="last" data-kui-anim="fadeInRight">
            <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>3.1 Phillip Lim</h4>
                <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>

          <!-- 모바일 -->
          <figure class="last_m">
            <img src="./images/sub02/sub02_c02_06.png" alt="02" onclick="showPopup(this)">
            <div class="popup">
              <img class="popupImage" src="" alt="Popup Image">
              <div class="popupText">
                <h4>3.1 Phillip Lim</h4>
                <p>뉴욕 베이스의 3.1 Phillip Lim은 간결한 실루엣에 독특한 디테일을 </p>
                <p>더하여 섬세하면서도 시크한 무드를 전달합니다. 폼에서는 이를 만날 수 있습니다.</p>
              </div>
            </div>
          </figure>
        </div><!--more  -->
      </div> <!-- c02_3 -->
      <div id="popupOverlay" class="popup-overlay" onclick="hidePopup()"></div>

      
    </div><!-- News -->
  </section> <!-- sub02_c02 -->

  <div class="buttom_more">
    <p class="link link--metis"><a href="#">More</a></p>
  </div>


  <!-- footer -->
  <?php
  include ("./footer.php")
  ?>
  <script src='./kissui/build/scrollanim.min.js'></script>
</body>
</html>