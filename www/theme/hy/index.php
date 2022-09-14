<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<!-- e:head -->

<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
  
<script type="text/javascript">
	$(function(){ // jQuery 준비
		var c=0; //  각 콘텐츠 순서번호
		$('nav #nav_wrap ul li').eq(c).find('a').addClass('on');

		$('nav #nav_wrap ul li').eq(3).click(function(){
			var h_top = $('#area4').offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return;
		});
		
		$('nav #nav_wrap ul li').eq(0).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(0).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});

		$('nav #nav_wrap ul li').eq(1).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(1).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});

		$('nav #nav_wrap ul li').eq(2).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(2).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});

		$('nav #nav_wrap ul li').eq(4).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(4).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});

		$('nav #nav_wrap ul li').eq(5).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(5).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});

		$('nav #nav_wrap ul li').eq(6).click(function(){
			c=$(this).index(); //누른에 번째(순서)꺼를
			var h_top = $('#content_wrap > section').eq(6).offset().top-145;
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});
		

		// 화면 높이가 200px 이동시 go top 버튼 보임
		var offset = 200;
		$(window).scroll(function(){
			var st=$(this).scrollTop();
			if(st > offset){ // 윈도우 스크롤 탑이 offset(200) 이상일때
				$('.go_top').fadeIn(500); // 점점 나타나라
			}else{
				$('.go_top').fadeOut(500); //스크롤 탑이 offset(200) 이하일때 점점사라져라
			};
		

			//각 콘텐츠 위치에 도달 시 또는 메뉴 클릭 시 해당 스타일 적용
			$('#content_wrap > section').each(function(){
				var i = $(this).index();  // i에 0을 기억시키고 번째 설정 0번째, 1번쨰,2번째 3번쨰 등등
				//alert(i);
				if($(this).offset().top-149 <= st){ // 만약내가 클릭한 div가 스크롤탑크기보다 같거나 작은경우
					$('nav #nav_wrap ul li a').removeClass('on'); // a에있는 class명을  지워라
					$('nav #nav_wrap ul li').eq(i).find('a').addClass('on'); //li 밑에 있는 a에 i번째에 클래스명을 붙여라
				}
			});
			//마지막 콘텐츠 영역에 도달시 메뉴 스타일 적용
			if(st >= $('#content_wrap').height()-$(window).height()){
					$('nav #nav_wrap ul li a').removeClass('on');
					$('nav #nav_wrap ul li:last').find('a').addClass('on');
			}

		}); //end : scroll

	}); //jQuery 종료

</script>
  <style type="text/css">

	
	.end{cursor: pointer;}
	.end input[type="checkbox"]{display: none;}

	.root_daum_roughmap{width: 100% !important;}
	
	.fast_menu{position:fixed;bottom:1%;right: 1%;z-index:999;display: none;}
	.fast_menu ul li{width: 130px;height: auto;}
	.fast_menu ul li:hover img{transform:scale(1.1);transition: all 0.3s;padding: 7px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;background: #fff;}
	.fast_menu ul li.naver:hover img{border: 3px solid #54b947;}
	.fast_menu ul li.kakao:hover img{border: 3px solid #fbe13b;}
	.fast_menu ul li.go_top:hover img{border: 3px solid #6c96cf;}
	.fast_menu ul li img{width: 100%;height: auto;}
  </style>
 </head>
 <body>
	
	<div id="content">
		<!-- <div id="visual-media"><video width="100%" height="auto" autoplay="" loop muted style="vertical-align: top;"><source src="<? echo G5_THEME_URL; ?>/video/video.mp4" type="video/mp4"></video></div> -->
		<!-- 슬라이드 -->
		    	<div class="swiper-container swiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_01.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_01.jpg" alt="">
						</div>
                        <div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_02.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_03.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_04.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_05.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img class="pc_img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_06.jpg" alt="">
							<img class="m_img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_06.jpg" alt="">
						</div>
                    </div>
					<div class="swiper-pagination swiper-pagination1"></div>
				</div>
				<script>
					const swiper = new Swiper('.swiper-container', {
						// Default parameters
						slidesPerView: 1,
						spaceBetween: 0,
						autoplay : {
							delay : 2500,
						},
						speed: 500,
						pagination: {
							el: '.swiper-pagination1',
							type: 'bullets',
						}
					});
				</script>

				
		<div id="content_wrap">
			<!-- s:  첫번째 카테고리 이동 -->
			<section class="content area1 main-bg">
				<div class="main-bg-wrap">
					<div class="main-bg-scale"></div>
				</div>
                <div class="inner">
					<div class="title">
						<h3>MORE + MOST.</h3>
						<p class="title-text"><span class="fw500">보다 더</span> 편안하고 아프지 않도록
						환자의 입장에서 <span class="fw500">이로운 치료</span>를 추구하는 <span class="fw500">투엠치과</span>입니다.</p>
					</div>
					<ul>
						<li>
							<div>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area1_01.jpg" alt="">
								<h6>보건복지부 인증
								치과전문의 진료</h6>
							</div>
							<div>
								<p>다양한 임상경험을 보유한
								통합치의학 전문의 1:1 맞춤 진료</p>
							</div>
						</li>

						<li>
							<div>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area1_02.jpg" alt="">
								<h6>자연치아를 우선으로
								살리는 치과</h6>
							</div>
							<div>
								<p>환자에게 이로운 치료가
								첫번째 원칙</p>
							</div>
						</li>

						<li>
							<div>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area1_03.jpg" alt="">
								<h6>우리동네
								디지털 치과</h6>
							</div>
							<div>
								<p>다양한 첨단 장비를 활용한 진단
								디지털 덴티스트리</p>
							</div>
						</li>

						<li>
							<div>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area1_04.jpg" alt="">
								<h6>환자 별
								맞춤 데이터 관리</h6>
							</div>
							<div>
								<p>환자 별 누적된 데이터로
								개인에 더 적합한 치료 제공</p>
							</div>
						</li>
					</ul>

					<div class="area1-box">
						<div>
							<p class="fw700 area1-box-tit">당신에게 약속합니다.</p>
							<h5>더욱 <span class="point-color2">정밀</span>하고 <br class="m_br425"><span class="point-color2">안정</span>적인 결과</h5>
							<p class="mt20">디지털 정밀 진단과 <br class="m_br425">치료 기술을 바탕으로
							과잉 진료 없는 정직한 치료를 <br class="m_br">목표로 진료할 것을 약속합니다.</p>
						</div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/area1_05.png" alt="">
					</div>
				</div>
            </section>
			<!-- e:  첫번째 이동 끝 -->

			<!-- s:  두번째 카테고리 이동 -->
			<section id="doctor" class="content tab-wrap area2 main-bg">
				<div class="main-bg-wrap">
					<div class="main-bg-scale"></div>
				</div>
            	<div class="inner" >
					<div class="title">
						<p>2M DENTAL CLINIC</p>
						<h3>우리 가족 주치의 소개</h3>
					</div>

					<div id="tab-content1" class="tab-content">
						<ul>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/doctor_01.jpg" alt="">
							</li>
							<li>
								<div class="tab-name">
									<h4><div>최용문</div> <span>대표원장 &nbsp;|&nbsp; 통합치의학전문의</span></h4>
								</div>
								<ul class="disc-list">
									<li>보건복지부인증 통합치의학전문의</li>
									<li>서울대학교 치의학대학원 임플란트 연수과정 수료</li>
									<li>서울대학교 치의학대학원 치의학교육연수원</li>
									<li>원광대학교 대전치과병원 인턴</li>
									<li>원광대학교 대전치과병원 구강내과 수련의</li>
									<li>대한안면통증구강내과학회 정회원</li>
									<li>아시아 턱관절학회 TMJ포럼 수료</li>
									<li>대한턱관절교합학회 정회원</li>
									<li>AAID(미국 임플란트 학회) 정회원</li>
									<li>AACD(미국 심미치과 학회) 정회원</li>
									<li>대한구강악안면임플란트학회 정회원</li>
									<li>대한심미치과학회 정회원</li>
									<li>대한치과보존학회 정회원</li>
									<li>대한치과보철학회 정회원</li><br>

									<li>아시아 태평양 치과대학 연합(APDSA) 한국대표</li>
									<li>International Dental Exhibition and 
									Meeting Leader Programme</li><br>

									<li>前) 백세플란트치과 통합진료과장</li>
									<li>前) 독산모아치과 부원장</li>
									<li>前) 다온치과 부원장</li>
									<li>前) 광화문선치과 턱관절진료과장</li>

								</ul>
								<article class="license">
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/doctor_02.jpg" alt="">
								</article>
							</li>
						</ul>
					</div>

				</div>
				
				<div class="area2-box">
					<div class="inner" style="max-width: 1000px;">
						<div class="title">
							<p>진료 스텝 전원</p>
							<h3>치과위생사 면허 보유</h3>
							<p class="title-text">전원이 국가고시에 합격한 전문 치과위생사들로만 구성되어있습니다. 
							찾아주시는 환자분들의 구강위생건강을 위해 더욱 노력하겠습니다. </p>
						</div>
						<ul>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area2_01.jpg" alt="">
							</li>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area2_02.jpg" alt="">
							</li>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area2_03.jpg" alt="">
							</li>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area2_04.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
				
			</section>
			<!-- e:  두번째 이동 끝 -->

			<!-- s:  세번째 카테고리 이동 -->
			<section class="content area3 main-bg">
				<div class="main-bg-wrap">
					<div class="main-bg-scale"></div>
				</div>
               <div class="inner"  style="max-width: 1150px;">
					<div class="title">
						<p>2M DENTAL CLINIC</p>
						<h3><span style="font-family: 'GmarketSansLight';">투엠치과</span> 진료 과목</h3>
						<p class="title-text">치과의 모든 치료, 전담주치의가 맞춤 진료합니다.</p>
					</div>
					<div class="treatment">	
						<ul>
							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_01.png" alt="">
								</div>
								<h6>임플란트</h6>
								<p>치과전문의
								1:1 맞춤 식립</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_02.png" alt="">
								</div>
								<h6>보철치료</h6>
								<p>좋은 재료
								높은 진료 퀄리티</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_03.png" alt="">
								</div>
								<h6>턱관절치료</h6>
								<p>구강내과 수련의
								대표원장 책임진료</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_04.png" alt="">
								</div>
								<h6>틀니치료</h6>
								<p>편안함과 저작력
								두가지 동시 달성</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_05.png" alt="">
								</div>
								<h6>사랑니 발치</h6>
								<p>대학병원 갈 필요없이
								고난도 케이스 가능</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_06.png" alt="">
								</div>
								<h6>신경치료</h6>
								<p>자연치아 살리기
								바탕 진료</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_07.png" alt="">
								</div>
								<h6>치아미백</h6>
								<p>니즈를 반영한
								미소 완성</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_08.png" alt="">
								</div>
								<h6>심미보철</h6>
								<p>심미 뿐 아닌
								기능까지 고려한 진료</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_09.png" alt="">
								</div>
								<h6>잇몸치료</h6>
								<p>치아 건강의 시작
								튼튼한 기반 완성</p>
							</li>

							<li>
								<div>
									<div></div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_10.png" alt="">
								</div>
								<h6>일반진료</h6>
								<p>치아 뿐 아닌 잇몸까지
								고려한 통합 진료</p>
							</li>
						</ul>
					</div>

					<div id="area4" class="area3-box content">
						<div class="title">
							<p>2M DENTAL CLINIC</p>
							<h3>투엠치과 특별진료</h3>
							<p class="title-text">투엠치과에서 제안하는 특별진료, 첫번째로 임플란트를 소개합니다.</p>
						</div>
						<ul>
							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_11.jpg" alt="">
								</div>
								<div>
									<p>디지털 무치악 솔루션!</p>
									<h5>풀아치 임플란트</h5>
								</div>
							</li>

							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_12.jpg" alt="">
								</div>
								<div>
									<p>오차 없이 디지털 식립</p>
									<h5>네비게이션 임플란트</h5>
								</div>
							</li>

							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area3_13.jpg" alt="">
								</div>
								<div>
									<p>하루만에 완성되는 마법</p>
									<h5>발치 즉시 임플란트</h5>
								</div>
							</li>
						</ul>	
					</div>
			   </div>
			</section>
			<!-- e:  세번째 이동 끝 -->

			<!-- s:  네번째 카테고리 이동 -->
			<section class="content area4">
				<div class="area4-1 main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<ul class="area4-title">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_01.png" alt="">
								</div>
							</li>
							<li>
								<div>
									<p>무치악 케이스도 빠르고 정확하게 가능!</p>
									<h3>풀아치 임플란트</h5>
									<h6>기존 틀니에 디지털을 더한 <br class="m_br425">전악 임플란트!</h6>	
								</div>
							</li>
						</ul>
						<div class="area3-box">
							<div class="title mt80">
								<h3>풀아치 임플란트란?</h3>
								<p class="title-text">투엠치과 풀아치 임플란트는 <span class="fw700">최소 식립 전체 임플란트</span>입니다.
								치아가 하나도 없는 경우에도 <br class="m_br425">4~6개의 소수 임플란트를 식립하여 전체 치아를 수복합니다.
								무치악 환자의 틀니 스캔부터 플래닝, 가이드 제작, 시술, 최종 보철에 이르는
								<span class="fw700">전 과정을 FULL DIGITAL 디지털화 하여 정밀함을 높였습니다.</span></p>
							</div>
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_02.jpg" alt="">
									</div>
									<div>
										<h5>3D 컴퓨터 분석<br>
										모의식립 플래닝</h5>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_03.jpg" alt="">
									</div>
									<div>
										<h5>UV 임플란트 사용</h5>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_04.jpg" alt="">
									</div>
									<div>
										<h5>수술당일 보철 체결</h5>
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>

				<div class="content area-dio main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<!-- <div class="dio-bg">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/dio_bg1.png" alt="">
					</div>
					<div class="dio-bg2">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/dio_bg2.png" alt="">
					</div> -->
					<div class="inner">
						<div class="title">
							<h3>기존 틀니 VS <span class="point-color">디오나비 풀아치</span></h3>
							<p class="title-text">불편했던 틀니 대신 디지털 무치악 솔루션을 만나보세요!
							풀아치 임플란트는 지정병원에서만 가능합니다.</p>
						</div>
						<div>
							<ul>
								<li>
									<span><h6>기존 틀니</h6></span>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/dio_01.jpg" alt="">
									<div>
										<h6>불안정적</h6>
										<p><span class="x0_9">잇몸에 고정되지 않아 음식을 먹거나 <br class="m_br425">말할때 흔들림이 있어 불안정</span></p>
									</div>
									<div>
										<h6>불편함</h6>
										<p><span class="x0_9">뺏다 껴야 하는 내 치아 같지 않은 불편함</span></p>
									</div>
									<div>
										<h6>반영구적</h6>
										<p><span class="x0_9">치아 뼈의 손실로 시간이 갈수록 틀니가 헐거워짐</span></p>
									</div>
								</li>
								<li>
									<span><h6>풀아치 임플란트</h6></span>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/dio_02.jpg" alt="">
									<div>
										<h6>안정적</h6>
										<p><span class="x0_9">잇몸뼈와 인공치아를 연결하므로 <br class="m_br425">내 입에 잘 고정되어 안정적</span></p>
									</div>
									<div>
										<h6>편안함</h6>
										<p><span class="x0_9">고정적 인공치아로 일상생활에서 <br class="m_br425">내 치아같은 자연스러움</span></p>
									</div>
									<div>
										<h6>영구적</h6>
										<p><span class="x0_9">치아뼈의 손실을 막아줌으로써 <br class="m_br425">시간이 지나도 흔들림 없이 유지</span></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- <table>
							<tbody>
								<tr>
									<td></td>
									<td class="td_head"><h6>일반 틀니</h6></td>
									<td class="td_head"><h6>일반 풀아치</h6></td>
									<td class="td_head dionavi"><h6>디오나비 풀아치</h6></td>
								</tr>
								<tr>
									<td><p>잇몸뼈</p></td>
									<td><p>잇몸 뼈 흡수, 손실</p></td>
									<td><p>잇몸 뼈 유지,
									손실 적음</p></td>
									<td><p>잇몸 뼈 유지,
									손실 적음</p></td>	
								</tr>
								<tr>
									<td><p>수명</p></td>
									<td><p>3 ~ 5년</p></td>
									<td><p>장기간 사용 가능
									(반영구적)</p></td>
									<td><p>장기간 사용 가능
									(반영구적)</p></td>
								</tr>
								<tr>
									<td><p>기능</p></td>
									<td><p>인위적</p></td>
									<td><p>자연스러움</p></td>
									<td><p>자연스러움</p></td>
								</tr>
								<tr>
									<td><p>얼굴 형태</p></td>
									<td><p>얼굴 형태 변형/함몰,
									입 주변 주름살 증가</p></td>
									<td><p>변화 X</p></td>
									<td><p>변화 X</p></td>
								</tr>
								<tr>
									<td><p>고정력</p></td>
									<td><p>불안정, 잦은 탈락</p></td>
									<td><p>강하고 안정적</p></td>
									<td><p>강하고 안정적</p></td>
								</tr>
								<tr>
									<td><p>틀니 접착제</p></td>
									<td><p>필요</p></td>
									<td><p>불필요</p></td>
									<td><p>불필요</p></td>
								</tr>
								<tr>
									<td><p>씹는 힘</p></td>
									<td><p>약한 편</p></td>
									<td><p>자연치아의 80%</p></td>
									<td><p>자연치아의 80%</p></td>
								</tr>
								<tr>
									<td><p>심미성</p></td>
									<td><p>인위적, 부자연스러움</p></td>
									<td><p>자연스러움</p></td>
									<td><p>자연스러움</p></td>
								</tr>
								<tr>
									<td><p>당일 보철</p></td>
									<td><p>당일 체결 X</p></td>
									<td><p>시간 지연,
									당일 체결 X</p></td>
									<td style="background-color: #fbdae5;"><p>미리 제작,
									당일 체결 가능</p></td>
								</tr>
								<tr>
									<td><p>시술</p></td>
									<td><p>탈착식으로
									탈락 우려</p></td>
									<td><p>잇몸 절개로
									출혈, 붓기, 통증 발생</p></td>
									<td style="background-color: #fbdae5;"><p>잇몸 최소 절개로
									출혈, 붓기, 통증 최소화</p></td>
								</tr>
								<tr>
									<td><p>보철 파손 시</p></td>
									<td><p>병원 재방문 필수</p></td>
									<td><p>병원 재방문 필수</p></td>
									<td style="background-color: #fbdae5;"><p>병원 방문없이 제작</p></td>
								</tr>
							</tbody>
						</table> -->
					</div>
				</div>

				<div class="area4-3 content">
					<div class="inner" style="max-width: 100%;">
						<div class="title">
							<h3>풀아치 임플란트 진행과정</h3>
							<p class="title-text">단 3회만에 전체 지아가 생기는 마법 같은 결과</p>
						</div>
						<ul>
							<li>
								<div>
									<p><span class="point-color fw500">1:1 상담 및 구강스캔</span>
									1DAY : 내원 첫째날</p>
								</div>
							</li>
							<li>
								<div>
									<p>1 ~ 2주일 후</p>
								</div>
							</li>
							<li>
								<div>
									<p><span class="point-color fw500">임플란트 시술, <br class="m_br425">임시치아 연결</span>
									2DAY : 내원 둘째날</p>
								</div>
							</li>
							<li>
								<div>
									<p>1주일 후</p>
								</div>
							</li>
							<li>
								<div>
									<p><span class="point-color fw500">나에게 꼭 맞는 <br class="m_br425">최종치아 완성</span>
									3DAY : 내원 셋째날</p>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="area4-4 content">
					<div class="inner">
						<ul>
							<li>
								<h3>영상으로 보는
								식립과정</h3>
								<p>빠르고 손쉬운 풀아치 임플란트
								식립과정을 영상으로 확인해보세요!</p>
							</li>
							<li>
								<div onclick="callyoutube('DE9Twc-TBMg')">
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_05.jpg" alt="">
									<div class="video-img1">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_14.jpg" alt="">
									</div>
									<div class="video-img2">
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_14.jpg" alt="">
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- youtube popup attach -->
					<div id="youtube-scope"></div>
				</div>

			

				<div class="area4-5 content">
					<div class="area4-5box">
						<div class="move-txt1">
							<h2>2M DENTAL</h2>
						</div>
						<div class="move-txt2">
							<h2>DENTAL CLINIC</h2>
						</div>
						<div class="inner">
							<div class="title">
								<h3>풀아치 임플란트 장점</h3>
								<p class="title-text">투엠치과의 특별한 풀아치 임플란트 장점을 소개합니다.</p>
							</div>
							<ul>
								<li class="box-shadow">
									<h5>정밀함</h5>
									<p>모든 과정 디지털 시스템</p>
								</li>
								<li class="box-shadow">
									<h5>치료기간 단축</h5>
									<p>수술 당일 보철물 장착</p>
								</li>
								<li class="box-shadow">
									<h5>안정성</h5>
									<p>높은 안정성을 입증한 시스템</p>
								</li>
								<li class="box-shadow">
									<h5>비용 절감</h5>
									<p>적은 개수로 전악 임플란트 가능</p>
								</li>
								<li class="box-shadow">
									<h5>빠른 제작</h5>
									<p>편안한 보철을 빠르게!</p>
								</li>
								<li class="box-shadow">
									<h5>편리함</h5>
									<p>예후가 좋은 재료로
									관리 / 세척에 용이</p>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="area4-6 main-bg content">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner" style="max-width: 1500px;">
						<ul class="area4-title">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_06.png" alt="">
								</div>
							</li>
							<li>
								<div>
									<p>모의 수술로 계획한 위치에 <br class="m_br425">정확하게 식립되는</p>
									<h3>네비게이션 임플란트</h5>
									<h6>정확하게! 신속하게! 저통증 식립!</h6>	
								</div>
							</li>
						</ul>
						<div class="area3-box">
							<div class="title mt80">
								<h3>네비게이션 임플란트란?</h3>
								<p class="title-text">네비게이션 임플란트란 환자의 구강 상태와 CT상의 골 모양을 파악하여
								최적의 식립위치에 임플란트를 심을 수 있도록 <br class="m_br425">미리 수술용 가이드를 제작하여 수술 하는 방법입니다.
								특히 다수의 임플란트를 한번에 수술할 때 <br class="m_br425">적절한 방향과 간격을 얻을 수 있게 도와줍니다.</p>
							</div>
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_08.jpg" alt="">
									</div>
									<div>
										<h5>3D CT로 3차원 진단</h5>
										<p>CT 촬영한 3차원 데이터와
										구강 모형을 통해
										뼈, 잇몸, 신경을 통합적으로
										고려하여 정밀 진단합니다.</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_07.jpg" alt="">
									</div>
									<div>
										<h5>컴퓨터로 <br class="m_br425">수술 계획 수립</h5>
										<p>컴퓨터 모의 수술을 통해
										최적의 임플란트 수술 위치를 설정하고,
										그대로 수술할 수 있도록
										환자 맞춤형 가이드를 제공합니다.</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_09.jpg" alt="">
									</div>
									<div>
										<h5>네비게이션 가이드<br>
										장착 후 수술</h5>
										<p>제작된 네비게이션 가이드를
										구강에 장착한 뒤
										계획한 위치에 안전하고
										정확하게 수술합니다.</p>
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>

				<div class="area4-7 main-bg content">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner" style="max-width: 1500px;">
						<ul class="area4-title">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_10.png" alt="">
								</div>
							</li>
							<li>
								<div>
									<p>단, 하루만에 발치 후 식립까지 가능한</p>
									<h3>발치 즉시 임플란트</h5>
									<h6>치료시간 절반 이상을 <br class="m_br">단축할 수 있는 임플란트</h6>	
								</div>
							</li>
						</ul>
						<div class="area3-box">
							<div class="title mt80">
								<h3>발치 즉시 임플란트란?</h3>
								<p class="title-text">치아의 손상은 심하지만 주변 조직은 건강하거나 손상이 심하지 않은 경우에
								발치 즉시 임플란트를 통해 치료 기간을 단축하며, <br class="m_br425">주변 조직의 형태를 최대한 자연스럽게 보전할 수 있습니다.</p>
							</div>
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_12.jpg" alt="">
									</div>
									<div>
										<h5>잇몸손상 감소</h5>
										<p>발치 후 빈공간을 임플란트 지대주가
										바로 자리를 잡기 때문에
										잇몸뼈가 흡수되는 것을 막고
										잇몸손상을 줄일 수 있습니다.</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_11.jpg" alt="">
									</div>
									<div>
										<h5>빠른 일상복귀</h5>
										<p>치료기간이 짧고
										치료방법이 간편하기 때문에
										오랜 후유증 없이 일상으로
										빠른 복귀가 가능합니다.</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area4_13.jpg" alt="">
									</div>
									<div>
										<h5>치료기간 단축</h5>
										<p>2~3번에 거쳐 진행될 치료를
										한번에 마무리할 수 있기 때문에
										치료시간과 기간을 단축시킬 수 있습니다.</p>
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>

				<div class="area5-1 content">
					<div class="area5-1box">
						<div class="move-txt1">
							<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_01.png" alt="">
						</div>
						<div class="move-txt2">
							<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_02.png" alt="">
						</div>
						<div class="inner">
							<div class="area5-1box2">
								<ul>
									<li>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_03.png" alt="">
									</li>
									<li>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_04.png" alt="">
									</li>
								</ul>
							</div>
							<div class="title mb0 mt40">
								<h3>좋은 재료가 좋은 결과를 만듭니다.</h3>
								<p class="title-text mt0 mb0">투엠치과는 100% 정품 재료만을 사용하며, 정품 보증서을 제공해드립니다.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="area5-2">
					<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
					<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
					<div id="youtube" class="swiper-slide">
						<div class="y-inner clearfix">
							<div class="left">
								<div class="title_wrap">
									<h3 class="y-title">턱관절 특화진료</h2>
									<div class="description" >
									<p>치아건강을 넘어서 <span class="point-color">턱관절의 불편함도 해결!
									턱관절 치료의 첫걸음은 지속적인 관심입니다.</p></span>
									</div>
									
								</div>
								<div class="slide_btn">
									<div class="main01_prev main_prev"></div>
									<div class="main01_next main_next"></div>
								</div>
							</div>


							<div class="right youtube_container">
								<ul class="clearfix swiper-wrapper">
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_06.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												헤윰치과 유튜브 <br>
												교정일상편
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
						
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_07.png" alt=""></div>

											</div>
											<div class="content_text">
												<div class="c-title">
												코로나19에 <br>
												대처하는 안심방역현장
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_08.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												혜윰 치과의 원칙 <br>
												1인 1기구 멸균 소독
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_09.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												턱관절 통증 진단 방법 <br>
												모두 알려드립니다.
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_06.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												헤윰치과 유튜브 <br>
												내원진료편
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_07.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												당신의 미소를 되찾아줄 <br>
												인비절라인
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_08.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												혜윰 치과의 원칙 <br>
												1인 1기구 멸균 소독
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									<li class="swiper-slide">
										<a href="javascript:;" onclick="">
											<div class="img_wrap">
												<div class="contnet_img" ><img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_09.png" alt=""></div>
											</div>
											<div class="content_text">
												<div class="c-title">
												턱관절 통증 진단 방법 <br>
												모두 알려드립니다.
												</div>
												<div class="name">혜윰치과</div>
											</div>
										</a>
									</li>
									
									
								</ul>
								<div class="swiper-scrollbar ytb_scroll"></div>
							</div> 
						</div>
						
					</div>
				</div>

				<div class="area5-3 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<div class="title">
							<h3>왜? 투엠치과 턱관절 특화진료인가?</h3>
							<p class="title-text">투엠치과의 특별한 턱관절 진료를 소개합니다. </p>
						</div>
						<ul data-rolling-time="4000">
							<li class="box-shadow">
								<div>
									<h6>구강내과 수련의 출신 
									<span class="fw700">대표원장 1:1 맞춤진료</span></h6>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>증상에 따른 <span class="fw700">단계별
									턱관절 치료 시스템</span></h6>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>첨단 장비를 통한 
									<span class="fw700">정밀 분석 진행</span></h6>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>턱관절 세정술을 포함한
									<span class="fw700">고난도 진료 가능</span></h6>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6><span class="fw700">다양한 임상경험</span> 
									바탕의 수준 높은 치료 계획</h6>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>편안한 치료를 위한 
									<span class="fw700">안마의자 & 턱관절</span>
									물리치료실 구비</h6>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="area5-4 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<!-- <div class="title">
							<h3>턱관절, <span class="point-color">시기 별</span>로 <br class="m_br425"><span class="point-color">치료방법</span>이 다릅니다.</h3>
							<p class="title-text">턱관절 치료는 시기 별로 치료방법이 다릅니다.
							그렇기에 담당 주치의의 지속적인 관심과 치료가 필요합니다.</p>
						</div>
						<ul class="area5-4box">
							<li class="box-shadow">
								<div>
									<h6>초기</h6>
								</div>
								<div>
									<ul>
										<li><p>간단한 물리치료</p></li>
										<li><p>운동요법</p></li>
										<li><p>생활 습관 개선</p></li>
										<li><p>짧은 치료기간</p></li>
									</ul>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>중기</h6>
								</div>
								<div>
									<ul>
										<li><p>물리치료</p></li>
										<li><p>교합안정장치</p></li>
										<li><p>운동 & 보톡스요법</p></li>
										<li><p>잘못 된 생활 습관 개선</p></li>
										<li><p>원인에 따른 추가 치료</p></li>
										<li><p>상태에 따른 치료기간</p></li>
									</ul>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<h6>말기</h6>
								</div>
								<div>
									<ul>
										<li><p>물리치료</p></li>
										<li><p>교합안정장치</p></li>
										<li><p>운동 & 보톡스요법</p></li>
										<li><p>잘못 된 생활 습관 개선</p></li>
										<li><p>원인에 따른 추가 치료</p></li>
										<li><p>꾸준하고 장기간 치료</p></li>
									</ul>
								</div>
							</li>
						</ul>
											</div>
						
											<div class="content area5-5">
						<div class="inner">
							<div class="title">
								<h3>턱관절 <span class="point-color">진단 과정</span></h3>
							</div>
							<ul>
								<li>
									<div>
										<h6><span class="point-color fw500">STEP 01</span>
										설문지 작성</span></h6>
									</div>
								</li>
								<li>
									<div>
										<h6><span class="point-color fw500">STEP 02</span>
										구강안면
										통증검사</span></h6>
									</div>
								</li>
								<li>
									<div>
										<h6><span class="point-color fw500">STEP 03</span>
										정밀진단
										(X-RAY, 3D CT)</span></h6>
									</div>
								</li>
								<li>
									<div>
										<h6><span class="point-color fw500">STEP 04</span>
										하악장애 분석
										검사</span></h6>
									</div>
								</li>
								<li>
									<div>
										<h6><span class="point-color fw500">STEP 05</span>
										치아 모형 분석
										검사
										(필요 시)</span></h6>
									</div>
								</li>
							</ul>
						</div>-->
						<div class="title">
							<h3>투엠치과의 턱관절진료</h3>
						</div>
						<div class="txtbox1">
							<ul>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_01.jpg" alt="">
									</div>
									<div>
										<h6>01 물리치료</h6>
										<p>세포재생을 촉진하여 
										통증완화에도 효과적이고
										턱관절 안정에 도움이 됩니다.</p>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_02.jpg" alt="">
									</div>
									<div>
										<h6>02 약물치료</h6>
										<p>전반적인 턱관절 통증 
										악화 방지및 안화를 위해 
										사용됩니다.</p>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_03.jpg" alt="">
									</div>
									<div>
										<h6>03 보톡스</h6>
										<p>턱근육의 힘을 줄여 턱관절에
										가해지는 해로운 압력을
										감소시킵니다.</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_04.jpg" alt="">
									</div>
									<div>
										<h6>04 스플린트</h6>
										<p>교합안정장치로 치아를 악물거나
										이갈이 하는 환자의 치아를
										보호하기 위해 제작합니다.</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_05.jpg" alt="">
									</div>
									<div>
										<h6>05 발통점 주사요법</h6>
										<p>만성근육통증으로 인한
										두통 및 비치성치통을
										개선합니다.</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/joint_06.jpg" alt="">
									</div>
									<div>
										<h6>06 관절강 세척술</h6>
										<p>염증이 오래된 턱관절 내부를
										세척하여 통증및 기능을 
										개선합니다.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div> 

				<div class="area5-6 content">
					<div class="inner">
						<div class="title">
							<h3>턱관절 치료과정</h3>
							<p class="title-text">턱관절 치료는 시기 별로 치료방법이 다릅니다.
							<span class="fw500">그렇기에 담담 주치의의 지속적인 관심과 치료가 필요합니다.</span></p>
						</div>
						<div class="txtbox1">
							<ul>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_10.jpg" alt="">
									</div>
									<div>
										<h6>01</h6>
										<p>문진표 작성</p>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_11.jpg" alt="">
									</div>
									<div>
										<h6>02</h6>
										<p>파노라마 턱관절
										3D CT촬영</p>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_12.jpg" alt="">
									</div>
									<div>
										<h6>03</h6>
										<p>구강검진 및 하악장애 
										분석 검사 진행</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_13.jpg" alt="">
									</div>
									<div>
										<h6>04</h6>
										<p>턱관절 치료계획 수립</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_14.jpg" alt="">
									</div>
									<div>
										<h6>05</h6>
										<p>환자분 상태에 맞는
										턱관절 치료 진행</p>
									</div>
								</li>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_15.jpg" alt="">
									</div>
									<div>
										<h6>06</h6>
										<p>지속적인 체크로
										턱관절 치료 관리</p>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>

				<div class="area5-7 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner" >
						<ul class="area4-title">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_16.png" alt="">
								</div>
							</li>
							<li>
								<div>
									<p>모든 진료의 기본 원칙은 <br class="m_br425">자연치아 보존에 있습니다.</p>
									<h3>자연치아 살리기</h5>
									<h6>신경치료, 전문의가 집도하는지 <br class="m_br">꼭 확인해보세요.</h6>	
								</div>
							</li>
						</ul>
						<div class="area5-7box">
							<div class="title mt80">
								<h3>투엠치과의 <span class="point-color">단계 별 보존치료</span></h3>
							</div>
							<ul class="col-3">
								<li class="circle-box">
									<h5><span>치아의 기반이 되는</span>
									잇몸치료</h5>
								</li>
								<li class="circle-box">
									<h5><span>최소삭제 최소침습</span>
									충치치료</h5>
								</li>
								<li class="circle-box">
									<h5><span>신경관 폐쇄에 효과 UP!</span>
									MTA 신경치료</h5>
								</li>
								<li class="circle-box">
									<h5><span>까다로운 고난도 치료</span>
									재신경치료</h5>
								</li>
								<li class="circle-box">
									<h5><span>재신경치료를 못한다면</span>
									치근단절제술</h5>
								</li>
								<li class="circle-box">
									<h5><span>치아보존 최후의 수단</span>
									치아재식술</h5>
								</li>
							</ul>
						</div>
						
					</div>
				</div>

				<div class="area5-8 main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<ul>
							<li>
								<h3>치아뿌리까지 계획하는
								<span class="point-color">MTA 신경치료</span></h3>
								<p>치아에게 마지막으로 한번의 기회를 더 제공하는
								<span  class="fw700">자연치아 살리기 바탕의 진료를 지향합니다.</span>
								신경치료 진행 시 신경이 위치한 치아 뿌리까지 고려한 치료를 계획합니다.
								<span class="fw700">보건복지부 인증 전문의 출신의 대표원장이 직접 치료합니다.</span></p>
							</li>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_17.png" alt="">
							</li>
						</ul>
					</div>
				</div>

				<div class="area5-9 main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner" >
						<ul class="area4-title">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_18.png" alt="">
								</div>
							</li>
							<li>
								<div>
									<p>기능성, 심미성 모두 고려한</p>
									<h3>보철치료</h5>
									<h6>단순히 치아를 고치는 <br class="m_br425">보철치료가 아닌<br>
									기능적인 면과 아름다움도 <br class="m_br425">함께 개선해 드립니다.</h6>	
								</div>
							</li>
						</ul>
						<div class="area3-box">
							<div class="title mt80">
								<h3>보철치료 종류</h3>
								<p class="title-text">투엠치과만의 특별하고,환자분들의 온전한 웃음을 찾아드릴 수 있는
								보철치료 종류를 소개합니다. </p>
							</div>
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_20.jpg" alt="">
									</div>
									<div>
										<section>
											<h5>인레이</h5>
											<p>치아의 손상이 크지 않을 때, 
											제한적으로 충치를 제거하고 
											부분적으로 본을 떠 모형을 제작한 후 
											채워주는 치료입니다.</span></p>
										</section>
										<!-- <article class="type">
											<article>
												<p>종류</p>
											</article>
											<article>
												<p>레진 인레이, 골드 인레이</p>
											</article>
										</article> -->
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_19.jpg" alt="">
									</div>
									<div>
										<section>
											<h5>크라운</h5>
											<p>충치나 외상으로 인해 
											손상된 치아의 표면적이 넓을 때 
											치아 머리에 보철물을
											씌워주는 치료입니다.</span></p>
										</section>
										<!-- <article class="type">
											<article>
												<p>종류</p>
											</article>
											<article>
												<p>지르코니아 크라운,
												골드 크라운, PFM 크라운</p>
											</article>
										</article> -->
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_21.jpg" alt="">
									</div>
									<div>
										<section>
											<h5>브릿지</h5>
											<p>치아가 상실된 경우에 시술하는 방법으로,
											심한 충치나 외상 등의 이유로 
											상실된 치아의 주변 치아를 이용해
											인공치아를 만들어 연결해 주는 방법입니다.</span></p>
										</section>
										<!-- <article class="type">
											<article>
												<p>종류</p>
											</article>
											<article>
												<p>PFM 브릿지, 골드 브릿지, 
												지르코니아 브릿지</p>
											</article>
										</article> -->
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_22.jpg" alt="">
									</div>
									<div>
										<section>
											<h5>틀니</h5>
											<p>몇 개의 치아가 남아 있거나,
											하나의 치아도 없는 경우 인공적으로
											치아모형을 만들어 잇몸에
											끼웠다 뺐다 하는 방법입니다.</span></p>
										</section>
										<!-- <article class="type">
											<article>
												<p>종류</p>
											</article>
											<article>
												<p>부분 틀니 , 전체 틀니,
												틀니 임플란트</p>
											</article>
										</article> -->
									</div>
								</li>
							</ul>	
						</div>
						
					</div>
				</div>

				<div class="area5-10 content">
					<div class="inner">
						<div class="area5-10box">
							<ul>
								<li>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_23.png" alt="">
								</li>
								<li>
									<h3>충치 진행 단계별 치료방법</h3>
									<p>투엠치과는 환자 개개인에 맞춰  
									충치에 따른 단계별 치료방법을 고려합니다.</p>
								</li>
							</ul>
						</div>
						<div class="area5-10box2 mt80">
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_25.png" alt="">
									</div>
									<div>
										<h5>법랑질 충치</h5>
										<p>치아 겉면인 법랑질의
										충치로 통증이 없습니다.</p>
									</div>
									<div>
										<h5>치료방법</h5>
										<p>주의관찰 및 정기검진</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_26.png" alt="">
									</div>
									<div>
										<h5>상아질 충치</h5>
										<p>범랑질 안쪽 상아질까지
										충치가 진행되어 뜨겁거나
										차가운 음식을 먹으면 시린
										증상이 나타납니다.</p>
									</div>
									<div>
										<h5>치료방법</h5>
										<p>충치치료 / MTA 신경보존술</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_24.png" alt="">
									</div>
									<div>
										<h5>치수염 충치</h5>
										<p>상아질 안쪽 신경까지 염증이
										진행되어 극심한 통증으로
										참기 어려운 정도가 됩니다.</p>
									</div>
									<div>
										<h5>치료방법</h5>
										<p>MTA 신경치료 + 크라운</p>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_27.png" alt="">
									</div>
									<div>
										<h5>치수 괴사</h5>
										<p>치아 내부에 있는 조직이
										괴사되고, 뿌리 주변의 
										염증으로 인해 뼈가 점차
										소실됩니다.</p>
									</div>
									<div>
										<h5>치료방법</h5>
										<p>MTA 신경치료 / 임플란트</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="area5-11 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<div class="title">
							<p>아프지 않고 친절한 치과 찾으시나요?</p>
							<h3>환자분의 마음까지 생각하는 <br class="m_br">진료 솔루션</h3>	
						</div>
						<ul>
							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_28.png" alt="">
								</div>
								<div>
									<h6>치료가 무섭다면?</span></h6>
									<p>최신형 무통마취
									시스템 도입</p>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_29.png" alt="">
								</div>
								<div>
									<h6>치료가 낯설다면?</span></h6>
									<p>따뜻한 인테리어
									환자 한 분 한 분 섬세한 케어</p>
								</div>
							</li>
							<li class="box-shadow">
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_30.png" alt="">
								</div>
								<div>
									<h6>치료를 잘 모른다면?</span></h6>
									<p>환자 눈높이에 맞는
									친절한 상담</p>
								</div>
							</li>
						</ul>
						<div class="tac mt80">
							<h6>이젠 <span style="color: #186bbe;">치과치료도 편안</span>하게! <span style="color: #0f5091;">투엠치과</span>에서 만나보세요!</h6>
						</div>
					</div>
				</div>

				<div class="area5-12 content">
					<div class="inner">
						<div class="title">
							<p>실력에 대한 자신감</p>
							<h3>체계적인 진료 보증 시스템</h3>
							<p class="title-text">치료만으로 완성이라고 말할 수 없습니다.
							체계적인 사후관리를 통해 책임진료를 약속합니다.</p>
						</div>
						<div class="txtbox1">
							<ul>
								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_31.jpg" alt="">
									</div>
									<div>
										<p>투엠치과의 확실함</p>
										<h5>치료 보증서 제공</h5>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_32.jpg" alt="">
									</div>
									<div>
										<p>투엠치과의 약속</p>
										<h5>사후 관리 제도</h5>
									</div>
								</li>

								<li>
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_33.jpg" alt="">
									</div>
									<div>
										<p>투엠치과의 책임감</p>
										<h5>전담주치의 제도</h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="area5-13 content">
					<div class="inner">
						<div class="area5-10box">
							<ul>
								<li>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_34.png" alt="">
								</li>
								<li>
									<p class="t-head">마취 했어요? 치료 끝났어요~</p>
									<h3>편안한 무통 마취 시스템</h3>
									<p>마취 한지도 모르게, 디지털 무통마취기 도입으로
									마취부터 통증 없이 편안한 치료를 도와드립니다.</p>
								</li>
							</ul>
						</div>
						<div class="area5-10box2 mt80">
							<ul>
								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_35.png" alt="">
									</div>
									<div>
										<h5>잇몸 표면
										도포 마취</span></h5>
									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_36.png" alt="">
									</div>
									<div>
										<h5>컴퓨터 무통
										마취 시스템</span></h5>

									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_37.png" alt="">
									</div>
									<div>
										<h5>섬세한
										핸드 마취</span></h5>

									</div>
								</li>

								<li class="box-shadow">
									<div>
										<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_38.png" alt="">
									</div>
									<div>
										<h5>손쉬운
										가글 마취</span></h5>

									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="area5-14 content">
					<div class="inner">
						<div class="title">
							<h3>8단계 <span class="point-color">멸균 소독 시스템</span></h3>
							<p class="title-text">사용되는 모든 진료 기구는 철저한 원칙에 따라 멸균 소독됩니다.</p>
						</div>
						<ul class="case-box">
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_39.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">01.</span> 침전</span></h6>
									<p>약제를 이용하여 소독 진행</p>
								</div>
							</li>

							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_42.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">02.</span> 1차 세척</span></h6>
									<p>의료용 솔과 세제를 이용하여
									꼼꼼한 1차 세척과정</p>
								</div>
							</li>

							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_40.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">03.</span> 초음파 세척</span></h6>
									<p>작은 기구의 미세한 부분까지
									세척해주는 초음파 세척과정</p>
								</div>
							</li>
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_41.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">04.</span> 2차 세척</span></h6>
									<p>소독액에 소독된 기구들을
									흐르는 물에 2차 세척과정</p>
								</div>
							</li>
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_43.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">05.</span> 건조</span></h6>
									<p>드라이어 및 자연광을
									이용하여 건조</p>
								</div>
							</li>
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_46.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">06.</span> 포장</span></h6>
									<p>개별로 라벨 부착 후 진공포장</p>
								</div>
							</li>
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_44.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">07.</span> 멸균</span></h6>
									<p>세척을 마친 기구들을
									고온고압으로 멸균</p>
								</div>
							</li>
							<li>
								<div>
									<img src="<? echo G5_THEME_IMG_URL; ?>/main/area5_45.png" alt="">
								</div>
								<div>
									<h6><span class="point-color">08.</span> 보관</span></h6>
									<p>살균소독기에 깔끔히 보관</p>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="fix-area1 content">
					<div class="inner">
						<div class="title">
							<h3>투엠치과의원 CLEAN <br class="m_br"><span class="point-color">멸균 SYSTEM</span></h3>
						</div>
						<ul class="col-2 tac before-after" style="max-width: 800px; margin: 0 auto;">
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/fix_01.png" alt="">
							</li>
							<li>
								<img src="<? echo G5_THEME_IMG_URL; ?>/main/fix_02.png" alt="">
							</li>
						</ul>
						<div class="title mt80">
							<h3>국제기준 멸균 프로세스 적용</h3>
							<p class="title-text">투엠치과의원은 CDC(미국 질병관리본부), WHO(세계보건기구)
							국제기준에 맞춘 철저한 멸균 프로세스를 시행하고 있습니다.</p>
						</div>
					</div>
				</div>

				<!-- <div class="area5-15 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<div class="title">
							<p>모든 치료 과정 디지털화!</p>
							<h3>21세기에 맞는 눈높이 진료</h3>
							<p class="title-text">모든 진료 과목은 <span class="fw700">DSLR로 촬영한 사진</span> 토대로 자세하게 설명 드립니다.
							진료 과정을 직접 눈으로 확인할 수 있어 진료 후 환자 만족도가 높습니다.</p>
						</div>
						<div class="area5-15box box-shadow">
							<h6>ALL STEP</h6>
							<h6>디지털 정밀 진단 / 디지털 스캐닝 / 디지털 상담</h6>
							<ul class="mt40">
								<li class="box-shadow">
									<div>
										<h6>STEP 01</h6>
									</div>
									<div>
										<p>진료
										(DSLR 촬영)</p>
									</div>
								</li>
								<li class="box-shadow">
									<div>
										<h6>STEP 02</h6>
									</div>
									<div>
										<p>치료 전 상담
										(실제 사진으로 상태 확인)</p>
									</div>
								</li>
								<li class="box-shadow">
									<div>
										<h6>STEP 03</h6>
									</div>
									<div>
										<p>결과
										(치료 후 결과 비교)</p>
									</div>
								</li>
								<li class="box-shadow">
									<div>
										<h6>STEP 04</h6>
									</div>
									<div>
										<p>귀가
										(상태 확인 후 귀가)</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div> -->

				<div class="area5-16 main-bg content mt80">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner" >
						<div class="title">
							<p>디지털 장비 및 신기술 도입에 적극적인 치과</p>
							<h3>대학병원 급 장비 보유</h3>
							<p class="title-text">투엠치과는 대학병원 급 장비로 <br class="m_br425">진단과 치료의 정확성을 높였습니다.</p>
						</div>
					</div>

				</div>

				<div class="area5-17 content main-bg">
					<div class="main-bg-wrap">
						<div class="main-bg-scale"></div>
					</div>
					<div class="inner">
						<div class="title">
							<p>어려운 건강보험 혜택, 투엠치과에서 챙겨드립니다!</p>
							<h3>건강보험 혜택 안내</h3>
							<p class="title-text">치료만으로 완성이라고 말할 수 없습니다.
							걱정되는 치료비까지 투엠치과에서 다 챙겨드릴게요!</p>
						</div>

						<div class="area5-17box">
							<ul>
								<li>
									<div>
										<h6>광중합 레진</h6>
									</div>
									<ul>
										<li><p>만 <span>12세</span> 이하</p></li>
										<li><p>영구치 충치치료</p></li>
										<li><p>본인부담금 <span>30%</span></p></li>
									</ul>
								</li>

								<li>
									<div>
										<h6>본인부담금</h6>
									</div>
									<ul>
										<li><p>일반인 <span>30%</span></p></li>
										<!-- <li><p>본인부담금 <span>20%</span> 경감</p></li> -->
										<li><p>임신중 본인부담금 <span>10%</span>
										(의원급 기준)</p></li>
									</ul>
								</li>

								<li>
									<div>
										<h6>임플란트</h6>
									</div>
									<ul>
										<li><p>만 <span>65세</span> 이상</p></li>
										<li><p>평생 <span>2개</span> (무치악 제외)</p></li>
										<li><p>본인부담금 <span>30%</span></p></li>
									</ul>
								</li>

								<li>
									<div>
										<h6>실란트<span class="x0_6">(홈메우기)</span></h6>
									</div>
									<ul>
										<li><p>만 <span>18세</span> 이하 청소년</p></li>
										<li><p>충치가 없는 큰 어금니,
										예방치료</p></li>
										<li><p>본인부담금 <span>10%</span></p></li>
									</ul>
								</li>

								<li>
									<div>
										<h6>스케일링</h6>
									</div>
									<ul>
										<li><p>만 <span>19세</span> 이상</p></li>
										<li><p>연 1회</p></li>
										<li><p>본인부담금 <span>약 16,000원</span></p></li>
									</ul>
								</li>

								<li>
									<div>
										<h6>틀니</h6>
									</div>
									<ul>
										<li><p>만 <span>65세</span> 이상(7년에 1회)</p></li>
										<li><p>부분틀니 또는 완전틀니</p></li>
										<li><p>본인부담금 <span>30%</span></p></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</section>
			<!-- e:  네번째 이동 끝 -->

			<!-- s:  다섯번째 카테고리 이동 -->
            <section class="content area5-18">

				<div class="area5-18box">
					<div class="move-txt1">
						<h2>2M DENTAL</h2>
					</div>
					<div class="move-txt2">
						<h2>DENTAL CLINIC</h2>
					</div>
					<div class="inner" >
						<div class="title">
							<h6>FOR THE PATIENT!</h6>	
							<h3>환자 중심의 진료공간 설계</h3>
							<p class="title-text">가장 편안하게 진료를 받으실 수 있도록
							환자 입장에서 생각하여 공간을 설계하였습니다.</p>
						</div>

						<div id="gallery">
							<div class="swiper-container gallery-top">
								<div class="swiper-wrapper">
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>

								</div>
								<!-- Add Arrows -->
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
									<div class="swiper-slide" tabindex="0" role="button"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
									<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>

								</div>
							</div>
							<!-- Initialize Swiper -->
							<script>
								$(document).ready(function(){
									var galleryTop= new Swiper('.gallery-top', {
										spaceBetween: 10,
										navigation: {
											nextEl: '.swiper-button-next',
											prevEl: '.swiper-button-prev',
										},
										loop: true,
										loopedSlides: 10
									});
									var galleryThumbs= new Swiper('.gallery-thumbs', {
									  spaceBetween: 10,
									  centeredSlides: false,
									  slidesPerView: 'auto',
									  touchRatio: 0.2,
									  slideToClickedSlide: true,
										  loop: true,
										  loopedSlides: 10
									});
									galleryTop.controller.control= galleryThumbs;
									galleryThumbs.controller.control= galleryTop;
								});
							</script>
						</div><!-- gallery-->
					</div>
				</div>
				
			</section>
			<!-- e:  다섯번째 이동 끝 -->

			<!-- s:  여섯번쨰 카테고리 이동 -->
			<section class="mt80">
				<div class="map-wrap">
					<!-- * 카카오맵 - 지도퍼가기 -->
					<!-- 1. 지도 노드 -->
					<div id="daumRoughmapContainer1650962634201" class="root_daum_roughmap root_daum_roughmap_landing"></div>

					<!--
						2. 설치 스크립트
						* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
					-->
					<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

					<!-- 3. 실행 스크립트 -->
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1650962634201",
							"key" : "29yrs",
							"mapWidth" : "",
							"mapHeight" : "360"
						}).render();
					</script>
				</div>
                <div class="inner" style="max-width: 1400px;">
					<div class="info-area">
						<ul>
							<li>
								<div class="address">
									<h4>주소</h4>
									<p>서울특별시 구로구 경인로 557 3층
									(구로역 2,3번 출구 맞은편 신한은행 건물 3층)</p>
								</div>
								<div class="time">
									<h4>진료안내</h4>
									<div>
										<ul>
											<li>
												<p>월/화/수/금</p>
											</li>
											<li>
												<p>오전 10시 ~ 오후 7시</p>
											</li>
										</ul>
									</div>
									<div>
										<ul>
											<li>
												<p class="point-color fw700">목요일(야간)</p>
											</li>
											<li>
												<p class="point-color fw700">오후 2시 ~ 오후 9시</p>
											</li>
										</ul>
									</div>
									<div>
										<ul>
											<li>
												<p>토요일</p>
											</li>
											<li>
												<p>오전 10시 ~ 오후 2시</p>
											</li>
										</ul>
									</div>
									<article class="notice">
										<p>※ 토요일은 점심시간 없이 진료합니다.</p>
										<p>※  일요일 및 공휴일은 휴진입니다.</p>
									</article>
								</div>

								<div class="call">
									<ul>
										<li>
											<h5>대표전화</h5>
										</li>
										<li>
											<h5 class="point-color fw700">02-2632-2879</h5>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<div class="map-icon">
									<ul>
										<li>
											<a href="http://naver.me/xA3CVuRP" target="_blank">
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_01.png" alt="">
											</a>
										</li>
										<li>
											<a href="http://kko.to/0bYgwo8vu" target="_blank">
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_02.png" alt="">
											</a>
										</li>
										<li>
											<a href="https://goo.gl/maps/WFfMXTNgnya9vw9J8" target="_blank">
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_03.png" alt="">
											</a>
										</li>
									</ul>
								</div>

								<div class="traffic">
									<h4>오시는 길</h4>
									<div>
										<ul>
											<li>
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_04.png" alt="">
											</li>
											<li>
												<p><span class="fw700 point-color">지하철 이용시</span>
												<span class="fw700">1호선 구로역 2, 3번 출구</span></p>
											</li>
										</ul>
									</div>
									<div>
										<ul>
											<li>
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_05.png" alt="">
											</li>
											<li>
												<p><span class="fw700 point-color">버스 이용시</span>
												<span class="fw700">구로역 구로기계 공구상가 하차 후 건너편 건물
												양천 04, 구로 09, 571, 654, 5630, 6516, 6512, 6613</span></p>
											</li>
										</ul>
									</div>
									<div>
										<ul>
											<li>
												<img src="<? echo G5_THEME_IMG_URL; ?>/main/footer_06.png" alt="">
											</li>
											<li>
												<p><span class="fw700 point-color">주차 안내</span>
												<span class="fw700">건물 지상 주차장 이용
												네비게이션 "투엠치과" 검색</span></p>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
			    </div>
			</section>
			<!-- e:  여섯번쨰 이동 끝 -->
           

		</div><!-- content_wrap -->
	</div><!-- content -->
	<span class="sound_only">
		랜딩 내용 적기
	</span><!-- sound_only -->    

 </body>

 <script>
$(function(){
	 $('.toggle_on').on('click', function(e) {
        $(this).toggleClass('on');
    });

    var bestProduct = new Swiper('.sect_01 .swiper-container', {
        observer: true,
        observeParents: true,
        slidesPerView: 1.5,
        centeredSlides: true,
        speed: 1000,
		effect: 'coverflow',
		//슬라이드 3d효과
		coverflowEffect: {
			rotate: 0,
			slideShadows: false,
			// stretch: 70, 간격조절
		},
		// 슬라이드 3d효과
        loop: true,
        pagination: {
          el: ".swiper-pagination",
           type: "progressbar",
        },
        navigation: {
            nextEl: ".case_next",
            prevEl: ".case_prev",
        },
        autoplay:true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            init: function() {
                $('.case_contr .case_play').on('click', function(e) {
                    if($(this).hasClass('on')){
                        bestProduct.autoplay.stop();
                    } else {
                        bestProduct.autoplay.start();
                    }
                })
            }
        },
        breakpoints: {
            475: {
                slidesPerView: 1.7,
            },
            601: {
                slidesPerView: 2.2,
            },
            701: {
                slidesPerView: 2.5,
            },
            800: {
                slidesPerView: 1.7,
            },
            1024: {
              slidesPerView: 2.3,
              centeredSlides: true,
            },
            1280: {
                slidesPerView: '2.7',
                centeredSlides: true,
            },
            1550: {
              slidesPerView: '3.7',
              centeredSlides: true,
            },
        }
    })



});


</script>

<script>

$('.area3 ul > li > div').mouseover(function(){
	$('.area3 ul > li > div').removeClass('on');
	$(this).addClass('on');
})

$('.area3 ul > li > div').mouseleave(function(){
	$(this).removeClass('on');
})

</script>

<script>
	AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

	window.addEventListener('load', AOS.refresh);

	//AOS.init({ disable: 'mobile' });

	var controller = new ScrollMagic.Controller();

	var circle1 = TweenMax.staggerTo('.area1 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene1 = new ScrollMagic.Scene({
		triggerElement: ".area1",
		duration: "2000", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area1 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle1)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle2 = TweenMax.staggerTo('.area2 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene2 = new ScrollMagic.Scene({
		triggerElement: ".area2",
		duration: "2000", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area2 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle2)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle3 = TweenMax.staggerTo('.area3 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene3 = new ScrollMagic.Scene({
		triggerElement: ".area3",
		duration: "2000", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area3 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle3)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle4 = TweenMax.staggerTo('.area4-1 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene4 = new ScrollMagic.Scene({
		triggerElement: ".area4-1",
		duration: "1500", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area4-1 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle4)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle5 = TweenMax.staggerTo('.area4-2 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene5 = new ScrollMagic.Scene({
		triggerElement: ".area4-2",
		duration: "1500", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area4-2 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle5)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle6 = TweenMax.staggerTo('.area4-6 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene6 = new ScrollMagic.Scene({
		triggerElement: ".area4-6",
		duration: "1500", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area4-6 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle6)
		.addTo(controller)
		//.addIndicators({
		//name: "circle"
	//})

	var circle7 = TweenMax.staggerTo('.area5-3 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene11 = new ScrollMagic.Scene({
		triggerElement: ".area5-3",
		duration: "1200", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-3 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle7)
		.addTo(controller)

	var circle8 = TweenMax.staggerTo('.area5-4 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene12 = new ScrollMagic.Scene({
		triggerElement: ".area5-4",
		duration: "1500", //100% = 100vh
		triggerHook: 0.7 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-4 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle8)
		.addTo(controller)

	var circle9 = TweenMax.staggerTo('.area5-7 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene13 = new ScrollMagic.Scene({
		triggerElement: ".area5-7",
		duration: "1500", //100% = 100vh
		triggerHook: 0.5 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-7 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle9)
		.addTo(controller)

	var circle10 = TweenMax.staggerTo('.area5-8 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene14 = new ScrollMagic.Scene({
		triggerElement: ".area5-8",
		duration: "1500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-8 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle10)
		.addTo(controller)

	var circle11 = TweenMax.staggerTo('.area5-9 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene15 = new ScrollMagic.Scene({
		triggerElement: ".area5-9",
		duration: "1500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-9 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle11)
		.addTo(controller)

	var circle12 = TweenMax.staggerTo('.area5-11 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene16 = new ScrollMagic.Scene({
		triggerElement: ".area5-11",
		duration: "1500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-11 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle12)
		.addTo(controller)

	var circle13 = TweenMax.staggerTo('.area5-15 .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene17 = new ScrollMagic.Scene({
		triggerElement: ".area5-15",
		duration: "1500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-15 .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle13)
		.addTo(controller)

	var circle14 = TweenMax.staggerTo('.area-dio .main-bg-scale', 1, {
		//onComplete: motionOncomplete
	});

	var scene18 = new ScrollMagic.Scene({
		triggerElement: ".area-dio",
		duration: "2000", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area-dio .main-bg-scale', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(circle14)
		.addTo(controller)


	var txt1 = TweenMax.staggerTo('.area4-5box .move-txt1', 1, {
		//onComplete: motionOncomplete
		x: "-700px"
	});

	var scene7 = new ScrollMagic.Scene({
		triggerElement: ".area4-5box .move-txt1",
		duration: "500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area4-5box .move-txt1', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt1)
		.addTo(controller)


	var txt2 = TweenMax.staggerTo('.area4-5box .move-txt2', 1, {
		//onComplete: motionOncomplete
		x: "700px"
	});

	var scene8 = new ScrollMagic.Scene({
		triggerElement: ".area4-5box .move-txt2",
		duration: "400", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area4-5box .move-txt2', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt2)
		.addTo(controller)

	var txt3 = TweenMax.staggerTo('.area5-1box .move-txt1', 1, {
		//onComplete: motionOncomplete
		x: "700px"
	});

	var scene9 = new ScrollMagic.Scene({
		triggerElement: ".area5-1box .move-txt1",
		duration: "500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-1box .move-txt1', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt3)
		.addTo(controller)


	var txt4 = TweenMax.staggerTo('.area5-1box .move-txt2', 1, {
		//onComplete: motionOncomplete
		x: "-700px"
	});

	var scene10 = new ScrollMagic.Scene({
		triggerElement: ".area5-1box .move-txt2",
		duration: "400", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-1box .move-txt2', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt4)
		.addTo(controller)

	var txt5 = TweenMax.staggerTo('.area5-18box .move-txt1', 1, {
		//onComplete: motionOncomplete
		x: "-700px"
	});

	var scene18 = new ScrollMagic.Scene({
		triggerElement: ".area5-18box .move-txt1",
		duration: "500", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-18box .move-txt1', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt5)
		.addTo(controller)


	var txt6 = TweenMax.staggerTo('.area5-18box .move-txt2', 1, {
		//onComplete: motionOncomplete
		x: "700px"
	});

	var scene19 = new ScrollMagic.Scene({
		triggerElement: ".area5-18box .move-txt2",
		duration: "400", //100% = 100vh
		triggerHook: 0.9 //0~1 트리거 위치 정하기
	})
		.setClassToggle('.area5-18box .move-txt2', 'on')
		// classtoggle 앞에는 선택 클래스 뒤에는 추가할 클래스
		//.setPin(".pin1") //요소 고정시키기 특정 지점 이후로 안따라오게 하려면 duration 지정
		.setTween(txt6)
		.addTo(controller)
</script>

<script>
/*sequenceActive(".area4-5 ul");
/* ************************
  * Active 클래스 반복
  ************************ */
/*function sequenceActive (activeList) {
	$(activeList).each(function  (index) {
		$itemList = $(this);
		$item = $itemList.find("li");
		itemLength = $item.length;
		startNum = 0;
		rollingSpeed = $itemList.data("rolling-time");
		
		function visualTime(){
			if(startNum < ( itemLength - 1)){
				startNum++;
			}else{
				startNum = 0;
			}
			visualPlay();
		}
		function visualPlay(){
			$item.each(function(id){
				if(id == startNum){
					$(this).addClass("active"); // li에 클래스 붙이기
				}else{
					$(this).removeClass("active");
				}
			});
		};
		visualPlay();
		visual_timer = setInterval(visualTime,rollingSpeed);
	});
}
*/
$('.area4-5 ul li').mouseover(function(){
	$(this).addClass("active");
});
$('.area4-5 ul li').mouseleave(function(){
	$(this).removeClass("active");
});



$('.area5-3 ul li').mouseover(function(){
	$(this).addClass("active");
});
$('.area5-3 ul li').mouseleave(function(){
	$(this).removeClass("active");
});
</script>

<script>
var youtube = new Swiper('.youtube_container', {
		speed: 800,
		spaceBetween: 0,
		slidesPerView: 'auto',
		loop:false,
		freeMode:true,
		observer:true,
		slideToClickedSlide:true,
		//autoplay : {
			//delay : 4000,
			//disableOnInteraction : false,  // false로 설정하면 스와이프 후 자동 재생이 비활성화 되지 않음
		//},
		
		navigation: {
			nextEl: '.main01_next',
			prevEl: '.main01_prev',
		},
		scrollbar: {
			el: '.ytb_scroll',
			hide: false,
		},
		breakpoints : { // 반응형 설정이 가능 width값으로 조정
		  1400 : {
			spaceBetween: 50,
			loop:true,
		  },
		},

	});

function callyoutube(link){
	var _width = 880,
		_height = 490,
		_iframe = '<iframe width="' + _width + '" height="' + _height + '" src="https://www.youtube.com/embed/' + link + '?autoplay=1&controls=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
		_mHtml = '';
		
	if ( $('#youtube-call-popup').length < 1 ){
		_mHtml += '<div id="youtube-call-popup">';
			_mHtml += '<div class="you-inner">';
				_mHtml += '<div class="box">';
					_mHtml += '<div class="close"><span class="line1"></span><span class="line2"></span></div>';
					_mHtml += _iframe;
				_mHtml += '</div>';
			_mHtml += '</div>';
		_mHtml += '</div>';
		$('#youtube-scope').append(_mHtml);
	}else{
		$('#youtube-call-popup .close').after(_iframe);
	};
		
	$('.gnb-btn').removeClass('active');
	$('#gnb-popup-wrap').fadeOut();
	$('#youtube-call-popup').fadeIn();
	
	$('#youtube-call-popup .close, #youtube-call-popup .you-inner .box').on('click', function(){
		$('#youtube-call-popup').fadeOut(function(){
			$('#youtube-call-popup iframe').remove();
		});
	});
}

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>	