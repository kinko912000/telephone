<?php

$var = 'bob@example.com'; //検証するメールアドレス
if (filter_var($var, FILTER_VALIDATE_EMAIL) === false) {
  echo('error!! the address is NOT valid');
}

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_NOQUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
