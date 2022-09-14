$(function(){ // jQuery 준비
//		$('#nav_wrap')();
			// 메뉴 아이콘 클릭시 메뉴 오른쪽에서 나타남
			var navi_show = false; // 메뉴가 닫혀있는 상태
		$('#m_menu').click(function(){
			$('#m_menu > img').attr('src',$('#m_menu span.hide').find('img').attr('src'));
			navi_show = !navi_show //navi_show 앞에 값을 변경해주기
			if(navi_show){ // 만약 네비쇼를 한번 클릭했을때
				$('#nav_wrap').show();
				$('#nav_wrap').css({ // gnb가 left 0이면 1초안에 보여라 (메뉴열기)
					right:0
				});
			}else{ //한번 더 누르는 경우 
				$('#m_menu > img').attr('src',$('#m_menu span.show').find('img').attr('src'));
				$('#nav_wrap').css({ // gnb left를 -100% 해서 1초안에 숨겨라 (메뉴닫기)
					right:'-100%'
				});
			}
			return false;
		});

		$('span.close').click(function(){ //close를 눌렀을때 
			$('#m_menu > img').attr('src',$('#m_menu span.show').find('img').attr('src'));
			navi_show = false; //단 navi_show가 참일떄!
		});


	}); //jQuery 종료