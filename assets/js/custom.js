$("#hamburg-btn").click(function() {
    $(this).toggleClass("is-active");
    $(".p-header__sp").toggleClass("h-active");
})

$(".__sp-item").click(function() {
    $(".p-header__sp").toggleClass("h-active");
    $("#hamburg-btn").toggleClass("is-active");
})

$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 200) {
      $('.p-header__bar').fadeOut();
      $('#hamburg-btn').css('top' , '30px');
    } else{
      $('.p-header__bar').fadeIn();
      $('#hamburg-btn').css('top' , '63px');
    }
  });