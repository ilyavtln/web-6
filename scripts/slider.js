document.addEventListener("DOMContentLoaded", function() {
    const sliderTrack = document.querySelector('.slider-track');
    const sliderItems = document.querySelectorAll('.slider-item');
    const totalSlides = sliderItems.length;
    const sliderBtnPrev = document.querySelector('.slider-btn-prev');
    const sliderBtnNext = document.querySelector('.slider-btn-next');
    const sliderIndicators = document.querySelectorAll('.slider-indicator');

    // Если ширина больше или равна 768 - показываем по 2 слайда
    const width = window.innerWidth;
    const slidesToShow = width >= 768 ? 2 : 1;

    let currentIndex = 0;
    let startX = 0;
    let isDragging = false;

    function handleStart(event) {
        if (event.type === 'touchstart') {
            startX = event.touches[0].clientX;
        } else {
            startX = event.clientX;
        }
        isDragging = true;
    }

    function handleMove(event) {
        if (!isDragging) return;
        event.preventDefault();
        const x = (event.type === 'touchmove') ? event.touches[0].clientX : event.clientX;
        const distance = x - startX;
        const translateValue = -(currentIndex * (100 / slidesToShow)) + (distance / sliderTrack.offsetWidth) * 100;
        sliderTrack.style.transform = `translateX(${translateValue}%)`;
    }

    function handleEnd(event) {
        if (!isDragging) return;
        const x = (event.type === 'touchend') ? event.changedTouches[0].clientX : event.clientX;
        const distance = x - startX;
        const threshold = sliderTrack.offsetWidth / 4;
        if (distance > threshold && currentIndex > 0) {
            currentIndex -= 1;
        }
        else if (distance < -threshold && currentIndex < totalSlides - slidesToShow) {
            currentIndex += 1;
        }
        goToSlide(currentIndex);
        resetDrag();
    }

    function resetDrag() {
        isDragging = false;
    }

    function goToSlide(index) {
        currentIndex = index;
        const translateValue = -(index * (100 / slidesToShow)) + '%';
        sliderTrack.style.transform = 'translateX(' + translateValue + ')';
        setActiveIndicators(index);
        toggleHideButtons();
    }

    function setActiveIndicators(index) {
        sliderIndicators.forEach((indicator, i) => {
            indicator.classList.toggle('slider-indicator-active', i >= index && i < index + slidesToShow);
        });
    }

    function toggleHideButtons() {
        sliderBtnPrev.classList.toggle('slider-btn-hide', currentIndex === 0);
        sliderBtnNext.classList.toggle('slider-btn-hide', currentIndex >= totalSlides - slidesToShow);
    }

    sliderBtnPrev.addEventListener('click', function() {
        if (currentIndex > 0) {
            goToSlide(currentIndex - 1);
        }
    });

    sliderBtnNext.addEventListener('click', function() {
        if (currentIndex < totalSlides - slidesToShow) {
            goToSlide(currentIndex + 1);
        }
    });

    sliderIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            if (index === totalSlides - 1 && width >= 768) {
                index -= 1
            }
            goToSlide(index)
        });
    });

    sliderTrack.addEventListener('mousedown', handleStart);
    sliderTrack.addEventListener('touchstart', handleStart);
    window.addEventListener('mousemove', handleMove);
    window.addEventListener('touchmove', handleMove);
    window.addEventListener('mouseup', handleEnd);
    window.addEventListener('touchend', handleEnd);

    // Переходим на первый слайда и активируем его
    goToSlide(currentIndex);
});
