<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

if(defined('_INDEX_')) {
    $idx_nav = ' navigation';
    $menu_href = '';
} else {
    $idx_nav = '';
    $menu_href = G5_URL;
}

?>
<!-- 이벤트 게시판 -->
<?php 
include_once('./_common.php'); 
include_once(G5_LIB_PATH.'/latest.lib.php'); 
?> 
<!-- 상단 시작 { -->
<div id="hd">
	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
	<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}

		if ($bo_table == "online") {
		 include_once(G5_THEME_PATH.'/online_nav.php');	
		} else if ($bo_table == "qna") {
		   include_once(G5_THEME_PATH.'/qna_nav.php');
		} else if ($bo_table == "around") {
		   include_once(G5_THEME_PATH.'/around_nav.php');
		};
	?>
	<header>
		<div id="header_wrap" >
			<div id="gnb">
				<!-- <ul class="util_member">
					<?php if ($is_member) {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">회원</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
					<?php if ($is_admin) {  ?>
					<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">관리자</a></li>
					<?php }  ?>
					<?php } else {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
					<?php }  ?>
				</ul>  -->
			</div>
			<div id="logo">
				<a href="">
					<img src="<? echo G5_THEME_IMG_URL; ?>/head_sub_01.png" alt="">
				</a>
				<a href="<?php echo G5_URL ?>/index.php">
					<img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="">
				</a>
				<a href="tel:02-2632-2879">
					<img src="<? echo G5_THEME_IMG_URL; ?>/head_sub_05.png" alt="">
				</a>
			</div><!-- logo -->
            <div id="logo_m">
				<a href="<?php echo G5_URL ?>/index.php">
					<img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="">
				</a>
			</div><!-- logo -->
			<div id="m_phone">
				<a href="tel:02-6953-2833"><img src="<? echo G5_THEME_IMG_URL; ?>/phone.png" alt=""></a>
			</div>
			
            <div id="m_menu">
				<span class="show">
					<img src="<? echo G5_THEME_IMG_URL; ?>/menu.png" alt="">
				</span>	
				<span class="hide">
					<img src="<? echo G5_THEME_IMG_URL; ?>/menu_close.png" alt="">
				</span>
                <img src="<? echo G5_THEME_IMG_URL; ?>/menu.png" alt="">
			</div><!-- m_menu-->
		</div><!-- header_wrap -->
	</header>
</div>

<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title" class="center"><?php echo $g5['title'] ?></div><?php } ?> 
		<!-- board, login, join, etc (backend develop part) : 수정 불가 -->