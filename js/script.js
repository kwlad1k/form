$(document).ready(function(){
  $('.img-slider').slick({
  	arrows: true,
	  dots: false,
	  easing: 'ease',
	  autoplay: true,
	  autoplaySpeed: 5000,
	  draggable:true,
	  waitForAnimate: true,
	  prevArrow: '<button class="prev-img arrow-slider"></button>',
   nextArrow: '<button class="next-img arrow-slider"></button>',
  });
  $('.rooms-slider').slick({
    arrows: true,
    dots: false,
    easing: 'ease',
    draggable:true,
    waitForAnimate: true,
    prevArrow: '<button class="prev-img arrow-slider"></button>',
   nextArrow: '<button class="next-img arrow-slider"></button>',
  });
});

$(document).ready(function(){
  jQuery(window).scroll(function(){
        var $sections = $('section');
  $sections.each(function(i,el){
        var top  = $(el).offset().top-100;
        var bottom = top +$(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
      if( scroll > top && scroll < bottom){
            $('a.active').removeClass('active');
      $('a[href="#'+id+'"]').addClass('active');
        }
    })
 });

$("ul").on("click","a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();
        // получем идентификатор блока из атрибута href
        var id  = $(this).attr('href'),
        // находим высоту, на которой расположен блок
            top = $(id).offset().top;
        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });
});

function slowScroll (id) {
  var offset = 0;
  $('html, body').animate({
    scrollTop: $(id).offset ().top - offset
  }, 800);
  return false;
}

$(document).ready(function() {
    $("#phone").mask("+7 (999) 99-99-999");
  });

$(document).ready(function(){
  $('.reviews-slider').slick({
    arrows: true,
    adaptiveHeight: true,
    prevArrow: '<button class="prev arrow-slider"></button>',
    nextArrow: '<button class="next arrow-slider"></button>',
  });
  $('.features-slider').slick({
  arrows: true,
	 infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 5000,
  prevArrow: '<button class="prev arrow-slider"></button>',
  nextArrow: '<button class="next arrow-slider"></button>',
    responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});

$(document).ready(function() {

  //E-mail Ajax Send
  $("form").submit(function() { //Change
    var th = $(this);
    $.ajax({
      type: "POST",
      url: "mail.php", //Change
      data: th.serialize()
    }).done(function() {
      alert("Спасибо за заказ! В ближайшее время с вами свяжется администратор!");
      setTimeout(function() {
        // Done Functions
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });

});