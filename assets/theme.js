jQuery(document).ready(function() {   
	
	jQuery(".portfolio-item .fancybox").fancybox({
		'margin': 50

	});

	var $container = $('#portfolio-grid').imagesLoaded(function(){
		console.log($container.width());
		$container.isotope({
			itemSelector: '.portfolio-item', 
			resizable: false,
			masonry: {
				isFitWidth: false,
				columnWidth: $container.width()/5
			}
		});
		
	});


	$('#filters').on('click', 'a', function(e){
		var filterValue = $(this).attr('data-filter');
		$container.isotope({
			filter: filterValue
		});
		console.log($("#portfolio-grid").width());
		e.preventDefault();
	});

	var $homepageContainer = $('.galleryWall').imagesLoaded(function(){
		$homepageContainer.isotope({
			itemSelector: '.galleryItem',
			masonry: {
				columnWidth: '.grid-sizer',
				gutter: ".gutter-sizer"
			}

		});

	});

});
