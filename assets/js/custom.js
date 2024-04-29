$("#hamburg-btn").click(function() {
    $(this).toggleClass("is-active");
    $(".c-overlay").toggleClass("h-active");
})

$(".__sp-item").click(function() {
    $(".c-header__sp").toggleClass("h-active");
    $("#hamburg-btn").toggleClass("is-active");
})

$(".fv_taparea").click(function() {
    $(".tapped_colorballs").toggle();
})


ScrollReveal().reveal('.fade_left', { 
    duration: 1600, 
    origin: 'left', 
    distance: '50px',
    // reset: true   
  });

ScrollReveal().reveal('.fade_right', { 
    duration: 1600, 
    origin: 'right', 
    distance: '50px',
    // reset: true   
  });

  ScrollReveal().reveal('.fade_bottom_ttl', { 
    duration: 1500, 
    origin: 'bottom', 
    distance: '50px',
    // reset: true   
  });

ScrollReveal().reveal('.fade_bottom_content', { 
    duration: 2500, 
    origin: 'bottom', 
    distance: '50px',
    // reset: true   
});
