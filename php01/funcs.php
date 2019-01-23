<?php
function h($s){
    $h = htmlspecialchars($s,ENT_QUOTES);
    // echo $S; 関数内で実行の場合はreturnはいらない
    return $s;
}