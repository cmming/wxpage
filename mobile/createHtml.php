<?php

function create_zip($files = array(),$destination = '',$overwrite = false) {
  //if the zip file already exists and overwrite is false, return false
  if(file_exists($destination) && !$overwrite) { return false; }
  //vars
  $valid_files = array();
  //if files were passed in...
  if(is_array($files)) {
    //cycle through each file
    foreach($files as $file) {
      //make sure the file exists
      if(file_exists($file)) {
        $valid_files[] = $file;
      }
    }
  }
  //if we have good files...
  if(count($valid_files)) {
    //create the archive
    $zip = new ZipArchive();
    if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
      return false;
    }
    //add the files
    foreach($valid_files as $file) {
      $zip->addFile($file,$file);
    }
    //debug
    //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
    //close the zip -- done!
    $zip->close();
    //check to make sure the file exists
    return file_exists($destination);
  }
  else
  {
    return false;
  }
}

function addFileToZip($path,$zip){
  $handler=opendir($path); //打开当前文件夹由$path指定。
  while(($filename=readdir($handler))!==false){
    if($filename != "." && $filename != ".."){//文件夹文件名字为'.'和‘..'，不要对他们进行操作
      if(is_dir($path."/".$filename)){// 如果读取的某个对象是文件夹，则递归
        addFileToZip($path."/".$filename, $zip);
      }else{ //将文件加入zip对象
        $zip->addFile($path."/".$filename);
      }
    }
  }
  @closedir($path);
}
// 生成文件名称
$htmlStr=isset($_REQUEST['html'])?$_REQUEST['html']:'';
$filePath=isset($_REQUEST['filePath'])?$_REQUEST['filePath']:'';
$filePath = json_decode($filePath,true);
$filename=isset($_REQUEST['filename'])?$_REQUEST['filename']:'index';
$myfile = fopen($filename.".html", "w") or die("Unable to open file!");
$txt = $htmlStr;
fwrite($myfile, $txt);

// fwrite($myfile, $txt);

fclose($myfile);
if(file_exists($filename.".html")){
    // 生成一个zip 资源提供下载
    $files_to_zip_html = array(
    './'.$filename.".html"
    );
    $files_to_zip = array_merge($files_to_zip_html,$filePath);
    var_dump($files_to_zip);
    // if true, good; if false, zip creation failed
    $result = create_zip($files_to_zip,'my-archive.zip');
}


// echo $htmlStr;
?>