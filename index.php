<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>현대백화점</title>
  <link rel="icon" href="./images/common/Favicon.svg">
  <link rel="stylesheet" href="./css/import.css">
  <!-- Swiper JS -->
  <script src="./swiper-5/swiper-5/package/js/swiper.js"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="./swiper-5/swiper-5/package/css/swiper.css">
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

<?php
include ("./header.php")
?>

  <!-- visual -->
  <section id="visual">
    <video muted autoplay loop>
      <source src="./images/main/visual_v.mp4">
    </video>
  </section><!--visual-->

  <!-- c01 -->
  <section id="c01">
    <h2>HIT POP!</h2>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p1.png" alt="pop" class="all">
            <figcaption>
              <h3>오크베리</h3>
              <h4>아마존의 슈퍼푸드<br>국내최초 팝업 런칭</h4>
              <p>2024.05.07 ~ 2024.06.02</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p2.png" alt="pop" class="all">
            <figcaption>
              <h3>드링크 스토어</h3>
              <h4>대만현지 프룻티&<br>밀크티 음료 맛집</h4>
              <p>2024.05.10 ~ 2024.05.16</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p3.png" alt="pop">
            <figcaption>
              <h3>쥬오베이커리</h3>
              <h4>좋은재료를 사용한<br>신선한 디저트</h4>
              <p>2024.05.10 ~ 2024.05.16</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p4.png" alt="pop">
            <figcaption>
              <h3>인사이드 아웃2</h3>
              <h4>픽사가 전하는 상상이상의<br>놀라운 상상력</h4>
              <p>2024.05.25 ~ 2024.06.16</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p5.png" alt="pop">
            <figcaption>
              <h3>갈레티에</h3>
              <h4>생소하지만 특별한<br>갈레티에만의 구움과자</h4>
              <p>2024.05.24 ~ 2024.05.30</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c01_p6.png" alt="pop">
            <figcaption>
              <h3>선재 업고 튀어</h3>
              <h4>tvn드라마<br>'선재 업고 튀어' 팝업스토어</h4>
              <p>2024.05.23 ~ 2024.05.29</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->
      </div><!--//swiper-wrapper-->
    </div><!--//swiper-container-->
  </section><!--//c01-->

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      //slidesPerView: 3,
      //spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        500: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1279: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        2200: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
        2800: {
          slidesPerView: 5,
          spaceBetween: 0,
        },
      }
    });
  </script>

  <!-- c02 -->
  <section id="c02">
    <div class="text">
      <h2>취향대로 살피는, BRAND</h2>
      <ul class="tab">
        <li><a href="javascript:;" OnClick='premier(1);product1();' id='premier_button1'>전체보기</a></li>
        <li><a href="javascript:;" OnClick='premier(2);product2();' id='premier_button2'>컨템포러리</a></li>
        <li><a href="javascript:;" OnClick='premier(3);product3()' id='premier_button3'>해외패션</a></li>
        <li><a href="javascript:;" OnClick='premier(4);product4()' id='premier_button4'>라이프스타일</a></li>
      </ul>
    </div><!--//text-->


    <div class="img">

      <!-- premier1 -->
      <div id='premier1' style="position:relative">
        <div class="swiper-container3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_1.png" alt="brand">
                <figcaption>
                  <h2>FOURM</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_2.png" alt="brand">
                <figcaption>
                  <h2>TOM GREYHOUND</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_3.png" alt="brand">
                <figcaption>
                  <h2>PEER</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_4.png" alt="brand">
                <figcaption>
                  <h2>THE BASH</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_5.png" alt="brand">
                <figcaption>
                  <h2>OFF WORKS</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_6.png" alt="brand">
                <figcaption>
                  <h2>LABELS</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_7.png" alt="brand">
                <figcaption>
                  <h2>SHOEPACE</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_8.png" alt="brand">
                <figcaption>
                  <h2>SHOE LIBRARY</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_9.png" alt="brand">
                <figcaption>
                  <h2>BE CLEAN</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_10.png" alt="brand">
                <figcaption>
                  <h2>WE, PET</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_11.png" alt="brand">
                <figcaption>
                  <h2>HBYH</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_12.png" alt="brand">
                <figcaption>
                  <h2>WE, MARKET</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_13.png" alt="brand">
                <figcaption>
                  <h2>LES PLATS H</h2>
                </figcaption>
              </figure>
            </div>





          </div><!--//swiper-wrapper-->
        </div><!--//swiper-container-->
        <!-- Initialize Swiper -->
        <script>
          product1();
          function product1() {
            var swiper = new Swiper('.swiper-container3', {
              slidesPerView: 2,
              spaceBetween: 50,
              //init: false,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              breakpoints: {
                1279: {
                  slidesPerView: 4,
                  spaceBetween: 40,
                },
                500: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                320: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                }
              }
            });
          } //함수끝
        </script>
      </div><!--//premier1-->

      <!-- premier2 -->

      <div id='premier2' style="position:relative">
        <div class="swiper-container4">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_1.png" alt="brand">
                <figcaption>
                  <h2>FOURM</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_2.png" alt="brand">
                <figcaption>
                  <h2>TOM GREYHOUND</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_3.png" alt="brand">
                <figcaption>
                  <h2>PEER</h2>
                </figcaption>
              </figure>
            </div>

          </div><!--//swiper-wrapper-->
        </div><!--//swiper-container-->
        <!-- Initialize Swiper -->
        <script>
          product2();
          function product2() {
            var swiper = new Swiper('.swiper-container4', {
              slidesPerView: 3,
              spaceBetween: 50,
              //init: false,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              breakpoints: {
                1279: {
                  slidesPerView: 4,
                  spaceBetween: 40,
                },
                500: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                320: {
                  slidesPerView: 2,
                  spaceBetween: 10,
                }
              }
            });
          } //함수끝
        </script>
      </div><!--//premier2-->

      <!-- premier3 -->
      <div id='premier3' style="position:relative">
        <div class="swiper-container5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_4.png" alt="brand">
                <figcaption>
                  <h2>THE BASH</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_5.png" alt="brand">
                <figcaption>
                  <h2>OFF WORKS</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_6.png" alt="brand">
                <figcaption>
                  <h2>LABELS</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_7.png" alt="brand">
                <figcaption>
                  <h2>SHOEPACE</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_8.png" alt="brand">
                <figcaption>
                  <h2>SHOE LIBRARY</h2>
                </figcaption>
              </figure>
            </div>

          </div><!--//swiper-wrapper-->
        </div><!--//swiper-container-->
        <!-- Initialize Swiper -->
        <script>
          product3();
          function product3() {
            var swiper = new Swiper('.swiper-container5', {
              slidesPerView: 4,
              spaceBetween: 50,
              //init: false,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              breakpoints: {
                1279: {
                  slidesPerView: 4,
                  spaceBetween: 40,
                },
                500: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                320: {
                  slidesPerView: 2,
                  spaceBetween: 10,
                }
              }
            });
          } //함수끝
        </script>
      </div><!--//premier3-->

      <!-- premier4 -->
      <div id='premier4' style="position:relative">
        <div class="swiper-container6">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_9.png" alt="brand">
                <figcaption>
                  <h2>BE CLEAN</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_10.png" alt="brand">
                <figcaption>
                  <h2>WE, PET</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_11.png" alt="brand">
                <figcaption>
                  <h2>HBYH</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_12.png" alt="brand">
                <figcaption>
                  <h2>WE, MARKET</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_13.png" alt="brand">
                <figcaption>
                  <h2>LES PLATS H</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_14.png" alt="brand">
                <figcaption>
                  <h2>명인명촌</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_15.png" alt="brand">
                <figcaption>
                  <h2>와인웍스</h2>
                </figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="./images/main/c02_16.png" alt="brand">
                <figcaption>
                  <h2>원테이블</h2>
                </figcaption>
              </figure>
            </div>

          </div><!--//swiper-wrapper-->
        </div><!--//swiper-container-->
        <!-- Initialize Swiper -->
        <script>
          product4();
          function product4() {
            var swiper = new Swiper('.swiper-container6', {
              slidesPerView: 4,
              spaceBetween: 50,
              //init: false,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              breakpoints: {
                1279: {
                  slidesPerView: 4,
                  spaceBetween: 40,
                },
                500: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                320: {
                  slidesPerView: 2,
                  spaceBetween: 10,
                }
              }
            });
          } //함수끝
        </script>
      </div><!--//premier4-->


    </div><!--//div.img-->
  </section><!--//c02-->

  <script language>
    premier(1); //처음에 활성화 시킬 탭 번호를 인수로 설정
    function premier(n) {
      for (var i = 1; i < 5; i++) {
        obj = document.getElementById('premier' + i);
        menu = document.getElementById('premier_button' + i);
        if (n == i) {
          obj.style.display = "block";
          menu.style.background = "";
          menu.style.color = "#A8CAD7";
        } else {
          obj.style.display = "none";
          menu.style.background = "";
          menu.style.color = "";
        }
      }
    }
  </script>

  <!-- c03 -->
  <section id="c03">
    <h2>Class</h2>
    <div class="swiper-button-next2"></div>
    <div class="swiper-button-prev2"></div>
    <!-- Swiper -->
    <div class="swiper-container2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p1.png" alt="class" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>우리가족 런치테이크아웃</h3>
              <h4>2024.05.29(수) 14:00-15:30<br>
                (지상 6층 CH1985 스튜디오 C)</h4>
              <p>65,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p2.png" alt="class" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>꿈의놀이터 세계동물탐험</h3>
              <h4>2024.05.30(목) 15:10-15:50<br>
                (지상 6층 CH1985 스튜디오 W)</h4>
              <p>20,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p3.png" alt="classs" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>우리만의 시그니처 커플베이킹</h3>
              <h4>2024.05.25(토) 18:30-20:00<br>
                (지상 6층 CH1985 스튜디오 C)</h4>
              <p>65,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p4.png" alt="classs" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>나를 새롭게 브랜딩하는 퍼퓸</h3>
              <h4>2024.05.29(수) 11:00-12:30<br>
                (지상 6층 CH1985 스튜디오 M)</h4>
              <p>65,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p5.png" alt="classs" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>퍼스널 컬러진단 & 이미지 메이킹</h3>
              <h4>2024.05.28(화) 13:30-15:00<br>
                (지상 6층 CH1985 스튜디오 C)</h4>
              <p>65,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c03_p6.png" alt="classs" class="classes">
            <figcaption>
              <p class="button1"><img src="./images/main/c03_p0.png" alt="button1"></p>
              <h3>Flow and Meditation 요가</h3>
              <h4>2024.06.01(토) 11:00-11:50<br>
                (지상 6층 CH1985 스튜디오 F)</h4>
              <p>65,000원</p>
            </figcaption>
          </figure>
        </div><!--//swiper-slide-->

      </div><!--//swiper-wrapper-->
    </div><!--//swiper-container2-->
  </section><!--//c03-->

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container2', {
      //slidesPerView: 2,
      //spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
      },
      breakpoints: {
        500: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1279: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        2200: {
          slidesPerView: 4,
          spaceBetween: 0,
        },
        2800: {
          slidesPerView: 5,
          spaceBetween: 0,
        },
      }
    });
  </script>

  <!-- c04 -->
  <section id="c04">
    <div class="inner">
      <h2>MAGAZINE</h2>

      <div class="thumb">
        <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#"><img src="./images/main/c04_L1.png" alt="R"></a>
            </div><!--//swiper-slide-->

            <div class="swiper-slide">
              <a href="#"><img src="./images/main/c04_L2.png" alt="R"></a>
            </div><!--//swiper-slide-->

            <div class="swiper-slide">
              <a href="#"><img src="./images/main/c04_L3.png" alt="R"></a>
            </div><!--//swiper-slide-->

            <div class="swiper-slide">
              <a href="#"><img src="./images/main/c04_L4.png" alt="R"></a>
            </div><!--//swiper-slide-->

          </div><!--//swiper-wrapper-->
        </div><!--//swiper-container-->
      </div><!--//thumb-->

      <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/main/c04_R1.png" alt="L">
          </div><!--//swiper-slide-->

          <div class="swiper-slide">
            <img src="./images/main/c04_R2.png" alt="L">
          </div><!--//swiper-slide-->

          <div class="swiper-slide">
            <img src="./images/main/c04_R3.png" alt="L">
          </div><!--//swiper-slide-->

          <div class="swiper-slide">
            <img src="./images/main/c04_R4.png" alt="L">
          </div><!--//swiper-slide-->

        </div><!--//swiper-wrapper-->
      </div><!--//swiper-container-->
    </div><!--//inner-->
  </section><!--//c04-->

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      effect: 'fade',
      speed: 100,
      spaceBetween: 0,
      slidesPerView: 1,
      loop: true,
      freeMode: true,
      loopedSlides: 1, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // autoplay: {
      //   delay: 2500,
      //   disableOnInteraction: false,
      // },
    });
    var galleryTop = new Swiper('.gallery-top', {

     // spaceBetween: 60,
     // slidesPerView: 3,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      loop: true,
      loopedSlides: 3, //looped slides should be the same
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
      thumbs: {
        swiper: galleryThumbs,
      },
      autoplay: {
        delay: 2500,
        //disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween:10,
        },
        500: {
          slidesPerView: 2,
          spaceBetween: 40,
        },

        700: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1279: {
          slidesPerView: 3,
          spaceBetween: 30,
        }
      }
    });
  </script>

  <!-- c05 -->
  <section id="c05">
    <h2>갤러리 H</h2>
    <!-- Add Arrows -->
    <div class="swiper-button-next3"></div>
    <div class="swiper-button-prev3"></div>
    <div class="swiper-container9">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_01.png" alt="gallery">
            <figcaption>
              <h2>심인회</h2>
              <p>Blue horse racing</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_02.png" alt="gallery">
            <figcaption>
              <h2>낸시랭</h2>
              <p>Tabo Yogini-Dreamer</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_03.png" alt="gallery">
            <figcaption>
              <h2>김이수</h2>
              <p>2023-No.1</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_04.png" alt="gallery">
            <figcaption>
              <h2>김이수</h2>
              <p>2023-No.1</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_05.png" alt="gallery">
            <figcaption>
              <h2>심인회</h2>
              <p>Blue horse racing</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_06.png" alt="gallery">
            <figcaption>
              <h2>심인회</h2>
              <p>Blue horse racing</p>
            </figcaption>
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="./images/main/c05_07.png" alt="gallery">
            <figcaption>
              <h2>구준엽</h2>
              <p>묘령전</p>
            </figcaption>
          </figure>
        </div>

  </section><!--//c05-->

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container9', {
      //slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next3',
        prevEl: '.swiper-button-prev3',
      },
      //centeredSlides: true,
      breakpoints: {
        1921: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        1279: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        500: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        320: {
          slidesPerView: 2,
          spaceBetween: 20,
        }
      }
    });
  </script>


  <!-- c06 -->
  <section id="c06">
    <div class="inner">
      <h2>#CHANNEL</h2>
      <p>현대백화점과 함께하는 즐거운 여정</p>

      <ul class=buttons>
        <li class="green_b">INSTAGRAM</li>
        <li class="green_b">YOUTUBE</li>
        <li class="green_b">BLOG</li>
        <li class="green_b">POST</li>

      </ul><!--//inner-->
  </section><!--//c06-->


  <?php 
  include ("./footer.php")
  ?>

</body>

</html>