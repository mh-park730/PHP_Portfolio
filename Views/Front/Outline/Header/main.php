<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
		<link rel="stylesheet" type='text/css' href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
		<link rel="stylesheet" type='text/css' href="https://unpkg.com/swiper/swiper-bundle.min.css" />
		<link rel="stylesheet" type='text/css' href='<?=siteUrl("assets/front/css/style.css")?>?t=<?=time()?>'>
		<link rel="stylesheet" type='text/css' href='<?=siteUrl("assets/front/css/top_menu.css")?>?t=<?=time()?>'>
		<link rel="stylesheet" type="text/css" href="<?=siteUrl("assets/front/css/member.css")?>?t=<?=time()?>">
		<link rel="stylesheet" type="text/css" href="<?=siteUrl("assets/front/css/footer_aside.css")?>?t=<?=time()?>">
		[[addCss]]
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
		<script src='<?=siteUrl("assets/common/ckeditor/ckeditor.js")?>'></script>
		<script src='<?=siteUrl("assets/common/js/layer.js")?>?t=<?=time()?>'></script>
		<script src='<?=siteUrl("assets/common/js/juso.js")?>?t=<?=time()?>'></script>
		<script src='<?=siteUrl("assets/front/js/common.js")?>?t=<?=time()?>'></script>
		[[addScript]]
		<title>Arsenalism :: 잉글랜드 프리미어리그 아스날 팬 사이트</title>
	</head>
<body>
	<header class='top_menu'>
		<!-- 탑 메뉴 영역 S -->
		<div class="top_menu layout_width">
			<div class="menu_wrap">
				<div class="inner">
					<div class="team_emblem">
						<?php
							$data = [
							'https://www.premierleague.com/',
							'https://www.arsenal.com/',
							'https://www.avfc.co.uk/',
							'https://www.brightonandhovealbion.com/',
							'https://www.burnleyfootballclub.com/',
							'https://www.chelseafc.com/en',
							'https://www.cpfc.co.uk/',
							'https://www.evertonfc.com/',
							'https://www.fulhamfc.com/',
							'https://www.leedsunited.com/',
							'https://www.lcfc.com/',
							'https://www.liverpoolfc.com/',
							'https://www.mancity.com/',
							'https://www.manutd.com/en',
							'https://www.nufc.co.uk/',
							'https://www.sufc.co.uk/',
							'https://www.southamptonfc.com/',
							'https://www.tottenhamhotspur.com/',
							'https://www.wba.co.uk/',
							'https://www.whufc.com/',
							'https://www.wolves.co.uk/',
							];
							
							foreach($data as $k => $v){
								if($k < 10){
									$k = "0" . $k;
								}
								$path = siteUrl("assets/front/images/emblem0");
								echo "
								<a href=".$v." target='_blank'>
									<img src='$path".$k.".png'>
								</a>";
							}
						?>
					</div>
					
					<!-- 메인 메뉴 영역 S -->
					<nav>
						<div class="gnb">
							<div class="gnb_wrap">
								<ul class='nav_menu'>
									<li>
										<a href="<?=siteUrl("");?>">홈</a>
									</li>
									<span class="bar">|</span>
									<li>
										<a href="<?=siteUrl("board/list?id=notice")?>">공지사항</a>
									</li>
									<span class="bar">|</span>
									<li>
										<a href="<?=siteUrl("board/list?id=news")?>">뉴스 / 정보</a>
									</li>
									<span class="bar">|</span>
									<li>
										<a href="<?=siteUrl("board/list?id=community")?>">커뮤니티</a>
									</li>
									<span class="bar">|</span>
									<li>
										<a href="<?=siteUrl("board/list?id=trade")?>">중고 장터</a>
									</li>
									<span class="bar">|</span>
									<li>
										<a href="<?=siteUrl("board/list?id=suggestion")?>">운영 / 건의</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<!-- 메인 메뉴 영역 E -->
						
				</div>
			</div>
		</div>
		<!-- 탑 메뉴 영역 E -->
	</header>