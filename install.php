<?PHP
 /*Copy Right By Bear Cabbage
   Make for Aikuqi
   Cannot use at other ways
 */
$con = mysql_connect("$sqlip","$sqlusr","$sqlpasswd");
if (!$con)
  {
  die('无法连接至数据库: ' . mysql_error());
  }
 
