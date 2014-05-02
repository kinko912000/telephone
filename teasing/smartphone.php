
<?php
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (
    //判別条件start
        (strpos($ua, 'iPhone') !== false)//iphoneか、
         || ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false))//またはAndroidMobile端末、
         || (strpos($ua, 'Windows Phone') !== false)//またはWindowsPhone、
         || (strpos($ua, 'BlackBerry') !== false)//またはBlackBerryの場合
    //判別条件end
    ) 
    {
        //ココに実行する処理を書く。
        echo '<p>スマホぬーん</p>';
    }else{
        echo "<a href='./index.php'>topに戻る</a>";
    }
