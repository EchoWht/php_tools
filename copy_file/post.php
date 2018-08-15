<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/15
 * Time: 下午10:35
 */
//echo copy("../test/a.txt",date("YmdH")."/b.txt");//拷贝
//
//echo date("YmdH");
//mkdir("./a/".date("YmdH"),0777,true);//创建以当前日期命名的文件夹
//exit();
require_once ("../utils/StringUtils.php");

$filePaths=$_REQUEST['filePaths'];//需要拷贝文件的部分路径
$copyFrom=$_REQUEST['copyFrom'];//需要拷贝文件的主目录
$stringUtils=new StringUtils();
for ($i=0;$i<count($filePaths);$i++){
    if ($filePaths[$i]){
        $filePaths[$i]= $stringUtils->subStrBackward($filePaths[$i],':');//去掉冒号之前的内容
        //如果是.java则替换成.class
        $filePaths[$i]=str_replace(".java",".class",$filePaths[$i]);
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
    $from =$copyFrom.$filePath;
    $to=$dirName."/".$filePath;
    $to_dir=$stringUtils->subStrForward($to,'/');
   if (!file_exists($to_dir)) {
       //判断下是否创建文件夹了
       mkdir($to_dir,0777,true);
   };
    copy($from,$to);
}






