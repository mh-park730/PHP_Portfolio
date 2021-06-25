	<main>
		<!-- 메인 로고 영역 S -->
		<div class="main_logo layout_width">
			<div class="logo_wrap">
				<div class="logo">
					<img src="<?=siteUrl("assets/front/images/")?>logo1.png">
				</div>
			</div>
		</div>
		<!-- 메인 로고 영역 E -->
		
		<!-- 이적 정보 영역 S -->
		<section>
			<div class="transfer board layout_width">
				<div class="transfer_wrap">
					<div class="title text">
						<div class="text1">&lt; 이적 정보 &gt;</div>
						<div class="text2">- 각종 이적 정보 &amp; 관련 기사</div>
					</div>
						<table class="inner">
						<tr class="title">
							<th class="subject">제목</th>
							<th class="name">작성자</th>
							<th class="date">작성일</th>
							<th class="view">조회 수</th>
						</tr>
						<?php
							$list = getLatestPosts("news", "이적", 5, true);
						?>
						<?php if ($list) : ?>
						<?php foreach($list as $li) : ?>
						<tr>
							<td><a href="<?=siteUrl("board/view?idx={$li['idx']}")?>"><?=$li['subject']?> 
							<?php if ($li['commentCount'] > 0)  : ?>
							<span class="reply">[<?=number_format($li['commentCount'])?>]</span></a>
							<?php endif; ?>
						</td>
							
							<td><?=$li['poster']?></td>
							<td><?=date("Y.m.d", strtotime($li['regDt']))?></td>
							<td><?=number_format($li['hit'])?></td>
						</tr>
				<?php endforeach; ?>
				<?php endif; ?>
					</table>
				</div>
			</div>
		</section>
		<!-- 이적 정보 영역 E -->
		
		<!-- 칼럼 영역 S -->
		<section>
			<div class="column board layout_width">
				<div class="column_wrap">
					<div class="title text">
						<div class="text1">&lt; 축구 경기 / 기사 &gt;</div>
						<div class="text2">- 해외 축구 경기 관련 각종 기사</div>
					</div>
					<div class="column_contents">
						<?php
						$list = getLatestPosts("news", "경기", 4, true);
						?>
						<?php if ($list) : ?>
						<?php foreach($list as $li) : ?>
							<div class='contents_wrap'>
								<a href='<?=siteUrl("board/view?idx={$li['idx']}")?>'>
									<img src='<?=$li['attachFiles']['images']['0']['url']?>'>
									<div class='info'>
										<div class='col_subject'><?=$li['subject']?></div>
										<div class='col_info'>
											<span class='col_poster'>작성자 : <?=$li['poster']?></span>
											<span>작성일 : <?=date("Y.m.d", strtotime($li['regDt']))?></span>
											<span>조회수 : <?=number_format($li['hit'])?></span>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- 칼럼 영역 E -->
		
		<!-- 베스트 게시글 영역 S -->
		<section>
			<div class="board layout_width">
				<div class="title text">
					<div class="text1">&lt; 베스트 게시글 &gt;</div>
					<div class="text2">- 커뮤니티 게시판 조회 수 Top5 게시글</div>
				</div>
				<table class="inner">
					<tr class="title">
						<th class="subject">제목</th>
						<th class="name">작성자</th>
						<th class="date">작성일</th>
						<th class="view">조회 수</th>
					</tr>
					<?php
					$list = getLatestPosts("community", null, 5, true);
					?>
					<?php if ($list) : ?>
					<?php foreach($list as $li) : ?>
					<tr>
						<td><a href="<?=siteUrl("board/view?idx={$li['idx']}")?>"><?=$li['subject']?> 
						<?php if ($li['commentCount'] > 0)  : ?>
						<span class="reply">[<?=number_format($li['commentCount'])?>]</span></a>
						<?php endif; ?>
						</td>
							
						<td><?=$li['poster']?></td>
						<td><?=date("Y.m.d", strtotime($li['regDt']))?></td>
						<td><?=number_format($li['hit'])?></td>
					</tr>
					<?php endforeach; ?>
					<?php endif; ?>
				</table>
			</div>
		</section>
		<!-- 베스트 게시글 영역 E -->
	</main>