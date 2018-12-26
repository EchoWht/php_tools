<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/28
 * Time: 下午11:04
 * 参考文章：https://blog.csdn.net/xiaodong_526/article/details/83860473
 */
$tns = "  
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )
  )
       ";
$db_username = "wz";
$db_password = "ffffff";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
	foreach ($conn->query('SELECT count(1) from t_s_user') as $row) {
        print_r($row); 
    }
   
    $conn = null;
}catch(PDOException $e){
    echo ($e->getMessage());
}
?>