<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_conn (){
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');//newする事で使える. 外部サーバーへアップロードする場合は、Localhostのところを変更
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());//上記エラーの場合、動作ここでストップ。次へ行かない。
      }      
}

function sqlerror ($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorSQL:".$error[2]);
  }

function redirect($page){
    header("Location: ".$page);//locationの後のスペースはマスト
    exit;
  }