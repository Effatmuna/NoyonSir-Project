<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "news_blog";
$conn = mysqli_connect($host,$user,$pass,$db);

function formatDate1($date){
    return date('Y-m-d',strtotime($date));
  }
  
  function formatDate2($date2){
    return date('g:i a',strtotime($date2));
  }
  
  function formatDate3($date3){
    return date('l',strtotime($date3));
  }

?>