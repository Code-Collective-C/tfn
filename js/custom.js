// $(function() {
//   var $el,
//     leftPos,
//     newWidth,
//     $mainNav = $(".navbar-nav");
//
//   $mainNav.append("<li id='magic-line'></li>");
//   var $magicLine = $("#magic-line");
//
//   $magicLine
//     .width($(".active").width())
//     .css("left", $(".active a").position().left)
//     .data("origLeft", $magicLine.position().left)
//     .data("origWidth", $magicLine.width());
//
//   $(".navbar-nav li a").hover(
//     function() {
//       $el = $(this);
//       leftPos = $el.position().left;
//       newWidth = $el.parent().width();
//       $magicLine.stop().animate({
//         left: leftPos,
//         width: newWidth
//       });
//     },
//     function() {
//       $magicLine.stop().animate({
//         left: $magicLine.data("origLeft"),
//         width: $magicLine.data("origWidth")
//       });
//     }
//   );
// })

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
let navbar = document.getElementById("navbar");
let navbarContainer = document.getElementById("navbar-container");

// Get the offset position of the navbar
// let sticky = navbarContainer.offsetScrollActivate;
let sticky = 475;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        navbarContainer.classList.remove("scrolled-top");
        navbar.classList.remove("navbar-not-scrolled")
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("sticky");
        navbarContainer.classList.add("scrolled-top");
        navbar.classList.add("navbar-not-scrolled")
        navbar.classList.remove("navbar-scrolled");
    }
}