<?php
echo"创建连接";
$servername="localhost";
$username="root";
$password="root";
$con=mysql_connect($servername,$username,$password);
if(!$con){
   die("连接失败".mysql_error());
}

mysql_select_db("test");
$sql="CREATE TABLE user_info
(
userid varchar(15),
username varchar(15),
password  varchar(15) 
)";
?>  

