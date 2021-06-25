<?php
/**
cUrl(소켓 통신 : 자바스크립트 엔진 동작 X)

서버 -> 브라우저 에뮬레이터
라라벨 자체 모듈 -> dusk 필요
*/

$category = "";
switch ($_GET['num']) {
	case 1: $category = "epl"; break;
	case 2: $category = "primera"; break;
	case 3: $category = "bundesliga"; break;
	case 4: $category = "seria"; break;
	case 5: $category = "ligue1"; break;
	default : 
		$category = "epl";
}
$path = __DIR__ . "/../rank_data/rank_".$category;
if (file_exists($path)) {
	$stamp = filemtime($path);
	if (time() - $stamp > 60 * 60 * 100000) {
		@unlink($path);
	} else {
		$list = unserialize(urldecode(file_get_contents($path)));
	}
}


if (!file_exists($path)) {
	$url = "http://codefty.com/crawler?url=https://sports.news.naver.com/wfootball/record/index.nhn?category={$category}&tab=team";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($ch);
	curl_close($ch);
	$html = trim($html);
	$pattern = "/<table summary[^>]+>/im";
	preg_match($pattern, $html, $matches);
	$html2 = explode($matches[0], $html);
	$html2 = explode("</html>", $html2[1]);
	$html2 = explode("<tbody>", $html2[0]);
	$html2 = explode("</tbody>", $html2[1]);
	$tmp = explode("<tr>", $html2[0]);
	$list = [];
	foreach ($tmp as $li) {
		$li = explode("</tr>", $li);
		$li = $li[0];
		$pattern = "/<td[^>]*>/m";
		preg_match_all($pattern, $li, $matches);
		$data = [];
		$no = 0;
		foreach ($matches[0] as $m) {
			$li = str_replace($m, "", $li);
			$tmp2 = explode("</td>", $li);
			foreach ($tmp2 as $k => $v) {
				$v = strip_tags($v);
				$key = "";
				switch ($k) {
					case 0: 
						$key = "순위"; 
						$no = $v = (Integer)$v;
						break;
					case 1: $key = "팀"; break;
					case 2: $key = "승점"; break;
					case 3: $key = "승"; break;
					case 4: $key = "무"; break;
					case 5: $key = "패"; break;
					case 6: $key = "득점"; break;
					case 7: $key = "실점"; break;
					case 8: $key = "득실차"; break;
				}
				
				if ($key) {
					$data[$key] = trim($v);
				}	
			}
		}
		if ($data) {
			$list[$no] = $data;
		}
	}
	
	file_put_contents($path, urlencode(serialize($list)));
}

echo "<pre>";
print_r($list);
echo "</pre>";