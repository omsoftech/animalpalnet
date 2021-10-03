<?php
$a=$HTTP_POST_VARS['name'];
$b=$HTTP_POST_VARS['email'];
$c=$HTTP_POST_VARS['number'];
$d=$HTTP_POST_VARS['msg'];
mysql_connect("localhost","root",'');
mysql_select_db("sagar");
$result=mysql_query("insert into ravi values('$a','$b','$c','$d')");
{
header("location:Contct us.html");
}
?>