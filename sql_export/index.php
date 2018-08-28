<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/28
 * Time: 下午11:04
 */
try {
    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * FROM `my_log`;') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>