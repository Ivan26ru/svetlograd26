jQuery(document).ready(function($) {
    $(function() {
        $('.vip_carousel').slick({
            infinite: true,
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            focusOnSelect: true,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-angle-left carousel-control-prev2" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-angle-right carousel-control-next2" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            focusOnSelect: true,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            variableWidth: true,
            prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        });

        $('.premium_slider').slick({
            infinite: true,
            dots: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            focusOnSelect: true,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-angle-left carousel-control-prev2" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-angle-right carousel-control-next2" aria-hidden="true"></i></button>',
            responsive: [{
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.vip_flats').slick({
            infinite: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            focusOnSelect: true,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-angle-left carousel-control-prev2" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-angle-right carousel-control-next2" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
        $('#language_select a').click(function() {
            var selectedLanguage = $(this).text();
            $('#selected_language').html(selectedLanguage);
        });
        $('#town_select a').click(function() {
            var selectedTown = $(this).text();
            $('#town').html(selectedTown);
        });

        $("#categories_container").click(function() {
            $("#categories_container").addClass('active');
        });
        $("#categories_select a").click(function() {
            $("#subcategories_container").addClass('subcategories_active');
            var categoryText = $(this).text();
            $("#selected_category").html(categoryText);
        });
        $("#subcategories_select a").click(function() {
            var subcategoryText = $(this).text();
            $("#selected_subcategory").html(subcategoryText);
        });
        // $("#category2").click(function() {
        //   $("#subcategories_container").addClass('subcategories_active');
        //   var category2text =  $("#category2").text();
        //   $("#subcategories_container").html(category2text);
        // });
    });

}); //конец ready