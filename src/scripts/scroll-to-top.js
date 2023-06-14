$(document).ready(function() {
    let prevScrollPos = $(window).scrollTop();
    let headerHideMargin = 120;
    $(window).on("scroll", function() {
        let currentScrollPos = $(window).scrollTop();
        if (currentScrollPos - prevScrollPos < -headerHideMargin) {
            $(".default-header").css("top", "0");
            prevScrollPos = currentScrollPos;
        } else if (currentScrollPos - prevScrollPos > headerHideMargin) {
            $(".default-header").css("top", "-114px");
            prevScrollPos = currentScrollPos;
        }
    });
});