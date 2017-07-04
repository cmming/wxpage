
<?php

class filePath{

	protected $dir = "";
	protected $resourcePath = "";
    
	
    public function __construct($path,$resourcePath = ''){
        $this->dir = $path;
        $this->resourcePath = $resourcePath;
    }
	
	
	public function refresh($dir){
		
		$path_arr = array();
		
		
		$dir=iconv("utf-8","gb2312",$dir);
		
		if ($headle=opendir($dir)){
			
			while ($file=readdir($headle)){
				
				$file=iconv("gb2312","utf-8",$file);
				
				if ($file!='.' && $file!='..'){
					
					//echo "文件".$file."在文件夹".$dir."下<br />";
					
					// echo $dir.$file."<br />";
					//中文兼容问题
					$path_arr[]  = urlencode($dir.$file);
					
				}
			}		
			closedir($headle);
			
		}
		
		return $path_arr;
		
	}
	
	
	//写	一个文件 用于图片的缓存
	public function creat_path_tem(){
		$fileContent = $this->refresh($this->dir);
        $fileContent = '<?php return $imgPath = '.str_replace('\\/', '/', urldecode(json_encode($fileContent))).' ?>';
        $this->createFileTem($this->resourcePath,$fileContent);
	}
    
    public function createFileTem($filePath, $fileContent)
	{
        // $isNewFile = !file_exists($filePath);
        // $fp = fopen($filePath, 'a');
        // if ($fp) {
        //     if (flock($fp, LOCK_EX)) {
        //         if ($isNewFile) {
        //             chmod($filePath, 0666);
        //         }
        //         fwrite($fp, $fileContent . "\n");
        //         flock($fp, LOCK_UN);
        //     }
        //     fclose($fp);
        // }
        $myfile = fopen($filePath, "w");
        fwrite($myfile, $fileContent);
        fclose($myfile);	
	}
	
}


// (new filePath('./images/','./resource/imgFilePath.php'))->creat_path_tem();


?>