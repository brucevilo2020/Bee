<?php
/**
 * get_ameba_rss
 * アメーバブログから指定件数のRSS情報を取得します
 * @param string $url
 * @param integer $limit 全て取得する場合は「-1」
 * @return array SimpleXMLElement
 */
function get_ameba_rss( $url, $limit=5, $postlimit=80, $punctuation="/")
{
	$rss = curl_get_contents($url);
	$rss = simplexml_load_string($rss, 'SimpleXMLElement', LIBXML_NOCDATA );
	$results = array();
	

	foreach( $rss->channel->item as $item ){
		

		// PR: から始まる広告、指定数以上の記事は除く
		if( preg_match("/^PR:.+/",$item->title) || ($limit >= 0 && count($results) >= $limit) ){
			continue;
		}

		// 画像がなかった場合のデフォルト画像を指定しておきます
		$now_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		$item->thumbnail = trim($now_url,"/") . "/images/noimage.jpg";

		// 記事の中で最初に使われている画像を検索、設定する
		if( preg_match_all('/<img([\s\S]+?)>/is', $item->description, $matches) ){
			foreach( $matches[0] as $img ){
				if( preg_match('/src=[\'"](.+?jpe?g)[\'"]/', $img, $m) ){
					$item->thumbnail = $m[1];
				}
			}
		}

		// レスポンス用のPHPへのパスへ設定する
		$data = array("f" => (string)$item->thumbnail);
		$item->thumbnail = sprintf("response.php?%s", http_build_query($data));

		
		
		
		//　本文
		$item->description = strip_tags($item->description);
		$item->post = mb_substr($item->description, 0, $postlimit);
		
		//日付
		$year = mb_substr($item->pubDate, 12, 4);
		$month = mb_substr($item->pubDate, 8, 3);
		$date = mb_substr($item->pubDate, 5, 2);
		
		//英語表記の月を日本語に変換
		if ($month == "Jan") $month = "01";
		if ($month == "Feb") $month = "02";
		if ($month == "Mar") $month = "03";
		if ($month == "Apr") $month = "04";
		if ($month == "May") $month = "05";
		if ($month == "Jun") $month = "06";
		if ($month == "Jul") $month = "07";
		if ($month == "Aug") $month = "08";
		if ($month == "Sep") $month = "09";
		if ($month == "Oct") $month = "10";
		if ($month == "Nov") $month = "11";
		if ($month == "Dec") $month = "12";
		
		$item->pubDate = $year.$punctuation.$month.$punctuation.$date;
		$item->date = $year.$punctuation.$month.$punctuation.$date;
		
		$results[] = $item;
	}

	return $results;
}


/**
 * curl_get_contents
 * file_get_contentsの代替関数。
 * allow_url_fopen=off時にURLからファイル内容を取得する際に使用します
 * @param string $url
 * @param integer $timeout
 * @return string
 * @link http://blog.mach3.jp/2010/12/21/use-curl-for-filegetcontents.html
 */
function curl_get_contents( $url, $timeout=60 )
{
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_HEADER, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
	$result = curl_exec( $ch );
	curl_close( $ch );
	return $result;
}


/**
 * get_mime_type
 * 画像周りのmimeタイプを取得します
 * @param string $path
 * @return string
 */
function get_mime_type( $path )
{
	$mimeTypeList = array(
		"jpg"  => "image/jpeg",
		"jpeg" => "image/jpeg",
		"jp2"  => "image/jp2",
		"png"  => "image/png",
		"gif"  => "image/gif",
		"bmp"  => "image/bmp"
	);

	$info = pathinfo($path);

	if( isset($info["extension"]) && isset($mimeTypeList[ $info["extension"] ]) ){
		return $mimeTypeList[ $info["extension"] ];
	}else if( !function_exists("mime_content_type") ){
		return exec("file -Ib ".$path);
	}else{
		return mime_content_type($path);
	}
}
