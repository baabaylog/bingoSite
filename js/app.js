

// preloader 
window.addEventListener("load", function () {
    let preloader = document.querySelector('#preloader');
    preloader.style.display = 'none';
});



// NAVBAR PAGE Y OFFSET 
let navbar = document.querySelector('.navbar');

window.addEventListener("scroll", function () {
    const scrollHeight = window.pageYOffset;
    const navHeight = navbar.getBoundingClientRect().height;
    if (scrollHeight > navHeight) {
        navbar.style.backgroundColor = "white";
        navbar.classList.add('scrol-nav');


    } else {
        navbar.style.backgroundColor = "transparent";
        navbar.classList.remove('scrol-nav');
    }
})



// COUNTER SECTION 

const counterSec = document.querySelector(".animation-scroll");

const counterObserver = new IntersectionObserver((entries, observer) => {
    const [entry] = entries;

    if (entry.isIntersecting) {

        // counter section animation work
        let counters = document.querySelectorAll(".counter");
        const speed = 55;

        counters.forEach(function (counter) {
            const updateCount = () => {
                const target = parseInt(counter.getAttribute('data-target'));
                const count = parseInt(counter.innerText);
                const inc = target / speed;
                if (count < target) {
                    counter.innerText = Math.trunc(count + inc);
                    setTimeout(updateCount, 10);
                } else {
                    count.innerText = target;
                }
            }

            updateCount()
        })

    } else {
        return;
    }

}, {
    root: null,
    threshold: 0,
});

counterObserver.observe(counterSec);



// portfolio

// Images popUp



