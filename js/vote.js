$(function () { /// jQB //////////////////

    $("#btn_vote").click(function (e) { //e-이벤트전달값

        // 서브밋 기본이동 막기!
        e.preventDefault();

        // 아이디요소
        let movie_id = $(":radio[name=movieButton]:checked").val()

        if (!movie_id) {
            alert("인생영화를 골라주세요!");
        } else {
console.log("이거 찍어봐", sessionStorage.getItem("user_id"))
            $.post(
                // 1. 전송할 페이지
                "process/vote.php",
                // 2. 전송데이터
                {
                    "movie_id": movie_id,
                    "user_id": sessionStorage.getItem("user_id")
                },
                // 3. 콜백함수: 처리페이지에서 돌려준값 받기
                function(res){ // res - 결과값전달변수

                    // 넘어온 결과값 앞뒤공백제거(혹시)
                    res = res.trim();
                    console.log("여기 진입하나???", res)
                    if(res==="ok"){
                        
                        // 메시지
                        alert("투표 완료!! 소중한 한표 감사드립니다:)");
                    
                    } 
                    else if(res==="repeat"){
                        
                        // 메시지
                        alert("투표는 한번만~");
                        
                    }
                    else if(res==="no"){
                        alert("한번 더 시도해주세요~");
                    }
                    
                    
                } //// 콜백함수 //////
                
            ); 
            

        }

    });




}); ////////// jQB //////////////////////