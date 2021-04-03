<?php

/// DB연결 문자열 ///
$servername = "localhost";//DB서버명
$username = "root";//DB최고관리자권한
$password = "";//root에는 비번이 없음
$dbname = "moviemovie";//사용DB명


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){ die("DB연결에 실패하였습니다! : ".
$conn->connect_error); } else{ } ?>
