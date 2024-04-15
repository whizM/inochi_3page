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
