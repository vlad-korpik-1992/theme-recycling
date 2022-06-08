$(document).ready(function() {
	$('.questions__box__items__content').click(function (e) {
        e.preventDefault();
        let elem = e.target;
		let id = '1' + elem.getAttribute('id');
		$('.questions__content').removeClass('questions__content--active');
		jQuery("#"+id).addClass('questions__content--active');
		let idElem = elem.getAttribute('id');
	});

	// Menu mobile

	$('.menu__btn').on('click', function (e) {
        e.preventDefault();
        $('.menu__list').toggleClass('menu__list--active');
    });

	/* scrollto */

	$('.scrollto a').on('click', function scroll(e) {
		e.preventDefault();
		let href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top - 95
		}, {
			duration: 370,
			easing: "linear"
		});
		$('.menu__list').removeClass('menu__list--active');
		return false;
	});

	/* Ajax Urgent car valuation */

	$('#form__btn-calculate').click(function(e){
		e.preventDefault();
		x = document.getElementById('fullname').value;
		if (x === "") {
		  document.getElementById('hero-error').textContent = "Enter your full name";
		  return false;
		}
		x = document.getElementById('phone').value;
		if (x === "") {
		  document.getElementById('hero-error').textContent = "Enter your phone number";
		  return false;
		}
		x =  document.getElementById('note').value;
		  if (x === "") {
			document.getElementById('hero-error').textContent = "You did not write what you are interested in";
			return false;
		}
		$('#hero-error').removeClass("error");
		document.getElementById('hero-error').textContent = "Sending...";
	
		const formHeroData = {
		  'fullname': $('input[name=fullname]').val(),
		  'phone': $('input[name=phone]').val(),
		  'messages': $('textarea[name=note]').val(),
		};
	
		$.ajax({
		  url: '/wp-content/themes/recycling/hero-send.php',
		  type: "POST",
		  data: formHeroData,
		  success: function() {
			  $('#hero__form').trigger('reset');
			  $('#hero-error').text("Your message has been sent!");
			  setTimeout(function () {
				$('#hero-error').text("").addClass("error");
			  }, 2000);
		  },
		  error: function (jqXHR) {
			  $('#hero-error').text(jqXHR);
		  }
		});
	});

	$('#form__btn-cost').click(function(e){
		e.preventDefault();
		x = document.getElementById('costname').value;
		if (x === "") {
		  document.getElementById('cost-error').textContent = "Enter your full name";
		  return false;
		}
		x =  document.getElementById('costemail').value;
        if (x === "") {
            document.getElementById('cost-error').textContent = "Enter your E-mail";
            return false;
        } else {
            let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(x)){
                document.getElementById('cost-error').textContent = "Invalid Email";
                return false;
            }
        }
		x = document.getElementById('costphone').value;
		if (x === "") {
		  document.getElementById('cost-error').textContent = "Enter your phone number";
		  return false;
		}
		$('#cost-error').removeClass("error");
		document.getElementById('cost-error').textContent = "Sending...";
	
		const formCostData = {
		  'fullname': $('input[name=costname]').val(),
		  'email': $('input[name=costemail]').val(),
		  'phone': $('input[name=costphone]').val(),
		  'car': $('input[name=costecar]').val(),
		  'year': $('input[name=costyear]').val(),
		  'messages': $('input[name=costenote]').val(),
		};
	
		$.ajax({
		  url: '/wp-content/themes/recycling/cost-send.php',
		  type: "POST",
		  data: formCostData,
		  success: function() {
			  $('#cost__form').trigger('reset');
			  $('#cost-error').text("Your message has been sent!");
			  setTimeout(function () {
				$('#cost-error').text("").addClass("error");
			  }, 2000);
		  },
		  error: function (jqXHR) {
			  $('#cost-error').text(jqXHR);
		  }
		});
	});

	$('#form__btn-footer').click(function(e){
		e.preventDefault();
		x = document.getElementById('footername').value;
		if (x === "") {
		  document.getElementById('footer-error').textContent = "Enter your full name";
		  return false;
		}
		x =  document.getElementById('footeremail').value;
        if (x === "") {
            document.getElementById('footer-error').textContent = "Enter your E-mail";
            return false;
        } else {
            let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(x)){
                document.getElementById('footer-error').textContent = "Invalid Email";
                return false;
            }
        }
		x = document.getElementById('footerphone').value;
		if (x === "") {
		  document.getElementById('footer-error').textContent = "Enter your phone number";
		  return false;
		}
		$('#footer-error').removeClass("error");
		document.getElementById('footer-error').textContent = "Sending...";
	
		const formQuestionData = {
		  'fullname': $('input[name=footername]').val(),
		  'email': $('input[name=footeremail]').val(),
		  'phone': $('input[name=footerphone]').val(),
		  'question': $('input[name=footerquestion]').val(),
		};
	
		$.ajax({
		  url: '/wp-content/themes/recycling/questions-send.php',
		  type: "POST",
		  data: formQuestionData,
		  success: function() {
			  $('#footer__form').trigger('reset');
			  $('#footer-error').text("Your message has been sent!");
			  setTimeout(function () {
				$('#footer-error').text("").addClass("error");
			  }, 2000);
		  },
		  error: function (jqXHR) {
			  $('#footer-error').text(jqXHR);
		  }
		});
	});
});

/* Header fixed */
$(function() {
	let header = $('.header');
	let hederHeight = header.height();
	$(window).scroll(function() {
	  let height = $(window).scrollTop();
	  if($(this).scrollTop() > 1) {
	  	header.addClass('header--fixed');
	    $('body').css({
		  'paddingTop': hederHeight+'px'
	   	});
	  	} else {
	   		header.removeClass('header--fixed');
	   		$('body').css({
				'paddingTop': 0
	   		})
	  	}
	});
});