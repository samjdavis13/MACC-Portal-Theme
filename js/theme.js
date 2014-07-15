$(document).scroll(function(){
	var windowHeight = $(document).scrollTop();
	var searchBar = $("#googleSearchBar");
	if (windowHeight > 0) {
	  searchBar.addClass('scrolled');
	} else {
	  searchBar.removeClass('scrolled');
	}
});