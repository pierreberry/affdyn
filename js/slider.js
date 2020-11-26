$(function () {

    var interval = setInterval(moveSlide, 5000);

    function moveSlide(direction) {
        var current = $(".slider figure.active");
        direction = direction || "next";
        if (direction == "next") {
            var next = $(".slider figure.active").next();
            if (next.length == 0) {
                next = $(".slider figure:first-child");
            };
        } else {
            var next = $(".slider figure.active").prev();
            if (next.length == 0) {
                next = $(".slider figure:last-child");
            };
        };
        current.toggleClass("active");
        next.toggleClass("active");
    };
});