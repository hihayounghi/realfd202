$(function () { //////////////////////// JQB ///////////////////////////

    $("#logo").click(function () {
        $(location).attr('href', 'index.php')
    });

    $("#ham").click(function () {
        // console.log("클릭");
        $("#hammenu").fadeToggle(
            function () {
                $(this).addClass('show')
            },
            function () {
                $(this).addClass('hide')
            })
    }); 


    $("#hammenu a").click(function (e) {
        e.preventDefault();

        pno = $(this).parent().index();
        // console.log("클릭순번:" + pno);

        let pgpos = winH * pno;
        // console.log(pgpos);

        $("html,body").stop().animate({
            scrollTop: pgpos + "px"
        }, 1200, "easeInOutQuint");
    });

});