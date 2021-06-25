<!-- Default 스킨 form.php -->
<div class='board_skin_default write layout_width'>
	<dl>
		<dt>작성자</dt>
		<dd>
			<?php if (isset($poster)) { echo $poster; } elseif (!isset($poster) && isLogin()) { echo $_SESSION['member']['memNm']; }?>
			<input type='hidden' name='poster' value='<?php if (isset($poster)) { echo $poster; } elseif (!isset($poster) && isLogin()) { echo $_SESSION['member']['memNm']; }?>'>
			<?php if(!isLogin()) : ?>
			<input type='text' name='poster' value='<?php if (isset($poster)) { echo $poster; } elseif (!isset($poster) && isLogin()) { echo $_SESSION['member']['memNm']; }?>'>
			<?php endif; ?>
		</dd>
	</dl>
	<?php if ($confCategory) :  // 게시글 분류 ?>
	<dl>
		<dt>분류</dt>
		<dd>
			<select name='category'>
				<option value=''>- 선택 하세요 -</option>
			<?php foreach ($confCategory as $cate) : ?>
				<option value='<?=$cate?>'<?php if (isset($category) && $category == $cate) echo " selected";?>><?=$cate?></option>
			<?php endforeach; ?>
			</select>
		</dd>
	</dl>
	<?php endif; ?>
	<?php if (!isLogin()) :  // 비회원인 경우는 비밀번호 입력 항목 추가 ?>
	<dl>
		<dt>비밀번호</dt>
		<dd>
			<input type='password' name='password' placeholder='비회원 글수정, 삭제 비밀번호'>
		</dd>
	</dl>
	<?php endif; ?>
	<?php if (in_array("link", $columns)) : ?>
	<dl>
		<dt>링크</dt>
		<dd>
			<input type='text' name='link' value='<?=isset($link)?$link:""?>'>
		</dd>
	</dl>
	<?php endif; ?>
	<?php if (in_array("email", $columns)) : ?>
	<dl>
		<dt>이메일</dt>
		<dd>
			<input type='email' name='email' value='<?=isset($email)?$email:""?>'>
		</dd>
	</dl>
	<?php endif; ?>
	<dl>
		<dt>제목</dt>
		<dd>
			<input type='text' name='subject' value='<?=isset($subject)?$subject:""?>'>
		</dd>
	</dl>
	<dl>
		<dt>내용</dt>
		<dd>
			<textarea name='contents' id='contents'><?=isset($contents)?$contents:""?></textarea>
		</dd>
	</dl>
	<?php if (in_array('image', $columns)) : ?>
	<dl>
		<dt>이미지</dt>
		<dd>
			<span class='btn1' onclick="layer.popup('<?=siteUrl("file/upload")?>?gid=<?=$gid?>&type=image', 280, 130);">이미지 추가</span>
			<span class='uploaded_images'>
			<?php if (isset($attachFiles) && isset($attachFiles['images'])) : ?>
			<?php foreach ($attachFiles['images'] as $file) : ?>
			<span class='file_box' data-idx='<?=$file['idx']?>' data-url='<?=$file['url']?>'>
				<a href='<?=siteUrl("file/download")?>?idx=<?=$file['idx']?>' target='ifrmHidden'><?=$file['fileName']?></a>
				<i class='remove xi-file-remove'></i>
				<i class='addContents xi-upload'></i>
			</span>
			<?php endforeach;?>
			<?php endif; ?>
			</span>
		</dd>
	</dl>
	<?php endif; ?>
	<?php if (in_array('file', $columns)) : ?>
	<dl>
		<dt>파일첨부</dt>
		<dd>
			<input type='file' id='file' name='file[]' multiple>
			<label for='file'>파일 첨부</label>
			<?php if (isset($attachFiles) && isset($attachFiles['files'])) : ?>
			<div class='uploaded_files mt10'>
				<?php foreach ($attachFiles['files'] as $file) : ?>
				<span class='file_box' data-idx='<?=$file['idx']?>' data-url='<?=$file['url']?>'>
					<a href='<?=siteUrl("file/download")?>?idx=<?=$file['idx']?>' target='ifrmHidden'><?=$file['fileName']?></a>
					<i class='remove xi-file-remove'></i>
				</span>
				<?php endforeach;?>
			</div>
			<?php endif; ?>
		</dd>
	</dl>
	<?php endif; ?>
	<a href='javascript:history.back(-1);' class='cancel_btn' onclick="return confirm('정말 취소하시겠습니까?')">취소</a>
	<button type='submit' class='write_btn'><?=isset($idx)?"수정":"등록"?></button>
</div>
<!--// board_skin_default -->