<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];
$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);
if($nickname=='')
{
print 'ニックネームが入力されていません。<br>';
}
else
{
print 'ようこそ';
print $nickname;
print '様';
print '<br>';
}
?>
