<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>ティザーページ</title>
</head>
<body>



<?php

$email = $_POST['email'];
$dsn = 'mysql:dbname=teasing;host=localhost';
$user = 'yoyaku';
$password = 'yoyaku';

try{
    $dbh = new PDO($dsn, $user, $password);
    $email = htmlentities($email, ENT_QUOTES);
    echo $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
         echo('無効なメールアドレスです。再度登録してください。');
         echo "<a href='./register.php'>登録画面に戻る</a>";

    }else{
        $sql = 'insert into email_list (email) values (?)';
        $stmt = $dbh->prepare($sql);
        $flag = $stmt->execute(array($email));
        echo "登録ありがとうございました。";

        echo "<a href='./index.php'>topに戻る</a>";
    }
    
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>