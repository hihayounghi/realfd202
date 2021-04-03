
let pno = 0;
const totnum = 3;
let psts = 0;
let winH = $(window).height();


$(window).resize(function(){
    winH = $(window).height();
});

$(function () { 
    $(document).on("mousewheel DOMMouseScroll", function (e) {
        if (psts === 1) return true;
       
        psts = 1;
        setTimeout(function () {
            psts = 0;
        }, 1200);

        e = window.event || e;
        let delta = e.detail ? e.detail : e.wheelDelta;

   
        if (delta < 0) { 
            pno++;
            if (pno === totnum) pno = totnum - 1; 
        } 
        else { 
            pno--;
            if (pno < 0) pno = 0; 
        }
        let pgpos = winH * pno;
        
        $("html,body").stop().animate({
            scrollTop: pgpos + "px"
        }, 1200, "easeInOutQuint");
    }); 

    var typed2 = new Typed('#typed', {
		strings: ['Prod. KIMNEMA^500\n\nTitle: 나의 <span id="moviemovie">인생영화</span>^1000\nDirector: 나^1000\n\n<div>Date:<span id="time"> 4월 24일 - 4월 30일까지</span> 투표해주세요!</div>'],
		typeSpeed: 100,
		backSpeed: 0,
		loop: false
	});
}); 







