const carousel = document.getElementById('carousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const cards = document.querySelectorAll('.card');
const cardWidth = cards[0].offsetWidth;

let currentIndex = 0;

function showCard(index) {
    carousel.style.transform = `translateX(-${index * cardWidth}px)`;
}

function nextCard() {
    currentIndex++;
    if (currentIndex > cards.length - 1) {
        currentIndex = 0;
    }
    showCard(currentIndex);
}

function prevCard() {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = cards.length - 1;
    }
    showCard(currentIndex);
}

prevBtn.addEventListener('click', prevCard);
nextBtn.addEventListener('click', nextCard);
