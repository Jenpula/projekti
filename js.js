window.onscroll = function() {
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopBtn.style.display = "block";
        backToTopBtn.classList.add('show');
} else {
    backToTopBtn.classList.remove('show');
    backToTopBtn.style.display = "none";
}
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behaviour: "smooth"
    });
}