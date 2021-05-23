const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // nav.style.display = "flex";
        nav.classList.toggle('nav-active');
        if (document.body.style.overflow === "hidden") {
            document.body.style.overflow = "auto"
        }
        else {
            document.body.style.overflow = "hidden";
        }

        navLinks.forEach(link => {
            link.classList.toggle("fade");
        });
        // navLinks.forEach((link, index) => {
        //     if (link.style.animation) {
        //         link.style.animation = '';
        //     } 
        //     else {
        //         link.style.animation = 'navLinkFade 0.5s ease forwards 0.2s';
        //     }
        //     console.log(index);
        // });
        burger.classList.toggle('burger_toggle');
    });

}

navSlide();
// window.onclick = function(event) {
//     if (event.target == nav) {
//         navSlide();
//     }
// }