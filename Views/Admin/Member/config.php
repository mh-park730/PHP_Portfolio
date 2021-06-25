<div class='layout_width'>
	<div class='title1'>약관 관리</div>
	<div class='content_box'>
		<form method='post' action='<?=siteUrl("admin/member/indb")?>' target='ifrmHidden' autocomplete='off' class='mem_form'>
			<input type='hidden' name='mode' value='config'>
			<dl>
				<dt>회원가입 약관1</dt>
				<dl>
					<textarea name='term1'><?=$term1?></textarea>
				</dl>
			</dl>
			<dl>
				<dt>회원가입 약관2</dt>
				<dl>
					<textarea name='term2'><?=$term2?></textarea>
				</dl>
			</dl>
			<dl>
				<dt>회원가입 약관3</dt>
				<dl>
					<textarea name='term3'><?=$term3?></textarea>
				</dl>
			</dl>
			<div align='center'>
				<input type='submit' value='저장하기' class='btn1 mem_term'>
			</div>
		</form>
	</div>
	<!--// content_box -->
</div>