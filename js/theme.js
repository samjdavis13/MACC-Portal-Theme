/*
window.onscroll = function() {
  	// called when the window is scrolled.
  	var windowHeight = document.pageYOffset;

  	var searchBar = document.getElementById('googleSearchBar');
  	if (windowHeight > 0) {
    	searchBar.classList.add('scrolled');
  	}
	else {	
    	searchBar.classList.remove('scrolled');
	}
};
*/

$(document).scroll(function(){
	var windowHeight = $(document).scrollTop();
	var searchBar = $("#googleSearchBar");
	if (windowHeight > 0) {
	  searchBar.addClass('scrolled');
	} else {
	  searchBar.removeClass('scrolled');
	}
});