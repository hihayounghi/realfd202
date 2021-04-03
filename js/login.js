
$(function () { 

    $("#btn_login").click(function (e) { 
    // console.log("로그인버튼이눌리냐")
        e.preventDefault();

        // console.log("로그인!!!");

        let account = $("#login_account");
        let password = $("#login_password");

        if (account.val().trim() === "" ||
            password.val().trim() === "") {

            alert("아이디와 비밀번호를 모두 입력해주세요.");

        }
        else {
            //alert("통과!");
            
            // AJAX로 로그인처리페이지 전송하기
            // POST방식 처리
            // $.post(전송할페이지,전송데이터,콜백함수)
            $.post(
                "process/loginTo.php",
                {
                    "account": account.val().trim(),//아이디
                    "password": password.val().trim() //비번
                },
                function(res){ // res - 결과값전달변수
                    console.log("여기에 왜 안들어오세요???")
                    res = res.trim();

                    if(res.slice(0,2)==="ok"){
                        const user_id = res.slice(2)
                        console.log("DLDLDLD", user_id)
                        sessionStorage.setItem("user_id", user_id );
                        location.href = "index.php";
                    }
                    
                    else if(res==="no"){
                        
                        // 메시지
                        alert("사용가능한 아이디가 아닙니다!");
                        
                        // 아이디,비번 지우고 아이디에 포커스
                        account.val("").focus();
                        password.val("");
                        
                    } ///// no ///////////
                    
                    // 3. 비밀번호 불일치
                    else if(res==="again"){
                        
                        // 메시지
                        alert("비밀번호가 일치하지 않습니다!");
                        
                        // 비번 지우고 비번에 포커스
                        password.val("").focus();
                        
                    } ///// again /////////
                    
                } //// 콜백함수 //////
                
            ); //////// Ajax : post ///////////
            ///////////////////////////////////
            

        } ///////// else ////////////////////


    }); ///////// click //////////////




}); ////////// jQB //////////////////////