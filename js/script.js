

function showPage() {
	document.getElementById('preloader').style.display = "none";
	document.getElementById('body').style.display = "block";

	// dodano zdarzenia resize
	window.dispatchEvent(new Event('resize'));
}



var header = document.getElementById('header');
var position_header_before = 30;

// przylepione header
window.onscroll = function () {
	sticky_head();
}

function sticky_head() {
	if (window.pageYOffset >= position_header_before) {
		header.classList.add('fixed-top');
	} else {
		header.classList.remove('fixed-top');
	}
}


var elementy_listy = $('section#tabs > div >.tabs_container > #pills-tab > li.nav-item')
elementy_listy.click(function () {
	$('#pills-tab > li').removeClass('active_tab');
	$(this).addClass('active_tab');
});




$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
	nav:true,
	margin: 40,
	center:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})