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


var parallaxElements = $('.scroll_anime');
var parallaxQuantity = parallaxElements.length;

$(window).on('scroll', function () {
    window.requestAnimationFrame(function () {
        for (var i = 0; i < parallaxQuantity; i++) {
            var currentElement = parallaxElements.eq(i);
            var scrolled = $(window).scrollTop();
            var speed = i * 0.01 + 0.05;
            currentElement.css({
                top: scrolled * 0.2 + 'px',
            });
        }
    });
});



const c = document.getElementById("edge_grad");
const ctx = c.getContext("2d");

// Create linear gradient
const grad=ctx.createLinearGradient(0,0,0,100);
grad.addColorStop(0.45, "rgba(255,255,255,1)");
grad.addColorStop(0.55, "rgba(255,255,255,1)");
grad.addColorStop(0.5, "rgba(255,255,255,1)");
grad.addColorStop(1, "rgba(255,255,255,0)"); 
grad.addColorStop(0, "rgba(255,255,255,0)"); 

// Fill rectangle with gradient
ctx.fillStyle = grad;
ctx.fillRect(0,0,1920,1000);