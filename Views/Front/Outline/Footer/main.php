<div id='layer_dim' class='dn'></div>
<iframe name='ifrmHidden' width='100%' height='100' frameborder='0'></iframe>
<!-- aside 메뉴 영역 S -->
<aside>
	<div class="aside_menu">
		<div class="aside_wrap">
			<div>
				<a href="<?=siteUrl("");?>">홈으로</a>
			</div>
		<?php if (isAdmin()) : ?>
			<div>
				<a href="<?=siteUrl("admin");?>">관리자</a>
			</div>
		<?php endif; ?>
		<?php if (isLogin()) : ?>
			<div>
				<a href="<?=siteUrl("member/update");?>">마이페이지</a>
			</div>
			<div>
				<a href="<?=siteUrl("member/logout");?>">로그아웃</a>
			</div>
		<?php else : ?>
			<div>
				<a href="<?=siteUrl("member/join");?>">회원가입</a>
			</div>
			<div>
				<a href="<?=siteUrl("member/login");?>">로그인</a>
			</div>
		<?php endif; ?>
		</div>
	</div>
</aside>
<!-- aside 메뉴 영역 E -->
	<footer>
		<div class="footer_bar"></div>
		<div class="footer layout_width">
			<div class="sitenm">
				Arsenalism :: 잉글랜드 프리미어리그 Arsenal FC 팬 사이트입니다
			</div>
			<div class="admin">
				운영자 메일 <i class="xi-mail-o"></i> <span class="mail">empty_headed@naver.com</span>
			</div>
		</div>
	</footer>
</body>
</html>