//Scripts Generales

//Wow init
wow = new WOW(
    {
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       50,
        mobile:       false,
        live:         false
    }
);
wow.init();

//Header Scroll Animation

function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 20,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();


$(document).ready(function() {

$(".carousel").swiperight(function() {
    $(this).carousel('prev');
});
$(".carousel").swipeleft(function() {
    $(this).carousel('next');
});

}); /* END document ready */
