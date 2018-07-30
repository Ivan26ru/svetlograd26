$(function() {
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
        breakpoint: 993,
        settings: {
          dots: false
        }
    }
    ]
  });
  $('.vip_flats2').slick({
    infinite: true,
    dots: true,
    slidesToShow: 3,
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
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
    },
    {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
    }
    ]
  });

  $('.the_flat_slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.the_flat_slider-nav'
  });
  $('.the_flat_slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 1,
   asNavFor: '.the_flat_slider-for',
   dots: false,
   //centerMode: true,
   focusOnSelect: true,
   prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-angle-left carousel-control-prev2" aria-hidden="true"></i></button>',
   nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-angle-right carousel-control-next2" aria-hidden="true"></i></button>'
   // responsive: [{
   //     breakpoint: 576,
   //     settings: {
   //       slidesToShow: 3,
   //       slidesToScroll: 1,
   //       infinite: true,
   //       dots: false
   //     }
   // }
   // // {
   // //     breakpoint: 576,
   // //     settings: {
   // //       slidesToShow: 2,
   // //       slidesToScroll: 1,
   // //       infinite: true,
   // //       dots: false
   // //     }
   // // }
   // ]
  });

  $('#language_select a').click(function(){
    var selectedLanguage = $(this).text();
    $('#selected_language').html(selectedLanguage);
  });
  $('#town_select a').click(function(){
    var selectedTown = $(this).text();
    $('#town').html(selectedTown);
  });

  $("#categories_container").click(function() {
    $("#categories_container").addClass('active');
  });
  $("#categories_select a").click(function() {
    $("#subcategories_container").addClass('subcategories_active');
    var categoryText =  $(this).text();
    $("#selected_category").html(categoryText);
  });
  $("#subcategories_select a").click(function() {
    var subcategoryText =  $(this).text();
    $("#selected_subcategory").html(subcategoryText);
  });
  // $("#category2").click(function() {
  //   $("#subcategories_container").addClass('subcategories_active');
  //   var category2text =  $("#category2").text();
  //   $("#subcategories_container").html(category2text);
  // });
});
