<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2018/8/15
 * Time: 下午10:49
 *
new file:   copy_file/b.txt
new file:   copy_file/form.php
new file:   copy_file/index.php
new file:   index.php

 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input,button,select{
            height: 35px;
            font-size: 15px;
        }
        input,textarea{
            width: 100%;
        }
    </style>
</head>
<body>
<form action="" method="post">
<!--    <input  type="text" id="copyFromClass" value="D:\app\apache-tomcat-7.0.72\webapps\wz\WEB-INF\classes\">-->
<!--    <hr>-->
<!--    <input  type="text" id="copyFromJsp" value="D:\app\apache-tomcat-7.0.72\webapps\wz\">-->
<!--    <hr>-->
    <input  type="text" id="copyFromClass" value="D:\app\apache-tomcat\webapps\pmis\WEB-INF\classes\">
    <hr>
    <input  type="text" id="copyFromJsp" value="D:\app\apache-tomcat\webapps\pmis\">
    <hr>

    <textarea id="filePath"  cols="30" rows="10"> </textarea>
    <hr>
    <input type="button" id="btnSubmit" value="提交">
</form>
<div id="jsonData"></div>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
