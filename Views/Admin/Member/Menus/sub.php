<div class='sub_wrap'>
	<ul class='sub_menu layout_width'>
		<li><a href='<?=siteUrl("admin/member/list")?>'<?php if ($menu == 'list') echo " class='on'";?>>회원 목록</a></li>
		<li><a href='<?=siteUrl("admin/member/register")?>'<?php if ($menu == 'register') echo " class='on'";?>>회원 등록</a></li>
		<li><a href='<?=siteUrl("admin/member/config")?>'<?php if ($menu == 'config') echo " class='on'"?>>약관 관리</a>
	</ul>
</div>