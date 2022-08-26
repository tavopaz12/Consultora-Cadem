	function cerrar(){
		  document.getElementById("modal").style.display = "none";

	}

//Menu de Navegación	
	$(document).ready(function(){

		// MOSTRANDO Y OCULTANDO MENU
		$('#button-menu').click(function(){
			if($('#button-menu').attr('class') == 'fa fa-bars' ){

				$('.navegacion').css({'width':'100%', 'background':'rgba(0,0,0,.5)'}); 
				// Mostramos al fondo transparente
				$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); 
				// Agregamos el icono X
				$('.navegacion .menu').css({'left':'0px'}); 
				// Mostramos el menu

			} else{

				$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); 
				// Ocultamos el fonto transparente
				$('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); 
				// Agregamos el icono del Menu
				$('.navegacion .submenu').css({'left':'-320px'}); 
				// Ocultamos los submenus
				$('.navegacion .menu').css({'left':'-320px'}); 
				// Ocultamos el Menu

			}
		});

		// MOSTRANDO SUBMENU
		$('.navegacion .menu > .item-submenu a').click(function(){
			
			var positionMenu = $(this).parent().attr('menu'); 
			// Buscamos el valor del atributo menu y lo guardamos en una variable
			console.log(positionMenu); 

			$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0px'}); 
			// Mostramos El submenu correspondiente

		});

		// OCULTANDO SUBMENU
		$('.navegacion .submenu li.go-back').click(function(){

			$(this).parent().css({'left':'-320px'}); 
			// Ocultamos el submenu

		});

	});

//Oculatar header mientras bajamos
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	  var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
	    document.getElementById("navbar").style.top = "0";
	  } else {
	    document.getElementById("navbar").style.top = "-70px";
	  }
	  prevScrollpos = currentScrollPos;
	}

//Slideshow
	$(document).ready(function(){
		var imgItems = $('.slider li').length; // Numero de Slides
		var imgPos = 1;

		// Agregando paginacion --
		for(i = 1; i <= imgItems; i++){
			$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
		} 
		//------------------------

		$('.slider li').hide(); // Ocultanos todos los slides
		$('.slider li:first').show(); // Mostramos el primer slide
		$('.pagination li:first').css({'color': '#CD6E2E'}); // Damos estilos al primer item de la paginacion

		// Ejecutamos todas las funciones
		$('.pagination li').click(pagination);
		$('.right span').click(nextSlider);
		$('.left span').click(prevSlider);


		setInterval(function(){
			nextSlider();
		}, 5000);

		// FUNCIONES =========================================================

		function pagination(){
			var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

			$('.slider li').hide(); // Ocultamos todos los slides
			$('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado

			// Dandole estilos a la paginacion seleccionada
			$('.pagination li').css({'color': '#858585'});
			$(this).css({'color': '#CD6E2E'});

			imgPos = paginationPos;

		}

		function nextSlider(){
			if( imgPos >= imgItems){imgPos = 1;} 
			else {imgPos++;}

			$('.pagination li').css({'color': '#858585'});
			$('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

			$('.slider li').hide(); // Ocultamos todos los slides
			$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

		}

		function prevSlider(){
			if( imgPos <= 1){imgPos = imgItems;} 
			else {imgPos--;}

			$('.pagination li').css({'color': '#858585'});
			$('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

			$('.slider li').hide(); // Ocultamos todos los slides
			$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
		}

	});

//Iniciar Sesión
	var login = document.getElementById('id01');

	window.onclick = function(event) {
	    if (event.target == login) {
	        login.style.display = "none";
	    }
	}

//Animacion de texto
	function typeEffect(element, speed) {
		var text = $(element).text();
		$(element).html('');
		
		var i = 0;
		var timer = setInterval(function() {
						if (i < text.length) {
							$(element).append(text.charAt(i));
							i++;
						} else {
							clearInterval(timer);
						}
					}, speed);
	}

	$( document ).ready(function() {
	  var speed = 150;
	  var delay = $('#texto-animate').text().length * speed + speed;
	  typeEffect($('#texto-animate'), speed);
	});


	function typeEffect(element, speed) {
		var text = $(element).text();
		$(element).html('');
		
		var i = 0;
		var timer = setInterval(function() {
						if (i < text.length) {
							$(element).append(text.charAt(i));
							i++;
						} else {
							clearInterval(timer);
						}
					}, speed);
	}

	$( document ).ready(function() {
	  var speed = 300;
	  var delay = $('#texto-animate2').text().length * speed + speed;
	  typeEffect($('#texto-animate2'), speed);
	});
