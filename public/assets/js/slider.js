document.addEventListener('DOMContentLoaded', () => {
    const TRACK = document.getElementById('sliderTrack');
    const BUTTONS = document.querySelectorAll('#navButtons button');
    const SLIDER = document.getElementById('slider');
    const TOTAL_SLIDES = 4;     // 20 images / 5 per view
    const SLIDE_TIME = 3000;    // 3sn
    let currentIndex = 0;
    let interval = null;

    if (!SLIDER) return;

    function goToSlide(index) {
        TRACK.style.transform = `translateX(-${index * 100}%)`;
        BUTTONS.forEach(btn => btn.classList.remove('bg-orange-500'));
        BUTTONS[index].classList.add('bg-orange-500');
        currentIndex = index;
    }

    function startAutoSlide() {
        stopAutoSlide(); // If it already exists, clear it.
        interval = setInterval(() => {
        let nextIndex = (currentIndex + 1) % TOTAL_SLIDES;
            goToSlide(nextIndex);
        }, SLIDE_TIME);
    }

    function stopAutoSlide() {
        if (interval !== null) {
            clearInterval(interval);
            interval = null;
        }
    }

    BUTTONS.forEach(button => {
        button.addEventListener('click', () => {
            const index = parseInt(button.dataset.index);
            goToSlide(index);
            stopAutoSlide();
            startAutoSlide();
        });
    });

    SLIDER.addEventListener('mouseenter', stopAutoSlide);
    SLIDER.addEventListener('mouseleave', startAutoSlide);

    // Start
    goToSlide(0);
    startAutoSlide();
});
