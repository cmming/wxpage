<?php

include './resource/imgFilePath.php';

// 获取10张图片
// searchdata={"page":"1"};
if(isset($_REQUEST['searchdata'])){
    $out_data =array();
    $searchdata = json_decode($_REQUEST['searchdata'],true)?json_decode($_REQUEST['searchdata'],true):$_REQUEST['searchdata']; 
    $page = isset($searchdata['page'])?intval($searchdata['page']):1;
    $result = array_slice($imgPath,($page-1)*10,$page*10);

    $out_data['data'] = $result;
    $out_data['all_num'] = count($imgPath);
    echo json_encode($out_data);
}else{
    echo '参数错误！';
}
    

?>