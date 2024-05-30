let currentIndex = 0;
    
function moveSlide(direction) {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
    const offset = -currentIndex * 100;
    slides.style.transform = `translateX(${offset}%)`;
}

