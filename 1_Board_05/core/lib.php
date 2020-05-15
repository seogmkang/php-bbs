<?php
// waring message
function alert($str) {
  echo "<script>alert('{$str}')</script>";
}

// page movement
function move ($str = false) {
  echo "<script>";
  echo $str ? "location.replace('{$str}')" : "history.back()";
  echo "</script>";
  exit;
}

// condition + alert + page movement
function access ($bool, $msg, $url = false) {
  if (!$bool) {
    alert($msg);
    move($url);
  }
}

// one line print
function println ($ele) {
  echo "<p>{$ele}</p>";
}

function print_pre ($ele) {
  echo "<pre>";
  print_r($ele);
  echo "</pre>";
}

// query sentence
function query ($sql) {
  $db = new PDO("mysql:hostname=localhost;dbname=20190428;charset=utf8","root","");
  $res = $db->query($sql);
  // error detection
  if ($res) {
    $db = null;
    return $res;
  } else {
    println($sql);
    print_pre($db->errorInfo());
    exit;
  }
}

// single data 
function fetch ($sql) {
  return query($sql)->fetch(PDO::FETCH_OBJ);
}

function fetchAll ($sql) {
  return query($sql)->fetchAll(PDO::FETCH_OBJ);
}

// number of data rows
function rowCount ($sql) {
  return query($sql)->rowCount();
}

?>