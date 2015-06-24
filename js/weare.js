var lis = $('li[id^="content-"]').hide(),
    i = 0;

(function cycle() { 

    lis.eq(i).fadeIn(400)
              .delay(800)
              .fadeOut(400, cycle);

    i = ++i % lis.length;

})();