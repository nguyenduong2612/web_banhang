// $(document).ready(function(){
// $('.go-to-register').click(function () {
//        $('html, body').animate({scrollTop: $('.register_form').offset().top}, 1000); 
//     });
// }

<<<<<<< HEAD
$("a[href*='#']:not([href='#])").click(function() {
=======
$(".go-to-register").click(function() {
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
  let target = $(this).attr("href");
  $('html,body').stop().animate({
    scrollTop: $(target).offset().top
  }, 1000);
  event.preventDefault();
<<<<<<< HEAD
});
=======
}); 
>>>>>>> 8c491c954c299906a341f3371b733e0af863acb2
