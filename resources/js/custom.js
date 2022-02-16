// mobile nav
function openNav() {
  document.getElementById("mySidepanel").style.width = "325px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
// scrool to div
$("#services").click(function() {
  $('html, body').animate({
      scrollTop: $("#servicesdiv").offset().top
  }, 2000);
});
$("#about").click(function() {
  $('html, body').animate({
      scrollTop: $("#aboutdiv").offset().top
  }, 2000);
});
$("#contact").click(function() {
  $('html, body').animate({
      scrollTop: $("#contactdiv").offset().top
  }, 2000);
});

$("#services-mob").click(function() {
  $("#mySidepanel").css("width", '0');
  $('html, body').animate({
      scrollTop: $("#servicesdiv").offset().top
  }, 2000);
});
$("#about-mob").click(function() {
  $("#mySidepanel").css("width", '0');
  $('html, body').animate({
      scrollTop: $("#aboutdiv").offset().top
  }, 2000);
});
$("#contact-mob").click(function() {
  $("#mySidepanel").css("width", '0');
  $('html, body').animate({
      scrollTop: $("#contactdiv").offset().top
  }, 2000);
});
// Back to top
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
}
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

// hide error message
function myFunction(clicked_id) {
  $("#"+clicked_id+"").hide();
}