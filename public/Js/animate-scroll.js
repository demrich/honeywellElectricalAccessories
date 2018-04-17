function debounce(func, wait = 20, immediate = true) {
  let timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

const revealTexts = document.querySelectorAll('.reveal');

function checkSlide(e) {
  revealTexts.forEach(revealText => {
    const revealTop = revealText.offsetTop;

    if(window.scrollY > (revealTop - 150)){
      revealText.classList.add('show');
      revealText.classList.add('animated');
      revealText.classList.add('fadeIn');
    }
  });
}

window.addEventListener('scroll', debounce(checkSlide, 5));
