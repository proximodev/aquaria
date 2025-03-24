// Add class to header on scroll
// Used for quote page only
if (document.body.classList.contains('page-template-template-quote')) {
	window.addEventListener('scroll', function() {
		const scrollPosition = window.scrollY;
		const siteWidth = window.innerWidth;
		const targetElement = document.querySelector('.site-header');

		if (scrollPosition >= 100 && siteWidth > 950) {
			targetElement.classList.add('header_bgcolor-gray-light');
			targetElement.classList.remove('header_transparent_bg');
		} else {
			targetElement.classList.remove('header_bgcolor-gray-light');
			targetElement.classList.add('header_transparent_bg');
		}
	});
}



// Accordian FAQs
jQuery(document).ready(function($) {
    // Hide all accordion contents
	$(".accordion-content").hide();

    // Check if the page ID is 254
	if ($('body').hasClass('page-id-254')) {
        // Open the first accordion content by default
		$(".accordion-title").first().toggleClass("active");
		$(".accordion-title").first().next(".accordion-content").slideDown(500);
	}

	$(".accordion-title").click(function() {
		$(this).toggleClass("active");
		$(this).next(".accordion-content").slideToggle(500);
	});

});




// Prevent select on FAQs
jQuery(document).ready(function($) {

	const noselect = document.querySelectorAll('.noselect');

	noselect.forEach(el => {
		el.addEventListener('mousedown', e => {
			e.preventDefault();
		});
	});
});


// Sticky for blog single sidebar
// document.addEventListener('DOMContentLoaded', function() {
// 	var wrapperEl = document.querySelector('.section_post_single_wrapper');
// 	var stickyEl = document.querySelector('.section_post_single_sidebar_content');
// 	var headerEl = document.querySelector('.site-header');

// 	window.addEventListener('scroll', function() {
// 		var headerHeight = headerEl.getBoundingClientRect().height;
// 		var wrapperTop = wrapperEl.getBoundingClientRect().top;
// 		var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
// 		if (scrollTop > headerHeight && wrapperTop <= headerHeight) {
// 			stickyEl.classList.add('sticky');
// 		} else {
// 			stickyEl.classList.remove('sticky');
// 		}
// 	});
// });


document.addEventListener('DOMContentLoaded', function() {
  // Mobile Menu
  // Function to toggle "active" class of list container when "more-button" is clicked
	document.querySelector('.more-button').addEventListener('click', function () {
		document.querySelector('.list-container').classList.toggle('active');
	});
});



// Desktop Dropdowns
// Get all parent list items with dropdowns
var parentListItems = document.querySelectorAll('ul.header_links li.has-dropdown');

const disableClick = document.querySelectorAll('ul.header_links li.has-dropdown > a');
if(disableClick) {
	for (let i = disableClick.length - 1; i >= 0; i--) {
		const thisElement = disableClick[i];
		thisElement.addEventListener('click', (event)=> {
			event.preventDefault();
		});
	}
}

// Add click event listener to the document
document.addEventListener('click', function(event) {
  // Get the target element of the click event
	var targetElement = event.target;

  // Check if the target element is a dropdown or a parent list item
	var isDropdown = targetElement.closest('ul.header_links li.has-dropdown');
	var isParentListItem = targetElement.closest('ul.header_links li');
	var isListContainer = targetElement.closest('.list-container');

  // Deactivate all dropdowns except for the clicked one or its parent list item, unless the click is within the list container
	for (var i = 0; i < parentListItems.length; i++) {
		var parentListItem = parentListItems[i];

		if (!isDropdown || parentListItem !== isDropdown.closest('li')) {
			if (!isListContainer || !isListContainer.contains(parentListItem)) {
				parentListItem.classList.remove('active');
				parentListItem.querySelector('ul').classList.remove('active');
				parentListItem.querySelector('.arrow-down').classList.remove('active');
			}
		}
	}
});

// Loop through each parent list item
for (var i = 0; i < parentListItems.length; i++) {
  // Get the parent a link element
	var parentLink = parentListItems[i].querySelector('a');

  // Check if the parent list item has a dropdown
	if (parentListItems[i].querySelector('ul')) {
    // If it has a dropdown, create an arrow down SVG element and add it next to the parent link
		var arrowDown = document.createElement('span');
		arrowDown.classList.add('arrow-down');
		arrowDown.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>';
		parentLink.appendChild(arrowDown);
	}

  // Add click event listener to the parent list item
	parentListItems[i].addEventListener('click', function(event) {
    // Stop the event from bubbling up to the document
		event.stopPropagation();

    // Get the currently active parent list item
		var activeParentListItem = document.querySelector('ul.header_links li.has-dropdown.active');

    // Deactivate the currently active parent list item
		if (activeParentListItem && activeParentListItem !== this) {
			activeParentListItem.classList.remove('active');
			activeParentListItem.querySelector('ul').classList.remove('active');
			activeParentListItem.querySelector('.arrow-down').classList.remove('active');
		}

    // Activate the clicked parent list item
		this.classList.toggle('active');
		this.querySelector('ul').classList.toggle('active');
		this.querySelector('.arrow-down').classList.toggle ('active');
	});
}

// jQuery(window).scroll( function(){
// 		var windowTop = $(window).scrollTop();
// 		windowTop > 100 ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
// 	});


// New Header
jQuery(document).ready(function($) {

	$(document).on('click', 'a[href="#call"], .header-call', function(event) {
		event.preventDefault();
		$('.modal-schedule, .modal-schedule-mask').addClass('active');
	});
	$(document).on('click', '.modal-schedule-close', function(event) {
		event.preventDefault();
		$('.modal-schedule, .modal-schedule-mask').removeClass('active');
	});
});