	/* START OWL THUMBS ON AD SINGLE */
	jQuery('.ad-single-thumbs').owlCarousel({
		rtl: jQuery('.rtl').length > 0 ? true : false,
		nav: false,
		dots: false,
responsiveClass:true,
    responsive:{
        0:{
            items:1,
         },
        576:{
            items:1,
        },
    }
	});

	var items = [];
	var $imageLinks = jQuery('.single .single-ad-image');
	$imageLinks.each(function(){
		var $this = jQuery(this);
		if( $this.hasClass('video') ){
			items.push({
				src:jQuery(this).attr('href'),
				type:'iframe',
			});
		}
		else{
			items.push({
				src:jQuery(this).attr('href'),
				type:'image',
			});
		}
	});
	//$imageLinks.magnificPopup({
	//	mainClass: 'mfp-fade',
	//	items: items,
	//	type: 'image',
	//	gallery:{enabled:true},
	//	callbacks: {
	//beforeOpen: function() {
	//var index = $imageLinks.index(this.st.el);
	//if (-1 !== index) {
	//this.goTo(index);
	//}
	//}
	//}
	//});

	jQuery(document).on( 'click', '.single-ad-thumb', function(){
		var $this = jQuery(this);
		var item = $this.data('item');

		jQuery('.single-ad-image').addClass( 'hidden' );
		jQuery('.single-ad-image.item-'+item).removeClass( 'hidden' );

	});


// 
// Add form-control class to FacetWP
//
jQuery(document).on('facetwp-loaded', function() {
    jQuery('html, body').animate({
        scrollTop: jQuery('body').offset().top
    }, 500);
});


(function($) {
    $(document).on('facetwp-loaded', function() {
        $('.facetwp-dropdown').addClass('form-control');
    });
})(jQuery);