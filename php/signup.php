<?php
$page_title='reg!';
/*
$warn_text='your name is '.$_POST['username'].' and <br>your email is '.$_POST['email'];
*/
include('../includes/header.html');
//shoudong
$n=trim($_POST['username']);
$pw1=trim($_POST['password1']);
$pw2=trim($_POST['password2']);
$em=trim($_POST['email']);
if(($pw1 == $pw2)&&($pw1!==null)){
  $pw=$pw1;
  require_once('../../mysql_connect.php');

  $query="INSERT INTO users(user_nm,user_pw,user_em) VALUES('$n',SHA('$pw'),'$em')";
  $result=@mysql_query($query);
  mail($em,'thanks for reg!', $pw,'From:syau');
  echo 'thanks!';
  include('../includes/footer.html');
  exit();
  mysql_close();
}
?>
