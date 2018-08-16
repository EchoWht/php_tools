<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/15
 * Time: 下午11:48
 */

class StringUtils
{
    /**
     * 截取某个字符以后的字符串
     * @param $str1
     * @param $str2
     * @return bool|string
     */
    public function subStrBackward($str1,$str2){
        $result = substr($str1,stripos($str1,$str2)+1);
        return $result;
    }
    /**
     * 截取某个字符之前的字符串
     * @param $str1
     * @param $str2
     * @return bool|string
     */
    public function subStrForward($str1,$str2){
        $result = substr($str1,0,strripos($str1,$str2)+1);
        return $result;
    }
}