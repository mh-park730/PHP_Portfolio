<?php if (!isset($isViewList) || !$isViewList) : ?>
<div class='layout_width'>
	<div class='board_title'>
		<?=$boardNm?>
	</div>

<?php endif; ?>
<?php
// 게시판 목록
$path = __DIR__ . "/Skins/".$boardSkin."/list.php";
if (file_exists($path)) {
	include $path;
}
?>
	<a href='<?=siteUrl("board/write?id={$id}")?>' class='board_title write_btn'>글 쓰기</a>
</div>