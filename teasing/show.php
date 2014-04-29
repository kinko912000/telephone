<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>ティザーページ</title>
</head>
<body>

<a href="./index.php">topに戻る</a>

登録一覧です。<br>


<?php

$dsn = 'mysql:dbname=teasing;host=localhost';
$user = 'yoyaku';
$password = 'yoyaku';

try{
    $dbh = new PDO($dsn, $user, $password);

    $sql = 'select * from email_list';
    foreach ($dbh->query($sql) as $row) {
        print($row['email'].'<br />');
    }
    
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>