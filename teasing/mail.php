<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>ティザーページ</title>
</head>
<body>

<?php

if (mb_send_mail("kinko912000@gmail.com", "テストメール", "これはテストです。", "From:kinko912000@yahoo.co.jp")) {
  echo "メールが送信されました。";
} else {
  echo "メールの送信に失敗しました。";
}

?>

<a href="./index.php">topへもどる</a>


</body>
</html>