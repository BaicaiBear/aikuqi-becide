<?PHP
 /*Copy Right By Bear Cabbage
   Make for Aikuqi
   Cannot use at other ways
 */
 if($POST_['sumbit']==1){
  $con = mysql_connect($POST_['ip'],$POST_['user'],$POST_['passwd'];
  if(!$con){
   echo 'cannot connect'.mysql_error.'.';
   echo '<a herf="install.html">Back again</a>';
   die();
  }
  else{
   echo 'OK!';
   echo '<a herf="install2.html">Go on</a>';
   die();
  }
 }
?>
