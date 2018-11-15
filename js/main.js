var App = function () {
    return {
        vegas: function () {
            $(".slider").vegas({
                slides: [
                    {
                        src: "img/schneck-slide1.jpg"
                    },
                    {
                        src: "img/schneck-slide2.jpg"
                    },
                    {
                        src: "img/schneck-slide3.jpg"
                    },
			    ]
            });
        },
        vegas2: function () {

            $("#primary").vegas({
                slides: [
                    {
                        src: "img/schck-1.jpg"
                    },
                    ],
                timer: false,
            });
        },
        vegas3: function () {

            $(".productsContainer:nth-child(1)").vegas({
                slides: [
                    {
                        src: "img/schckprod-1.jpg"
                    },
                    ],
                timer: false,
            });
            $(".productsContainer:nth-child(2)").vegas({
                slides: [
                    {
                        src: "img/schckprod-2.jpg"
                    },
                    ],
                timer: false,
            });
            $(".productsContainer:nth-child(3)").vegas({
                slides: [
                    {
                        src: "img/schckprod-3.jpg"
                    },
                    ],
                timer: false,
            });
            $(".productsContainer:nth-child(4)").vegas({
                slides: [
                    {
                        src: "img/schckprod-4.jpg"
                    },
                    ],
                timer: false,
            });
        },
        dropdownRemoval: function () {
            if ($(window).width() > 767) {
                $('#navbar ul li.active ul.dropdown-menu').remove();
            } else {}
        },
        onResize: function () {
            $(window).resize(function () {
                App.verticalAlign();
                App.slick();
                App.openToggle();
            });
        },
        verticalAlign: function () {
            if ($(window).width() > 767) {
                $('.verticalAlign').css('height', '100%');
                var Height = $('.verticalAlign').height();
                $('.verticalAlign').css('line-height', Height + 'px');
            } else {
                $('.verticalAlign').removeAttr('style');
            }
        },
        slick: function () {    
            if (!$('.slideBlock').length) {
                return;
            }
            if ($(window).width() < 767) {
                if (!$('.slideBlock.slick-initialized').length) {
                    $('.slideBlock').slick({
                        arrows: false,
                        autoplay: false,
                        dots: true,
                        responsive: true,
                    });
                }
//                    
//                    $('.slideBlock').on('afterChange', function(event, slick, currentSlide, nextSlide){
//                      console.log(event);
//                      console.log(slick);
//                      console.log(currentSlide);
//                      console.log(nextSlide);
//                    });                    
            } else if ($('.slideBlock.slick-initialized').length) {
                $('.slideBlock').slick('unslick');
            }
        },
        openToggle: function () {
           if ($(window).width() > 767) {
                $('.productsContainer').hover(function() {
                    $(this).children('.vegas-wrapper').children('.productsContent').stop().slideDown();                    
                }, function(){
                    $(this).children('.vegas-wrapper').children('.productsContent').stop().slideUp();
                });
           } else{
              $('.productsContainer').unbind('mouseenter mouseleave');

           }
        },
        uriSegment: function (n) {
            segment = window.location.pathname.split('/');
            return segment[n];
        },
        menuMobile: function () {
            $(document).on('click', 'button.navbar-toggle', function() {
                setTimeout(function() {
                    var page = App.uriSegment(3);
                    $('a[href="'+page+'"]').parent().parent().parent().addClass('open');
                }, 30);
            });
        },
        FancyBox: function (){
                $('#prod .productsContainer:nth-child(1) .productsContent ul li a.fancybox, #prod .productsContainer:nth-child(2) .productsContent ul li a.fancybox, #prod .productsContainer:nth-child(3) .productsContent ul li a.fancybox, #prod .productsContainer:nth-child(4) .productsContent ul li a.fancybox').fancybox({
                    maxWidth	: '100%',
                    maxHeight	: 1300,
                    fitToView: false,
                    width: '100%',
                    height: '100%', 
                    padding: 0,
                    margin: 5,
                    autoDimensions: true,
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'elastic', 
                    closeEffect: 'elastic',
                    showNavArrows: true, 
                    mouseWheel : false,
                    changeFade: null,
                    nextEffect: null,
                    scrolling: 'auto',
                    prevEffect: null 
                });
        },
        Flexcroll: function() {
 
            fleXenv.initByClass("flexcroll");
        },
        documentLoad:function() {
            $(window).load(function(){
               App.openToggle();
                
            })
        },
        init: function () {
            App.documentLoad();
            App.vegas();
            App.vegas2();
            App.vegas3();
            App.onResize();
            App.verticalAlign();
            App.slick();
            App.FancyBox();
            App.menuMobile();
        }
    }
}();

jQuery(document).ready(function () {
    App.init();
});