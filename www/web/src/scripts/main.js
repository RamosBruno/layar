$('.owl-carousel').owlCarousel({
	items: 1,
	dots: true,
	onChanged: function(){
		$( '.owl-item .rectangle' ).toggleClass('animated fadeIn');
    }
});

$( '.owl-item.active .rectangle').addClass('animated bounceIn');