(function ($) {
	
	"use strict";

	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});
	
	$('.input-group.date').datepicker({format: "dd.mm.yyyy"});
	

	$('.filters ul li').click(function(){
	  $('.filters ul li').removeClass('active');
	  $(this).addClass('active');
	  
	  var data = $(this).attr('data-filter');
	  $grid.isotope({
	    filter: data
	  })
	});

	var $grid = $(".grid").isotope({
	  itemSelector: ".all",
	  percentPosition: true,
	  masonry: {
	    columnWidth: ".all"
	  }
	})

	$(".Modern-Slider").slick({
	    autoplay:true,
	    autoplaySpeed:10000,
	    speed:600,
	    slidesToShow:1,
	    slidesToScroll:1,
	    pauseOnHover:false,
	    dots:true,
	    pauseOnDotsHover:true,
	    cssEase:'linear',
	   // fade:true,
	    draggable:false,
	    prevArrow:'<button class="PrevArrow"></button>',
	    nextArrow:'<button class="NextArrow"></button>', 
	  });

	$('.search-icon a').on("click", function(event) {
	    event.preventDefault();
	    $("#search").addClass("open");
	    $('#search > form > input[type="search"]').focus();
	  });

	  $("#search, #search button.close").on("click keyup", function(event) {
	    if (
	      event.target == this ||
	      event.target.className == "close" ||
	      event.keyCode == 27
	    ) {
	      $(this).removeClass("open");
	    }
	  });

	  $("#search-box").submit(function(event) {
	    event.preventDefault();
	    return false;
	  });


	$(function() {
        $("#tabs").tabs();
    });

	$('.owl-menu-item').owlCarousel({
		items:5,
		loop:true,
		dots: true,
		nav: true,
		autoplay: true,
		margin:10,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:5
			  }
		  }
	  })

	// Window Resize Mobile Menu Fix
	mobileNav();

	// Scroll animation init
	window.sr = new scrollReveal();
	
	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}

	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
			
			$('.scroll-to-section a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
		  
			var target = this.hash,
			menu = target;
			var target = $(this.hash);
			$('html, body').stop().animate({
				scrollTop: (target.offset().top) - 79
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
	        
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}

	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 767) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);

	var oldX = window.screenX, oldY = window.screenY;
 
	/**
	 * Funcion que se ejecuta cada 500 milisegundos para comprovar si se ha
	 * movido la ventana de lugar
	 */
	var interval = setInterval(function() {
		if(oldX != window.screenX || oldY != window.screenY) {
			showInfo();
		}
 
		oldX = window.screenX;
		oldY = window.screenY;
	}, 500);
 
	if(window.addEventListener) {
		// navegadores que utilizan los estandares
		window.addEventListener("resize",showInfo);
		window.addEventListener("scroll",showInfo);
	}else{
		// Los navegadores de Microsoft... siempre ayudando a los desarrolladores...
		window.attachEvent("onresize",showInfo);
		window.attachEvent("onscroll",showInfo);
	}
 
	function showInfo() {
		var result="";
		result=window.outerWidth;
		var a = document.getElementById('logoGuia');

		var form = document.getElementById('formId');
		/*var boton = document.getElementById('botonSearchId');*/
		if(result < 700){
			a.classList.remove('ml-5');
			form.classList.remove('form-inline');
			/*boton.classList.add('form-control');*/
			ChangedSizeModels();
		}else{
			a.classList.add('ml-3');
			form.classList.add('form-inline');
			/*boton.classList.remove('form-control');*/
		}
		
		
	}
	showInfo();

function CancelRegisters(){
	var email = document.getElementById('inputEmailNew');
	var uname = document.getElementById('inputUserNameNew');
	var password = document.getElementById('inputPasswordNew');
	email.value = '';
	uname.value = '';
	password.value = '';
}

function ValidateInputsEmails(){
	var button_send = document.getElementById('button-send');
	button_send.hidden = true;
}

function ValidatedEmails(){
	var email_1 = document.getElementById('correo-valido');
	var email_2 = document.getElementById('confirmar');
	var button_send = document.getElementById('button-send');
	var alert = document.getElementById('alerta');
	var all_ok = document.getElementById('okId');

	if(email_1.value != email_2.value) {
		button_send.disabled = true;
		button_send.hidden = true;
		alert.hidden = false;
		all_ok.hidden = true;
	}else{
		button_send.disabled = false;
		button_send.hidden = false;
		alert.hidden = true;
		all_ok.hidden = false;
	}
}
  
function commentBox(){
	var name=document.getElementById('name').value;
	var comment=document.getElementById('comment').value;
	var alerta = document.getElementById('aviso');

	if(name =="" || comment ==""){
		alerta.hidden=false;
	}else{
		alerta.hidden=true;
		var parent=document.createElement('div');
		var el_name=document.createElement('h5');
		el_name.classList.add('card-title');
		var el_message=document.createElement('p');
		el_message.classList.add('card-text');
		var el_line=document.createElement('hr');
		var txt_name=document.createTextNode(name);
		var txt_message=document.createTextNode(comment);
		el_name.appendChild(txt_name);
		el_message.appendChild(txt_message);
		el_line.style.border='1px solid #000';
		parent.appendChild(el_name);
		parent.appendChild(el_line);
		parent.appendChild(el_message);
		parent.setAttribute('class', 'pane');
		document.getElementById('result').appendChild(parent);
 
		document.getElementById('name').value="";
		document.getElementById('comment').value="";
	}
 
}

var inputsearch = document.getElementById('searchInputId');
var lista = document.getElementById('listaId');
var a, textValue

function SearchList(){
	let input = document.getElementById('searchInputId').value
    	input=input.toLowerCase();
    	let x = document.getElementsByName('ResultId');

		if(inputsearch.value.length===0){
			lista.classList.remove('list-group');
			lista.classList.add('list-group2');
			lista.hidden=true;
		}else{
			lista.classList.remove('list-group2');
			lista.classList.add('list-group');
			lista.hidden=false;
			for (i = 0; i < x.length; i++) { 
				if (!x[i].innerHTML.toLowerCase().includes(input)) {
					x[i].style.display="none";
					
				}
				else {
					x[i].style.display="";                 
				}
			}
		}	
}


