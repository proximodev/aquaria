const cardContainer = document.querySelector('.testimonial-card-container');
const cards = document.querySelectorAll('.testimonial-card');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;

function updateSlider(index) {
    cardContainer.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
}

document.querySelector('.prev-btn').addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : cards.length - 1;
    updateSlider(currentIndex);
});

document.querySelector('.next-btn').addEventListener('click', () => {
    currentIndex = (currentIndex < cards.length - 1) ? currentIndex + 1 : 0;
    updateSlider(currentIndex);
});

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentIndex = index;
        updateSlider(currentIndex);
    });
});

// Initialize the slider
updateSlider(currentIndex);
