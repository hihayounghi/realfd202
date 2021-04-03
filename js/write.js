$(function () { /// jQB //////////////////

    $("#btn_write").click(function (e) { //e-이벤트전달값

        // 서브밋 기본이동 막기!
        e.preventDefault();

        // 아이디요소
        let content = $("#write_box").val();
        let user_id = sessionStorage.getItem("user_id");

        if (!content || !user_id) {
            alert("방명록을 작성할 수 없습니다.");
        } 
        else {

            $.post(
                // 1. 전송할 페이지
                "process/write.php",
                // 2. 전송데이터
                {
                    "content": content,
                    "user_id": user_id 
                },
                // 3. 콜백함수: 처리페이지에서 돌려준값 받기
                function(res){ // res - 결과값전달변수

                    // 넘어온 결과값 앞뒤공백제거(혹시)
                    res = res.trim();
                    
                    if(res==="ok"){
                        // $("#board_box").load(window.location.href + '#board_box');
                         history.go(0);
                        // location.replace("index.php");
                        // let pgpos = winH * 2;
                        // $("html,body").stop().animate({
                        //     scrollTop: pgpos + "px"
                        // }, 1200, "easeInOutQuint");

                        alert("방명록을 작성해주셔서 감사합니다^^");
                        
                    } 
                    else if(res==="no"){
                        alert("죄송죄송 서버가 이상한가봐요. 한번 더 시도해주세요~");
                    }
                    
                    
                } //// 콜백함수 //////
                
            ); 
            

        }

    });

}); ////////// jQB //////////////////////