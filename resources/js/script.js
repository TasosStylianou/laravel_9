document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll('nav ul li a');

    menuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});
