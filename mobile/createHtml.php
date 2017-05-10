<?php
// 生成文件名称
$htmlStr=isset($_REQUEST['html'])?$_REQUEST['html']:'';
var_dump($_REQUEST);
$filename=isset($_REQUEST['filename'])?$_REQUEST['filename']:'1';
$myfile = fopen($filename.".html", "w") or die("Unable to open file!");
$txt = $htmlStr;
fwrite($myfile, $txt);

// fwrite($myfile, $txt);

fclose($myfile);

echo $htmlStr;
?>