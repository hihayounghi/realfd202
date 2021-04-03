<?php 
###########################################
########### 투표 페이지 ###############
###########################################

// post방식 전달값 변수에 할당하기 ///

$movie_id = $_POST["movie_id"];
$user_id = $_POST["user_id"];

$sql = "SELECT * FROM `vote` WHERE `user_id` = $user_id";

# DB연결하기
include "db_connection.inc";

# 쿼리 날리기
# $conn->query(쿼리문)
$res = $conn->query($sql);

# 1. 레코드 유무 판별
# $res->num_rows 결과레코드 개수를 담은 속성
$cnt = $res->num_rows;

//echo " / 레코드개수: $cnt";

# 2.레코드 개수가 1인 경우 비밀번호 비교하기
if($cnt){
    // 중복
    echo "repeat";
} ////////// if문 //////////////////////
else{
    // 투표진행
    $sql = "INSERT INTO `vote` (`movie_id`, `user_id`) VALUES ($movie_id, $user_id)";
    $res = $conn->query($sql);
    if($res) {
        echo "ok";
    } else {
        echo "no";
    }
} ////////// else문 /////////////////////

?>