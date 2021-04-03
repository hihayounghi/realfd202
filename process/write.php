<?php 

// post방식 전달값 변수에 할당하기 ///

$content = $_POST["content"];
$user_id = $_POST["user_id"];

$sql = "INSERT INTO `board` (`user_id`, `content`) VALUES ($user_id, '$content')";

# DB연결하기
include "db_connection.inc";

# 쿼리 날리기
# $conn->query(쿼리문)
$res = $conn->query($sql);

if($res) {
    echo "ok";
} else {
    echo "error:".$conn->error;
}

?>