<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인 페이지</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/autoScroll.js"></script>
    <script src="js/login.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <?php include "inc/top_bar.inc"?>

    <main id="cont" class="sec">
        <h1 id="title">로그인</h1>
        
        <div id="loginBox">
            <form action="process/loginTo.php" method="post" class="logForm">
                <div class="textInput">
                    <input id="login_account" type="text" title="아이디 입력" class="form-ele" name="account" placeholder="아이디">
                </div>
                <div class="textInput">
                    <input id="login_password" type="password" title="비밀번호 입력" class="form-ele" name="password" placeholder="비밀번호">
                </div>
                <div class="btnBox">
                    <input type="submit" id="btn_login" value="로그인">
                </div>

                <div class="addBox">
                    <span>
                        <input type="checkbox" id="chkbox" name="chkbox">
                        <label for="chkbox">아이디저장</label>
                    </span>
                    <a href="">아이디찾기</a> |
                    <a href="">비밀번호찾기</a> |
                    <a href="signin.php">회원가입</a>
                </div>
            </form>
        </div>

    </main>

</body></html>
