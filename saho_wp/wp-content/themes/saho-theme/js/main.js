$('.slider').slick({
    autoplay: true,
    dots: false,
    arrows:false,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 5,
    slidesToScroll: 0,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          
        },
      },
    ],
});

$(function(){
  // ハンバーガーメニュー
  $('.menu-tirgger').click(function(){
    $(this).toggleClass('active');
    $('.modal').toggleClass('active');
  });
});