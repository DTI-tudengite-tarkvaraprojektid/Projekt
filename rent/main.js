/* First Slider */
$('.slider-one')
.not(".slick-initialized")
.slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    prevArrow: ".site-slider .slider-btn .prev",
    nextArrow: ".site-slider .slider-btn .next"
});

/* Second Slider */
$('.slider-two')
.not(".slick-initialized")
.slick({
    prevArrow: ".site-slider-two .prev",
    nextArrow: ".site-slider-two .next",
    slidesToShow: 3,
    slidesToScroll: 1,
});

/*var number = Math.floor((Math.random() * 5) + 0);

$(".site-slider:nth-of-type(n+1)").css("transform", "rotate(" + number + "deg)");*/
