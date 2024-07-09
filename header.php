<link rel="stylesheet" href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/css/import.css">

<script>
    $(document).ready(function() {
      $('.title > a, .sub1, .sub2, .sub3').on('click', function(e) {
        var $this = $(this);
        var $submenu = $this.next('.submenu');
  
        // 하위 메뉴가 있다면 아코디언 동작을 수행
        if ($submenu.length > 0) {
        } else {
          // 하위 메뉴가 없으면 링크를 따라감
          window.location.href = $this.attr('href');
        }
      });
      // 초기화: 모든 submenu 닫기
      $('.submenu').hide();
    });
  </script>

<!-- header -->
<header>
  <div class="inner">
    <!-- 로고 -->
    <h1><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/index.php"><img src="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/images/common/pc-logo.png" alt="logo"></a></h1>
    <!-- 언어/메뉴 -->

    <div class="lang_m">
      <img src="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/images/common/lang.svg" alt="lang">
    </div>

    <section class="top-right">
      <div class="lang">
        <img src="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/images/common/lang.svg" alt="lang">
      </div>

      <div class="menu">
        <a href="javascript:;" class="btn-menu"></a>
        <div class="cate_layer">
          <div class="content">
            <div class="top">
              <ul class="log">
                <li><a href="#">Login</a></li>
                <li><a href="#">SignUp</a></li>
                <li><a href="#"><img src="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/images/common/finder.png" alt="search"></a></li>
              </ul>
            </div><!--top-->

            <div class="bottom">
              	<!--박스 전체 감싸는부분 -->
	<div id="jquery-accordion-menu" class="jquery-accordion-menu red">
		<ul id="demo-list">
<!-- 지점안내 -->
<li class="title"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="big_h">지점안내</a>
	<ul class="submenu">
			<li class="n1"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub1">더현대</a>
					<ul class="submenu m">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">더현대 서울</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">더현대 대구</a></li>
					</ul>
			</li>
			<li class="n1"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub1">현대백화점</a>
					<ul class="submenu">
							<li class="inline"><a href="#" class="sub2">서울점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">압구정본점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">무역센터점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">천호점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">신촌점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">미아점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">목동점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">디큐브시티</a></li>
									</ul>
							</li><!--//서울점-->
							<li class="inline"><a href="#" class="sub2">수도권점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">중동점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">킨텍스점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">판교점</a></li>
									</ul>
							</li><!--//수도권점-->
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">지방점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">대전점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">울산점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">울산동구점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">부산점</a></li>
									</ul>
							</li><!--//지방점-->
					</ul>
			</li><!--////현대백화점-->
			<li class="n1"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub1">현대아울렛</a>
					<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">서울점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">동대문점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">가산점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">가든파이브점</a></li>
									</ul>
							</li><!--//서울점-->
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">수도권점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">김포점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">송도점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">SPACE 1</a></li>
									</ul>
							</li><!--//수도권점-->
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub2">지방점</a>
									<ul class="submenu">
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">대전점</a></li>
											<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/StoreGuide.php" class="sub3">대구점</a></li>
									</ul>
							</li><!--//지방점-->
					</ul>
			</li><!--//현대아울렛-->
	</ul>
</li><!--//지점안내-->


			<!--브랜드-->
			<li class="title"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="big_h">브랜드</a>
				<ul class="submenu">
					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub1">컨템포러리</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">FOURM</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">톰그레이하운드</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">PEER</a></li>
						</ul>
					</li><!--컨템포러리-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub1">해외패션</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">THE BASH</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">오프웍스</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">LABELS</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">슈페이스</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">슈라이브러리</a></li>
						</ul>
					</li><!--//해외패션-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub1">라이프스타일</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">Be CLEAN</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">위펫</a></li>
						</ul>
					</li><!--//라이프스타일-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub1">리빙</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">HBYH</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">위마켓</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">르쁠라 H</a></li>
						</ul>
					</li><!--//리빙-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub1">현대식품관</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">명인명촌</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">와인웍스</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Brands.php" class="sub2">원테이블</a></li>
						</ul>
					</li><!--//리빙-->
				</ul>
			</li><!--//브랜드-->


			<!--컬쳐앤라이프-->
			<li class="title"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="big_h">컬쳐앤라이프</a>
				<ul class="submenu">
					<li ><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub1">CH1985·문화센터</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">CH1985</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">문화센터</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">갤러리 H</a></li>
						</ul>
					</li><!--//CH1985·문화센터-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub1">전시·공연</a></li>
					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub1">이벤트</a></li>

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub1">콘텐츠</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">STYLE H 매거진</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">3분 쇼핑</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">에디토리얼 디파트먼트</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Culture_Life.php" class="sub2">그로서리가이드</a></li>
						</ul>
					</li><!--//콘텐츠-->
				</ul>
			</li><!--//컬처앤라이프-->
			
			<!--이용안내-->
			<li class="title"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="big_h">서비스 </a>
				<ul class="submenu">
					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub1">VIP 고객 제도</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">선정기준</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">VIP혜택</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">마일리지적립</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">리워드</a></li>
						</ul>
					</li><!--//VIP 고객 제도-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub1">고객서비스 </a>
						<ul class="submenu">
							<li class="inline"><a href="https://greenwebstory03.ivyro.net/B/board_project/board/board_list.php" class="sub2">고객의 의견</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">자주하는 질문</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">서비스 안내</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">공지사항</a></li>
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">비대면결제</a></li>
						</ul>
					</li><!--//고객서비스-->

					<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub1">카드·상품권·멤버십</a>
						<ul class="submenu">
							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">현대백화점카드</a>
								<ul class="submenu">
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">카드 소개 및 혜택</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">카드신청</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">법인카드</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">이용안내</a></li>
								</ul>
							</li><!--//현대백화점카드-->

							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">상품권</a>
								<ul class="submenu">
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">상품권</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">모바일 교환권</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">구입 안내</a></li>
								</ul>
							</li><!--//상품권-->

							<li class="inline"><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub2">멤버십</a>
								<ul class="submenu">
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">H.Point</a></li>
									<li><a href="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/Services.php" class="sub3">클럽웨딩</a></li>
								</ul>
							</li><!--//멤버십-->

						</ul>
					</li><!--//카드·상품권·멤버십-->
				</ul>
			</li>
		</ul><!--//아코디언리스트 끝-->
		
		</div><!--//jquery-accordion-menu-->
            </div><!--//jquery-accordion-menu red-->
        </div><!--//content-->
        </div><!--//cate_layer-->
      </div><!--//menu-->
      
    </section><!--//top-right-->
  </div><!--//div.inner-->
</header>

<script>
  // JavaScript
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.btn-menu').addEventListener('click', function() {
      this.classList.toggle('active');
    });
  });
</script>

<script src="https://webstoryuiux.ivyro.net/KDT/HYUNDAI/B/js/jquery-accordion-menu.js" type="text/javascript"></script>

