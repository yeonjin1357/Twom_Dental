	$(function(){ // jQuery 준비

		$('ul.tab > li').eq(0).addClass('selected');
		$('.tab_box > div').hide(); 
		$('.tab_box > div').eq(0).show(); 
		$('ul.tab > li').click(function(){ 
			$('ul.tab > li').removeClass('selected');
			$(this).addClass('selected');
			$('.tab_box > div').hide();
			$('.tab_box > div').eq($(this).index()).show(); 
						
			return false;
			
		});

		$('#tab-menu1').change(function(){
			$('#tab-content1').css({'display':'block'});
			$('#tab-content2').css({'display':'none'});
			$('#tab-content3').css({'display':'none'});
			$('#tab-content4').css({'display':'none'});
		})

		$('#tab-menu2').change(function(){
			$('#tab-content1').css({'display':'none'});
			$('#tab-content2').css({'display':'block'});
			$('#tab-content3').css({'display':'none'});
			$('#tab-content4').css({'display':'none'});
		})
		$('#tab-menu3').change(function(){
			$('#tab-content1').css({'display':'none'});
			$('#tab-content2').css({'display':'none'});
			$('#tab-content3').css({'display':'block'});
			$('#tab-content4').css({'display':'none'});
		})

		$('#tab-menu4').change(function(){
			$('#tab-content1').css({'display':'none'});
			$('#tab-content2').css({'display':'none'});
			$('#tab-content3').css({'display':'none'});
			$('#tab-content4').css({'display':'block'});
		})
	}); //jQuery 종료