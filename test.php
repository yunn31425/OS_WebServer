<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$conn = mysqli_connect(
  'localhost:3306',
  'root',
  'lab1234!',
  'hello');
$sql = "SELECT patient.name
        FROM patient
        JOIN professor ON patient.professor_license_number = professor.license_number
        WHERE professor.license_number = '452314563'";
$result = mysqli_query($conn, $sql);

// while($re = mysqli_fetch_array($result)){
//   print($re[0]);
// }