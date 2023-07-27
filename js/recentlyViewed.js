document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".sliders");
    const slides = document.querySelectorAll(".slido");
    const dotsContainer = document.querySelector(".dots");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    const slidesToShow = 7;
    const slidesToScroll = 1;
    const slideWidth = slider.offsetWidth / slidesToShow;
    let currentSlide = 0;

    function createCloneSlides() {
        const clonedSlides = [];

        for (let i = 0; i < slidesToShow; i++) {
            const clonedSlide = slides[i].cloneNode(true);
            slider.appendChild(clonedSlide);
            clonedSlides.push(clonedSlide);
        }

        return clonedSlides;
    }

    const clonedSlides = createCloneSlides();

    function showSlide(slideIndex) {
        const offset = slideWidth * slideIndex;
        slider.style.transform = `translateX(-${offset}px)`;
        currentSlide = slideIndex;

        const dots = Array.from(dotsContainer.children);
        dots.forEach((doti, index) => {
            doti.classList.toggle("active", index === slideIndex);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + slidesToScroll) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - slidesToScroll + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    function createDots() {
        for (let i = 0; i < slides.length - slidesToShow + 1; i++) {
            const doti = document.createElement("span");
            doti.classList.add("doti");
            doti.addEventListener("click", () => showSlide(i));
            dotsContainer.appendChild(doti);
        }
        showSlide(0);
    }

    prevBtn.addEventListener("click", prevSlide);
    nextBtn.addEventListener("click", nextSlide);
    createDots();
});

