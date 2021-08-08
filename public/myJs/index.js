var navbar = document.querySelector(".navbar").querySelectorAll(".nav-link");
console.log(navbar);

navbar.forEach(element =>{
    element.addEventListener('click',function(){
        navbar.forEach(nav=>nav.classList.remove('active'))
        this.classList.add('active');
    })
});

$(".owl-carousel").owlCarousel({
    autoplay: false,
    autoplayhoverpause: true,
    autoplaytimeout: 300,
    items: 2,
    nav: true,
    loop: true,
    lazyLoad: true,
    responsive: {
        0 : {
            items: 1,
            dots: false
        },
        485 : {
            items: 1,
            dots: false
        },
        725 : {
            items: 1,
            dots: false
        },
        960 : {
            items: 2,
            dots: true
        },
        1200 : {
            items: 2,
            dots: true
        }
    }
});