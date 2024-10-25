// Video button script
document.getElementById('playVideoButton').addEventListener('click', function() {
    var iframe = document.getElementById('aboutVideo');
    var src = iframe.src;
    iframe.src = src + "&autoplay=1";
});


// Scrolling effet
window.addEventListener("scroll", function() {
    var header = document.querySelector(".navigation"); // Use "." for class selector
    header.classList.toggle('sticky', window.scrollY > 0);
});

// Select the custom cursor
const cursor = document.querySelector('.custom-cursor');

//Content animation
AOS.init();
