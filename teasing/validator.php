<?php
echo "hoge";
$var = 'bob@example.com'; //検証するメールアドレス
if (filter_var($var, FILTER_VALIDATE_EMAIL) === false) {
  echo('error!! the address is NOT valid');
}