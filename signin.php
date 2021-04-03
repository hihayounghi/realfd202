<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>회원가입 페이지</title>
        <link rel="stylesheet" href="css/signin.css">
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/autoScroll.js"></script>
        <script src="js/signin.js"></script>
        <script src="js/main.js"></script>
    </head>

    <body>
        <?php include "inc/top_bar.inc" ?>
        <!--2.컨텐츠영역-->
        <main id="cont" class="sec">

            <!--타이틀-->

            <!--입력양식박스-->
            <div id="signinBox">
            <h1 id="title">회원가입</h1>
                <form action="process/ins.php" method="post" id="mform">
                    <ul>
                        <li>
                            <label for="account">아이디</label>
                            <input type="text" id="account" name="account" maxlength="25" placeholder="아무렇게나 다 가능">
                            <span class="msg"></span>
                        </li>
                        <li>
                            <label for="password">비밀번호</label>
                            <input type="password" id="password" name="password" maxlength="20" placeholder="마음대로 정하세요">
                            <span class="msg"></span>
                        </li>
                        <li>
                            <label for="mpw2">비밀번호확인</label>
                            <input type="password" id="mpw2" name="mpw2" maxlength="20" placeholder="비밀번호를 확인해 주세요">
                            <span class="msg"></span>
                        </li>
                        <li>
                            <label for="user_name">이름</label>
                            <input type="text" id="user_name" name="user_name" maxlength="20" placeholder="이름을 입력해 주세요">
                            <span class="msg"></span>
                        </li>
                        <li>
                            <label for="sex1">성별</label>
                            <span class="gender">여성
                                <input type="radio" id="sex1" name="sex" value="F">
                            </span>
                            <span class="gender">남성
                                <input type="radio" id="sex2" name="sex" checked value="M">
                            </span>
                        </li>
                        <li>
                            <label for="email">이메일</label>
                            <input type="text" id="email" name="email" maxlength="50" placeholder="이메일을 입력해 주세요">
                            <span class="msg"></span>
                        </li>
                        <li>
                            <input type="submit" value="가입하기" id="btn_signin">
                        </li>
                    </ul>
                </form>
            </div>
        </main>

    </body>
</html>
