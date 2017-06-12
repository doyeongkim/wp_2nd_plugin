function pageScroll() {
    	window.scrollBy(0,50); 
    	scrolldelay = setTimeout('pageScroll()',100);
}

function stopScroll() {
    	clearTimeout(scrolldelay);
}
