<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/17
 * Time: 22:50
 */
chdir("../");
(exec("git status",$res)) ;
var_dump($res);
//passthru("git status");