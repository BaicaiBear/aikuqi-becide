<?PHP
 /*Copy Right By Bear Cabbage
   Make for Aikuqi
   Cannot use at other ways
 */
echo ("<form action="welcome.php" method="post">
IP: <input type="text" name="name"><br>
User: <input type="text" name="email"><br>
Passwd:  <input
<input type="submit">
</form>")
$con = mysql_connect("$sqlip","$sqlusr","$sqlpasswd");
if (!$con)
  {
  die('无法连接至数据库: ' . mysql_error());
  }
 
