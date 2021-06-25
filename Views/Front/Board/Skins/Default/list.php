<!-- Default 스킨 - 게시글 목록 -->

<div class='board_skin_default list layout_width'>
	<form name='frmList' method='get' action='?'>
		<input type='hidden' name='id' value='<?=$id?>'>
		<table class='board_list'>
			<thead>
				<tr>
					<th width='120'>
					<?php if ($confCategory) : ?>
						<select name='category' onChange='frmList.submit();'>
							<option value=''>전체</option>
						<?php foreach ($confCategory as $cate) : ?>
							<option value='<?=$cate?>'<?php if ($cate == $category) echo " selected";?>><?=$cate?></option>
						<?php endforeach; ?>
						</select>
					<?php else : ?>
						번호
					<?php endif; ?>
					</th>
					<th>제목</th>
					<th width='120'>작성자</th>
					<th width='100'>작성일</th>
					<th width='80'>조회</th>
				</tr>
			</head>
			<tbody>
			<?php if ($list) : ?>
			<?php foreach ($list as $li) : ?>
				<tr>
					<td align='center'><?=$startNo--?></td>
					<td>
						<a href='<?=siteUrl("board/view")?>?idx=<?=$li['idx']?>' class='subject'>
							<?=$li['category']?"<span class='category'>[".$li['category']."]</span>":""?>
							<?=$li['subject']?>
							<?php if ($li['commentCount'] > 0) : ?>
							<span class='comment_count'>[<?=number_format($li['commentCount'])?>]</span>
							<?php endif; ?>
							<?php if ($li['isNew']) : ?>
							<img src='<?=siteUrl("assets/front/images/new.gif")?>' class='icon'>
							<?php endif; ?>
						</a>
					</td>
					<td align='center'><?=$li['poster']?></td>
					<td align='center'>
						<?=date("Y.m.d", strtotime($li['regDt']))?>
					</td>
					<td align='center'><?=$li['hit']?></td>
				</tr>
			<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan='4' class='no_post'>게시글이 없습니다.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
		<?=$pagination?>
	</form>
</div>
