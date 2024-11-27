<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//$host = "192.168.1.253";
$host = "localhost";
$user = "sik";
$pass = "00";
$database = "yatofatest";

$conn = new mysqli($host, $user, $pass, $database);
$sql1 = "Select * From bangsal where status='1' and kd_bangsal in(select kd_bangsal from kamar) ORDER BY nm_bangsal";
$result1 = $conn->query($sql1);
//print_r($result1);
$outp = "";
while($rs = $result1->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $jmlbed = "select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$rs['kd_bangsal']."'";
  $jmlbed1 = $conn->query($jmlbed);
  $jmlbed2 = $jmlbed1->fetch_assoc();
  $jmlbedisi = "select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$rs['kd_bangsal']."' and status='ISI'";
  $jmlbedisi1 = $conn->query($jmlbedisi);
  $jmlbedisi2 = $jmlbedisi1->fetch_assoc();
  $jmlbedkosong = "select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$rs['kd_bangsal']."' and status='KOSONG'";
  $jmlbedkosong1 = $conn->query($jmlbedkosong);
  $jmlbedkosong2 = $jmlbedkosong1->fetch_assoc();
//  print_r($resisi1["count(kd_bangsal)"]);
  $outp .= '{"nm_bangsal":"'  . $rs["nm_bangsal"] . '",';
  $outp .= '"jmlbed":"'   . $jmlbed2["count(kd_bangsal)"]        . '",';
  $outp .= '"jmlbedisi":"'   . $jmlbedisi2["count(kd_bangsal)"]        . '",';
  $outp .= '"jmlbedkosong":"'. $jmlbedkosong2["count(kd_bangsal)"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
