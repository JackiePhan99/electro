let slideIndex = 0;
let slides = document.getElementsByClassName("slid");
let dotsContainer = document.getElementById("sliderDots");

function showSlide() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dotsContainer.children.length; i++) {
        dotsContainer.children[i].classList.remove("actives");
    }

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    slides[slideIndex].style.display = "block";
    dotsContainer.children[slideIndex].classList.add("actives");
}

function goToSlide(index) {
    slideIndex = index;
    showSlide();
}

for (let i = 0; i < slides.length; i++) {
    let dot = document.createElement("span");
    dot.classList.add("dot");
    dot.setAttribute("onclick", "goToSlide(" + i + ")");
    dotsContainer.appendChild(dot);
}

showSlide();



