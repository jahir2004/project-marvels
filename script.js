document.addEventListener('DOMContentLoaded', function () {
    const trailerButton = document.querySelector('.hero-section button');
    
    if (trailerButton) {
        trailerButton.addEventListener('click', function () {
            window.open('https://www.youtube.com/watch?v=6ZfuNTqbHE8', '_blank');
        });
    }
});
