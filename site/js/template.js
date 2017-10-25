jQuery(document).ready(function($) {
	$(window).load(function() {
		$('.slide').each(function() {
			$('.flexslider').flexslider({
				animation: 'slide',
				animationLoop: false,
				controlNav: false
			});
		});
	});

	// Anchor
	$('.anchor a').click(function(e) {
		e.preventDefault();
		
		var tag = $(this).attr('href');

		var h = $('#header').innerHeight();

		$(window).scroll(function() {
			var cc = $(window).scrollTop();
			
			if(cc > 1) {
				h = $('#header').innerHeight();				
			}
		});
		
		if(tag == '#') {
			return false;
		}

		$('html, body').animate({
			scrollTop: $(tag).offset().top - h
		}, 500);
	});

	// Facybox Video
	$('[data-fancyboxvideo]').fancybox({
		youtube : {
			showinfo : 0
		},
		vimeo : {
		color : 'f00'
		}
	});

	// Page Gallery
	$('.pagina-fotos .list-item > div > a').on('click', function() {
		$.fancybox.open([
			{
				src: 'https://c1.staticflickr.com/9/8148/29324593462_abebaddc38_k.jpg',
				opts: {
					caption: 'Imagem 01'
				}
			},
			{
				src: 'https://c2.staticflickr.com/6/5499/30972532232_051e1dc57e_h.jpg',
				opts: {
					caption: 'Imagem 02'
				}
			}
		], {
			loop : false
		});
	});

	// Gallery Slider
	$('.gallery-slider').each(function() {
		$(this).flexslider({
			animation: 'slide',
			animationLoop: false,
			controlNav: false
		});
	});

	// Mask Phones
	var SPMaskBehavior = function(val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(SPMaskBehavior.apply({}, arguments), options);
		}
	};
	$('.maskphone').mask(SPMaskBehavior, spOptions);


	// Menu Mobile
	$('.nav .link-toggle-menu').click(function(e) {
		e.preventDefault();
		
		$(this).toggleClass('active');
		
		$('.nav .toggle-menu').slideToggle(300);
	});

	// Effects
	$('.bounce-up').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated bounceInUp',
		offset: 100
	});
	$('.bounce-lef').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated bounceInLeft',
		offset: 100
	});
	$('.fade-in').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated fadeIn',
		offset: 100
	});
	$('.fade-down').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated fadeInDown',
		offset: 100
	});
	$('.flip-in').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated flipInX',
		offset: 100
	});
	$('.light-speed').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated lightSpeedIn',
		offset: 100
	});
	$('#unidades-slide').click(function(e){
		$('.todas-unidades').slideToggle();
		e.preventDefault();
	});


$("#contact_form").validate({ messages: {
    required: "Preencha este campo."
  }});
	$("#contact_form").submit(function(e){

		//alert('FIRE IN THE HOLE');
		if($("#contact_form").valid()){


			form_data = $(this).serialize();
			$.ajax({
			  type: "POST",
			  url: "include/send_contact.php",
			  data: form_data,
			  success: function(data){
			  	console.log(data);
			  	if(data == 1){
			  		alert('Email enviado');
			  	}else{
			  		alert('Erro ao enviar o email, tente novamente mais tarde');
			  	}
			  }
			});
		}
		e.preventDefault();
	});
	
});