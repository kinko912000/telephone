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
$password = $_POST['password'];
$dsn = 'mysql:dbname=teasing;host=localhost';
$db_user = 'yoyaku';
$db_password = 'yoyaku';

$password = md5(utf8_encode($password)); 
echo $password;

if($r)
    while( $row= mysql_fetch_assoc($r) )
        print_r($row);


try{
    $dbh = new PDO($dsn, $db_user, $db_password);
    $email = htmlentities($email, ENT_QUOTES);
    echo $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
         echo('無効なメールアドレスです。再度登録してください。');
         echo "<a href='./register.php'>登録画面に戻る</a>";

    }else{
        $timestamp = time();
        $sql = 'insert into users (email,password,create_time) values (?,?,?)';
        $stmt = $dbh->prepare($sql);
        $flag = $stmt->execute(array($email,$password,$timestamp));
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