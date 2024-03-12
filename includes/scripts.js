document.addEventListener('scroll', function () {
    let scrollTop = window.scrollY;
    let parallaxBackground = document.querySelector('.parallax-background');
    
    // Adjust the speed of parallax scrolling by changing the value (e.g., 0.5).
    parallaxBackground.style.transform = 'translateY(' + scrollTop * 0.1 + 'px)';
});