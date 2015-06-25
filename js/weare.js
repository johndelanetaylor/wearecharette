// Cycle Text
function cycleText() {
    var lis = $('.cycle ul li'),
        i = 0;
    lis.hide();
    (function cycle() {
        lis.eq(i).fadeIn(400);
        if(i < lis.length-1) {
            lis.eq(i).delay(800).fadeOut(400, cycle);
        }
        i++;
    })();
}

$(document).ready(function() {
    if(windowWidth >= 1000) {
        cycleText();
    }
});