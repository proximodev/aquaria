document.addEventListener('DOMContentLoaded', function () {

  // Initialize Gasp.js
	gasp.init();

  // Add event listener to all links with data-gasp attribute
	var links = document.querySelectorAll('a[data-gasp]');
	links.forEach(function (link) {
		link.addEventListener('click', function (event) {
			event.preventDefault();
			var href = this.getAttribute('href');
			var container = document.querySelector('.gasp');
			container.classList.add('gasp-out');
			setTimeout(function () {
				gasp.go(href);
			}, 300);
		});
	});


  // Add event listener to Gasp.js for the transition end
	gasp.on('transitionEnd', function () {
		var container = document.querySelector('.gasp');
		container.classList.remove('gasp-out');
		container.classList.add('gasp-in');
		setTimeout(function () {
			container.classList.remove('gasp-in');
		}, 300);
	});




	
});
