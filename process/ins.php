<?php
########## 회원가입 입력처리 페이지 ############
# member.php 페이지에서 POST방식으로 넘어온 데이터 받기

// 1.아이디
$account = $_POST["account"];
// 2.비번
$password = $_POST["password"];
// 3.이름
$user_name = $_POST["user_name"];
// 4.성별
$sex = $_POST["sex"];
// 5.이메일
$email = $_POST["email"];

/// 비밀번호는 암호화 하여 입력해야한다!!!
// PHP의 암호와 방식 중 하나!
// password_hash(일반문자비밀번호, PASSWORD_DEFAULT)
// 같은 비번이라도 만들때 마다 다른문자로 생성된다!
// 따라서 일반적인 복호화는 불가능하다!

// 암호화된 비밀번호로 변환하여 다시 할당!
$password = password_hash($password, PASSWORD_DEFAULT);

// INSERT(새로운 데이터 생성) 쿼리문
$sql = "INSERT INTO `user`
(`account`, `password`, `user_name`, `sex`, `email`) 
VALUES 
('$account','$password','$user_name','$sex','$email')";

// echo $sql;

####### DB연결하기 !!! ######
include "db_connection.inc";
############################c

// 쿼리를 DB에 실행하여 결과를 가져온다!
// query() 메서드는 쿼리를 DB에 실행후 결과를 가져옴!
$insSts = $conn->query($sql);

// 결과가 나온경우 처리 ///////////
if($insSts){
    echo "ok";
} ///////// if문 ///////////////////////
else{ // 에러가 난 경우 처리 ///////
    echo "error:".$conn->error;
} ////////// else문 /////////////////////

// 보통 페이지가 종료되면 자동으로 연결을 끊어주지만
// 연결을 종료하는 메서드가 있기에 이를 호출해도 된다!
// close() 메서드
$conn->close();


?>