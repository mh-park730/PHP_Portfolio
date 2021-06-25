<div class='layout_width'>
	<div class='board_title'><?=$boardNm?></div>

<?php
// 게시판 조회
$path = __DIR__ . "/Skins/".$boardSkin."/view.php";
if (file_exists($path)) {
	include $path;
}

// 댓글 
if (isset($commentContents)) {
	echo $commentContents;
}
?>

<!-- 하단 게시글 목록 -->
<?php
if (isset($listContents)) {
	echo "<div class='list_title'>게시글 목록</div>";
	echo $listContents;
}
?>
</div>