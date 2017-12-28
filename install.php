<?PHP
 /*Copy Right By Bear Cabbage
   Make for Aikuqi
   Cannot use at other ways
 */
$con = mysql_connect($_POST["ip"],$_POST["user"],$_POST["passwd"]);
if (!$con)
  {
  die('Cannot connect: ' . mysql_error());
  }
else echo("<p>yes</p>");
 
