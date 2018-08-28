<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/15
 * Time: 下午10:35
 */
require_once ("../utils/StringUtils.php");
//返回消息
$returnMsg=array(
    "success"=>true,
    "msg"=>"拷贝成功",
    "copy"=>array()
);

$filePaths=$_REQUEST['filePaths'];//需要拷贝文件的部分路径
$copyFromClass=$_REQUEST['copyFromClass'];//需要拷贝文件的主目录
$copyFromJsp=$_REQUEST['copyFromJsp'];//需要拷贝文件的主目录
$copyFrom=$copyFromJsp;//需要拷贝文件的主目录


$stringUtils=new StringUtils();
for ($i=0;$i<count($filePaths);$i++){
    if ($filePaths[$i]){
        $filePaths[$i]= $stringUtils->subStrBackward($filePaths[$i],':');//去掉冒号之前的内容

        $filePaths[$i]= str_replace("01source/wz/src/","",$filePaths[$i]);//去掉01source/wz/src/
        $filePaths[$i]= str_replace("01source/wz/WebRoot/","",$filePaths[$i]);//去掉 01source/wz/WebRoot

        $filePaths[$i]= str_replace("src/","",$filePaths[$i]);//去掉src/
        $filePaths[$i]= str_replace("WebRoot/","",$filePaths[$i]);//去掉 WebRoot/

        $filePaths[$i]=str_replace(".java",".class",$filePaths[$i]);//如果是.java则替换成.class
    }else{
       unset($filePaths[$i]);//删除空的
    }
}
//var_dump($filePaths);
$dirName=date("YmdH");
if (count($filePaths)>0&&!file_exists($dirName)){
    mkdir($dirName,0777,true);
}
foreach ($filePaths as $filePath){
//    /var_dump($dirName."/".$filePath);
    if (stristr($filePath,".class")){
        $copyFrom=$copyFromClass;
    }
    $from =$copyFrom.$filePath;
    $to=$dirName."/".$filePath;
    $to_dir=$stringUtils->subStrForward($to,'/');
   if (!file_exists($to_dir)) {
       //判断下是否创建文件夹了
       mkdir($to_dir,0777,true);
   };
    $result=copy($from,$to);
    if (!$result){
        $returnMsg["success"]=false;
        array_push($returnMsg["copy"],array($from,$to));
    }
}
echo json_encode($returnMsg);






