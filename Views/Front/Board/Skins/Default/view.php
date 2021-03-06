<!-- Default 스킨 - 게시글 보기 -->
<div class='board_skin_default view'>
	<div class='subject'><?=$subject?></div>
	<div class='post_info'>
		글쓴이 : <?=$memNo?$poster:"비회원"?>
		/ 조회수 : <?=number_format($hit)?> 
		/ 작성일 : <?=date("Y.m.d H:i", strtotime($regDt))?>
	</div>
	<?php if ($link) : ?>
	<div class='rows'>
		링크 : <a href='<?=$link?>' target='_blank'><?=$link?></a>
	</div>
	<?php endif; ?>
	<?php if ($email) : ?>
	<div class='rows'>
		이메일 : <a href='mailto:<?=$email?>'><?=$email?></a>
	</div>
	<?php endif; ?>
	<?php if (isset($attachFiles['files'])) : ?>
	<?php foreach ($attachFiles['files'] as $k => $file) : ?>
	<div class='rows'>
		첨부파일<?=$k+1?> : <a href='<?=siteUrl("file/download")?>?idx=<?=$file['idx']?>' target='ifrmHidden'><?=$file['fileName']?></a>
	</div>
	<?php endforeach; ?>
	<?php endif; ?>
	
	<div class='contents'><?=$contents?></div>
	
	<a href='<?=siteUrl("board/list")?>?id=<?=$boardId?>' class='board_btn'>글목록</a>
	<a href='<?=siteUrl("board/write")?>?id=<?=$boardId?>' class='board_btn'>글쓰기</a>
	<?php if ($updatePossible) : ?>
	<a href='<?=siteUrl("board/update")?>?idx=<?=$idx?>' class='board_btn'>글수정</a>
	<?php endif; ?>
	<?php if ($deletePossible) : ?>
	<a href='<?=siteUrl("board/indb")?>?mode=delete&idx=<?=$idx?>' onclick="return confirm('정말 삭제하시겠습니까?');" class='board_btn'>글삭제</a>
	<?php endif; ?>
</div>

<!--// board_skin_default -->