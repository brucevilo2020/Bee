<?php
include_once(dirname(__FILE__)."/functions.php");

/**
 * response.php
 * 画像のレスポンスを返します
 */
$f = isset($_GET["f"]) ? $_GET["f"] : "";
$file_uri = str_replace("\0", "", $f);

// 値を取得
if( $file = curl_get_contents($file_uri) ){
	$mime = get_mime_type($file_uri);
	header("Content-Type: {$mime}");
	print $file;
	exit();
}

print "Error";
exit();





