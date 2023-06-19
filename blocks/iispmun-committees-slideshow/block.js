// Adapted From https://www.codingnepalweb.com/draggable-image-slider-html-css-javascript/

const carousel = document.querySelector(".iispmun-committees-cards-container");
const carouselObjects = carousel.querySelectorAll(".iispmun-committees-card-container")
const arrowIcons = document.querySelectorAll(".iispmun-committees-cards-wrapper i");

let isDragStart = false;
let isDragging = false;
let carouselIndex = 0;
let prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    getWindowSize();

    arrowIcons[0].style.opacity = carouselIndex === 0 ? "0" : "1";
    arrowIcons[1].style.opacity = carouselIndex === carouselObjects.length - getWindowSize() ? "0" : "1";
}

const getWindowSize = () => {
    let i;
    let parentWidth = parseInt(getComputedStyle(carousel).width);

    for (i = 0; i < carouselObjects.length; i++) {
        if (carouselObjects[i].offsetLeft > parentWidth)
            break;
    }
    return i;
}

const autoSlide = () => {
    if (carousel.scrollLeft < prevScrollLeft) {
        if (carouselIndex === 0)
            return;
        carouselIndex -= 1
    } else {
        if (carouselIndex === carouselObjects.length - getWindowSize())
            return;
        carouselIndex += 1
    }

    scrollTo(carouselObjects[carouselIndex]);
}

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if (!isDragStart)
        return;

    e.preventDefault();

    isDragging = true;
    carousel.classList.add("dragging");

    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
    isDragStart = false;

    carousel.classList.remove("dragging");
    if (!isDragging)
        return;
    isDragging = false;

    autoSlide();
}

const scrollTo = (el) => {
    const parentMargin = getComputedStyle(el.parentNode).marginLeft;

    el.parentNode.scrollLeft = el.offsetLeft - parseInt(parentMargin);
    showHideIcons();
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        if (icon.id === "left") {
            if (carouselIndex === 0)
                return;
            carouselIndex -= 1
        } else {
            if (carouselIndex === carouselObjects.length - getWindowSize())
                return;
            carouselIndex += 1
        }

        scrollTo(carouselObjects[carouselIndex]);
    });
});

window.addEventListener("load", (event) => {
    showHideIcons();
});

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
