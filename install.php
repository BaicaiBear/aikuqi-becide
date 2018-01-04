<?PHP
 /*Copy Right By Bear Cabbage
   Make for Aikuqi
   Cannot use at other ways
 */
 if($POST_['sumbit']==1){
  $con = mysql_connect('localhost:3306,'root','root';
  if(!$con){
   echo 'cannot connect'.mysql_error.'.';
   echo '<a herf="install.html">Back again</a>';
   die();
  }
  else{
   $create_database = mysql_query('CREATE DATABASE aikuqidata');
   if(!$create_database){
	   $create_table = mysql_query('CREATE TABLE aikuqi_login');
   echo 'OK!';
   echo '<a herf="install2.html">Go on</a>';
   die();
  }
 }
?>
