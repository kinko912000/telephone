<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>ティザーページ</title>
</head>
<body>



<?php
$to = 'kinko912000@yahoo.co.jp';
$subject = 'test mail';
$message = "This is Test mail¥nMulti Line";
$message = wordwrap($message, 70, "¥n");
$headers = 'From: kinko912000@yahoo.co.jp'."¥r¥n".
           'To: kinko912000@yahoo.co.jp'."¥r¥n".
           'X-Mailer: PHP/Mail';

if (mail($to, $subject, $message, $headers)){
  print('成功');
}else{
  print('エラー');
}
?>


<a href="./index.php">topへもどる</a>


</body>
</html>