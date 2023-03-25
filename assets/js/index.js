$(window).scroll(function() {
    $('.fade-in').each(function() {
      var imagePosition = $(this).offset().top;
      var imageHeight = $(this).height();
      var windowHeight = $(window).height();
      var windowScroll = $(window).scrollTop();
      if (windowScroll > (imagePosition + imageHeight - windowHeight)) {
        $(this).addClass('fade-in-visible');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const slideInElements = document.querySelectorAll('.slide-in-bottom');
    const windowHeight = window.innerHeight;
    
    function checkSlide() {
      slideInElements.forEach(function(element) {
        const slideInAt = (window.scrollY + windowHeight) - (element.offsetHeight / 2);
        const elementBottom = element.offsetTop + element.offsetHeight;
        const isHalfShown = slideInAt > element.offsetTop;
        const isNotScrolledPast = window.scrollY < elementBottom;
        if (isHalfShown && isNotScrolledPast) {
          element.classList.add('visible');
        } else {
          element.classList.remove('visible');
        }
      });
    }
    
    window.addEventListener('scroll', debounce(checkSlide));
    
    // Optional: add debounce to improve performance
    function debounce(func, wait = 20, immediate = true) {
      let timeout;
      return function() {
        const context = this, args = arguments;
        const later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    }
  });

  const slideIns = document.querySelectorAll('.slide-in');

function debounce(func, wait = 10, immediate = true) {
  let timeout;
  return function() {
    const context = this, args = arguments;
    const later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

function checkSlide() {
  slideIns.forEach(slideIn => {
    const slideInTop = slideIn.getBoundingClientRect().top;
    const slideInBottom = slideInTop + slideIn.offsetHeight;
    const isHalfShown = slideInTop + (slideIn.offsetHeight / 2) < window.innerHeight;
    const isNotScrolledPast = window.scrollY < slideInBottom;
    if (isHalfShown && isNotScrolledPast) {
      slideIn.classList.add('active');
    } else {
      slideIn.classList.remove('active');
    }
  });
}

window.addEventListener('scroll', debounce(checkSlide));




  