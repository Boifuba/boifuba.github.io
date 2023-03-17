  // Get the current page URL
  var currentUrl = window.location.href;

  // Find the navigation link that matches the current URL
  var navLinks = document.querySelectorAll('.nav__link');
  for (var i = 0; i < navLinks.length; i++) {
    var linkUrl = navLinks[i].getAttribute('href');
    if (linkUrl === currentUrl) {
      navLinks[i].classList.add('nav__link--active');
      break;
    }
  }
