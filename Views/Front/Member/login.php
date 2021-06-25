<div class='layout_width'>
	<div class='login_form'>
		<div class='login'>로그인</div>
		<form method='post' action='<?=siteUrl("member/loginOk")?>' target='ifrmHidden' autocomplete='off'>
			<div class='login_id'>
				<input type='text' name='memId' placeholder='아이디'>
			</div>
			<div class='login_pw'>
				<input type='password' name='memPw' placeholder='비밀번호'>
			</div>
			<div>
				<a href='<?=siteUrl("member/findId")?>'>아이디 찾기</a> / 
				<a href='<?=siteUrl("member/findPw")?>'>비밀번호 찾기</a>
			</div>
			<input type='submit' value='로그인'>
		</form>
	</div>
</div>