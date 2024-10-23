(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.slider = {
    attach: function (context) {
      document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll('.tab');
        const slides = document.querySelectorAll('.slide');
        const slider = document.querySelector('.slider');
        const paginationDots = document.querySelectorAll('.pagination-dot');
        const prevArrow = document.querySelector('.prev');
        const nextArrow = document.querySelector('.next');

        let currentIndex = 0;
        const slideCount = slides.length;
        const slideWidth = slides[0].offsetWidth + parseInt(getComputedStyle(slides[0]).marginRight);

        // infinite looping
        const firstSlide = slides[0].cloneNode(true);
        const lastSlide = slides[slides.length - 1].cloneNode(true);

        slider.appendChild(firstSlide);
        slider.insertBefore(lastSlide, slides[0]); 

        // Set active tab and slide
        function setActiveTab(index) {
          tabs.forEach(tab => tab.classList.remove('active'));
          tabs[index % slideCount].classList.add('active');
        }

        function setActiveSlide(index) {
          slider.style.transform = `translateX(-${(index + 1) * slideWidth}px)`;

          // Set active pagination dot
          paginationDots.forEach(dot => dot.classList.remove('active'));
          if (paginationDots[index % slideCount]) {
            paginationDots[index % slideCount].classList.add('active');
          }

          // Add active class
          slides.forEach(slide => slide.classList.remove('active'));
          slides[(index + 1) % slideCount].classList.add('active');
        }

        // Tab click handler
        tabs.forEach((tab, index) => {
          tab.addEventListener('click', function() {
            currentIndex = index;
            setActiveTab(currentIndex);
            setActiveSlide(currentIndex);
          });
        });

        // Pagination click handler
        paginationDots.forEach((dot, index) => {
          dot.addEventListener('click', function() {
            currentIndex = index;
            setActiveTab(currentIndex);
            setActiveSlide(currentIndex);
          });
        });

        // Slider Navigation
        prevArrow.addEventListener('click', function() {
          currentIndex = (currentIndex - 1 + slideCount) % slideCount;
          setActiveTab(currentIndex);
          setActiveSlide(currentIndex);
        });

        nextArrow.addEventListener('click', function() {
          currentIndex = (currentIndex + 1) % slideCount;
          setActiveTab(currentIndex);
          setActiveSlide(currentIndex);
        });

        // Initialize the slider
        setActiveTab(currentIndex);
        setActiveSlide(currentIndex);

        // slider responsive to window resize
        window.addEventListener('resize', function() {
          setActiveSlide(currentIndex);
        });

        // transition for slider
        slider.addEventListener('transitionend', function() {
          if (currentIndex === slideCount) {
            currentIndex = 0;
            slider.style.transition = 'none';
            setActiveSlide(currentIndex);
          }
          if (currentIndex === -1) {
            currentIndex = slideCount - 1;
            slider.style.transition = 'none';
            setActiveSlide(currentIndex);
          }
        });
      });
    },
  };
})(jQuery, Drupal);