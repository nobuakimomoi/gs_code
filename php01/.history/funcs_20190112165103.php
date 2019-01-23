<?php
function h($s){
    $h = htmlspecialchars($s,ENT_QUOTES);
    return $s;
}