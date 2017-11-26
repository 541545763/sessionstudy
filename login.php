<?php
header('Content-type: text/html;charset=utf-8');
$dblink=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
mysql_query("set names utf8");
mysql_select_db("test");
$username=$_POST['username'];
$password =$_POST['password'];
$check_query = mysql_query("select userid from user_info where username='$username' and password='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){    
    session_start();  
    $_SESSION['username'] = $username;  
    $_SESSION['userid'] = $result['userid'];  
    echo $username,'登录成功 ';   
	echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />'; 
    exit;  
} else {  
     exit(' 登录失败！请输入正确的账号和密码');
}
if($_GET['action'] == "logout"){  
    unset($_SESSION['userid']);  
    unset($_SESSION['username']);  
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';  
    exit;  
}  
?>