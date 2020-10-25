function animateAnchor(linkId, anchorId, V = 0.4) {

	let linkNav = document.getElementById(linkId);
	    //V = 0.4; - 1/скорость, может иметь дробное значение через точку
	
	  linkNav.addEventListener('submit', function(e) {
	    e.preventDefault();
	    var w = window.pageYOffset,  // прокрутка
	        hash = anchorId;  // id элемента, к которому нужно перейти
	        t = document.getElementById(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
	        start = null;
	    requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
	    function step(time) {
	      if (start === null) start = time;
	      let progress = time - start,
	          r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
	      window.scrollTo(0,r);
	      if (r != w + t) {
	        requestAnimationFrame(step)
	      } else {
	        location.hash = hash  // URL с хэшем
	      }
	    }
	  }, false);
	
}

animateAnchor('collect-your-box-link', 'collect-your-box-anchor');
animateAnchor('your-perfect-donut-link', 'your-perfect-donut-anchor', 0.4);