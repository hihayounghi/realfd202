<!DOCTYPE html>
<html lang="lo">

<head>
    <meta charset="UTF-8">
    <title>KIMNEMA</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/autoScroll.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vote.js"></script>
    <script src="js/write.js"></script>
</head>

<body>

    <?php include "inc/login_session.inc" ?> 
    <?php include "inc/top_bar.inc"?>
    
    <section class="sec" id="s1">
        <div id="typed_box">
            <span id="typed" style="white-space:pre;"></span>
        </div>
    </section>
    <section class="sec" id="s2">
        <div id="titleBox">
            <h1 id="title">당신의 <span>인생영화</span>를 골라주세요!</h1>
            <p id="subtit">1위에 투표하신 분들 중 추첨을 통해 영화관람권과 굿즈를 보내드립니다.</p>
        </div>
        <ul id="movieList">
            <li>
                <a href="">
                    <img src="images/chungkingexpress.jpg" alt="중경삼림">
                </a>
                
                <span>
                <input type="radio" class="movieButton" name="movieButton" value="1" title="중경삼림">중경삼림</span>
            </li>
            <li>
                <a href="">
                    <img src="images/forrestgump.jpg" alt="포레스트 검프">
                </a>
                <span>
                <input type="radio" class="movieButton" name="movieButton" value="2" title="포레스트 검프">포레스트 검프</span>
            </li>
            <li>
                <a href="">
                    <img src="images/coco.jpg" alt="코코">
                </a>
                <span>
                <input type="radio" class="movieButton" name="movieButton" value="3" title="코코">코코</span>
            </li>
            <li>
                <a href="">
                    <img src="images/lifeisbeautiful.jpg" alt="인생은 아름다워">
                </a>
                <span>
                <input type="radio" class="movieButton" name="movieButton" value="4" title="인생은 아름다워">인생은 아름다워</span>
            </li>
            <li>
                <a href="">
                    <img src="images/carol.jpg" alt="캐롤">
                </a>
                <span>
                <input type="radio" class="movieButton" name="movieButton" value="5" title="캐롤">캐롤</span>
            </li>
        </ul>


        <button type="submit" id="btn_vote">확인</button>

    </section>
    
    <section class="sec" id="s3">
        <div id="board_box">
            <h2 id="board_title">방명록</h2>
            <div id="board_write_btn">
                <input id="write_box" type="text" placeholder="글을 남겨보세요!!!~~">
                <button id="btn_write">작성</button>
            </div>
            <div id="b_box">
                <?php

                include "process/db_connection.inc";

                $sql = "SELECT * FROM `board` ORDER BY `id` DESC LIMIT 0, 5";

                $res = $conn->query($sql);

                if($res->num_rows>0) {
                    while($row=$res->fetch_assoc()){
                    
                        # DB 컬럼 값 변수처리
                        $id = $row["id"]; 
                        $user_id = $row["user_id"];
                        $content = $row["content"];    
                        $created_at = $row["created_at"];
        
                        echo 
                        "<div>#$id | 아이디:$user_id | $created_at <br> $content</div><br>";
                        
                    
                    } /////// while /////////////////
                
                } else {
                    echo '
                        <div>
                            등록된 글이 없습니다.
                        </div>
                    ';
                }
        
                ?>
            </div>
        </div>
    </section>
</body></html>
