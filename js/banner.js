(function($){


// Function to set a cookie
  function setCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "expires="+ date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
  }

// Function to get a cookie
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
  }

// When close button is clicked
  document.querySelector('.header_banner #closeBtn').addEventListener('click', function() {
    document.querySelector('.header_banner').style.display = 'none';
    document.querySelector('main').classList.remove('banner-displayed');
    document.querySelector('header').classList.remove('banner-displayed');
  setCookie('bannerClosed', 'true', 7); // Set cookie for 7 days
});

// Check the cookie when the DOM is loaded
  document.addEventListener('DOMContentLoaded', function() {
    if(getCookie('bannerClosed') !== 'true') {
      document.querySelector('.header_banner').style.display = 'flex';
      document.querySelector('main').classList.add('banner-displayed');
      document.querySelector('header').classList.add('banner-displayed');
    }
  });



})(jQuery); // END jQuery