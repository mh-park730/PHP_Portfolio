<div class='layout_width'>
	<div class='join_wrap'>
		<div align='center'><?=isset($memNo)?"회원 정보 수정":"회원 가입"?></div>
		<form method='post' action='<?=siteUrl("member/indb")?>' target='ifrmHidden' autocomplete='off' class='join_form'>
			<input type='hidden' name='mode' value='<?=isset($memNo)?"update":"register"?>'>
			<dl>
				<dt><span class='required'>*</span>아이디</dt>
				<dd>
					<?php if (isset($memNo)) : ?>
						<?=$memId?>
					<?php else : ?>
						<input type='text' name='memId'>
					<?php endif; ?>
				</dd>
					<?php if (isset($memNo)) : ?>
						<?=""?>
					<?php else : ?>
				<span class='join_caution'>*6~20자, 알파벳, 숫자 최소 1개 이상 포함</span>
					<?php endif; ?>
			</dl>
			<dl>
				<dt><span class='required'>*</span>비밀번호</dt>
				<dd>
					<input type='password' name='memPw'>
				</dd>
				<span class='join_caution'>*6~20자, 알파벳, 숫자, 특수문자 최소 1개 이상 포함</span>
			</dl>
			<dl>
				<dt><span class='required'>*</span>비밀번호확인</dt>
				<dd>
					<input type='password' name='memPwRe'>
				</dd>
				<span class='join_caution'>*비밀번호를 한 번 더 입력해 주세요</span>
			</dl>
			<dl>
				<dt><span class='required'>*</span>닉네임</dt>
				<dd>
					<input type='text' name='memNm' value='<?=isset($memNm)?$memNm:""?>'>
				</dd>
			</dl>
			<dl>
				<dt>이메일</dt>
				<dd>
					<input type='email' name='email' value='<?=isset($email)?$email:""?>'>
				</dd>
			</dl>
			<dl>
				<dt>휴대전화</dt>
				<dd>
					<input type='text' name='cellPhone' value='<?=isset($cellPhone)?$cellPhone:""?>'>
				</dd>
			</dl>
			<dl>
				<dt>주소</dt>
				<dd>
					<input type='text' name='zipcode' placeholder='우편번호' readonly class='w120' value='<?=isset($zipcode)?$zipcode:""?>' class='zipcode'>
					<span class='btn1 search_address'>주소 검색</span>
					<div>
						<input type='text' name='address' readonly  value='<?=isset($address)?$address:""?>' class='address'>
						<input type='text' name='addressSub' placeholder='나머지 주소' value='<?=isset($addressSub)?$addressSub:""?>' class='address_sub'>
					</div>
				</dd>
			</dl>
			<?php if (!isset($memNo)) : ?>
				<div class='terms'>
					<div id='terms'><?=$term1?></div>
					<input type='checkbox' name='agree' id='agree' value='1'>
					<label for='agree'>약관의 내용을 모두 확인했으며 이에 동의합니다.</label>
				</div>
				<div class='join_btns'>
					<a href='<?=siteUrl("")?>'>취소</a>
					<input type='submit' value='회원 가입'>
				</div>
				<?php else : ?>
				<div class='join_btns2'>
					<a href='<?=siteUrl("")?>'>취소</a>
					<input type='submit' value='정보 수정'>
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>