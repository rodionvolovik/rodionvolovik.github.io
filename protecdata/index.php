<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ProTecData</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-custom.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/from.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">

	<!-- <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">
		// Select all links with hashes
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top - 120
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});

		$(function() {
			$(".show-more").click(function() {
				el = $(".show-more");
				el.slideDown(300);
				$(this).slideUp();
			});
		});

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
		        document.getElementById("to_top").style.display = "block";
		    } else {
		        document.getElementById("to_top").style.display = "none";
		    }
		}

		$(function() {
			$('.navbar-nav a').click(function(){
			     $('.navbar-toggler').click();
			});
		});
	</script>

</head>
<body data-spy="scroll" data-target="#navbar" data-offset="70">
	<div id="navbar" class="container-fluid nav-wrapper">
		<nav class="container navbar navbar-light navbar-expand-lg justify-content-between">
			<a class="navbar-brand" href="#home">
				<img class="logo" src="img/logo.jpg">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<!-- <span class="navbar-toggler-icon"></span> -->
				<div class="bar d-flex flex-column justify-content-between">
					<div class="bar__item bar-1 align-self-baseline"></div>
					<div class="bar__item bar-2 align-self-end"></div>
					<div class="bar__item bar-3 align-self-end"></div>
				</div>
			</button>
			<div class="collapse navbar-collapse" style="flex-grow: 0" id="navbarNavAltMarkup">
				<div class="navbar-nav justify-content-between">
					<a class="active" href="#whatwedo">What We Do</a>
					<a class="" href="#services">Services</a>
					<a class="" href="#about">About Us</a>
					<a class="" href="gmyths.html">GDPR Myths</a>
					<a class="" href="faq.html">F.A.Q.</a>
					<a class="" href="#contact">Contact Us</a>
				</div>
			</div>
		</nav>
	</div>
	<div id="home" class="section-1 container-fluid fadeIn wow">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 bg-white section-1__text">
				<div class="w-100 pb">
					<h1 class="text-uppercase">GDPR HAS COME INTO EFFECT AND AFFECTS EVERY BUSINESS AND ORGANISATION THAT PROCESSES PERSONAL DATA</h1>
				</div>
				<div class="w-100 pb">ProTecData are GDPR Consultants and are here to help businesses,<br>
				health professionals and schools with their ‘best efforts’ towards demonstrating<br>
				GDPR compliance.</div>
				<div class="w-100"></div>
				<a class="btn-main" href="#next">Learn more<i class="far fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>

	<div id="next" class="container we-do fadeIn wow" data-wow-delay="0.3s">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h2>Do I need a GDPR consultant?</h2>
				<span class="w-100">
				<p>
				Compliance is not just a case of ticking a few boxes. Your organisation must have GDPR policies and procedures in place and be able to respond quickly to data breaches and subject access requests.
				</p>
				<p>
				Although you may not need to change your business practices, you do need to be able to demonstrate compliance and your staff need to be aware of the new rights of individuals.
				</p>
				</span>
			</div>
			<div class="col-xs-12 col-md-6">
				<h2>How do I start preparing for GDPR?</h2>
				<span class="w-100">
					The <a href="https://ico.org.uk/" class="btn-sec" target="_blank">UK Information Commissioner’s Office website</a> is an excellent source of information, and their <a href="https://ico.org.uk/media/1624219/preparing-for-the-gdpr-12-steps.pdf" class="btn-sec" target="_blank">12 steps to take now</a> guide is a good place to start. Of course, you should then call us to arrange a free consultation!
				</span>
			</div>
		</div>
	</div>

	<div id="whatwedo" class="container fadeIn wow" data-wow-delay="0.3s">
		<div class="row align-items-center we-do">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 we-do__bordered">
				<span class="we-do__title w-100">
					How do we help your business<br>to demonstrate ‘best efforts’ towards<br>GDPR compliance?
				</span>
				<a class="btn-main" href="#contact">Contact Us<i class="far fa-arrow-alt-circle-right"></i></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 we-do__items">
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">FREE INITIAL CONSULTATION</div>
							<div class="">Firstly, we meet with you to give you an outline of the new regulation, get an overview of your oranisation and then give you a summary of what’s required towards becoming compliant. We offer this initial consultation for free.</div>
						</div>
					</div>
				</div>
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">RISK ANALYSIS</div>
							<div class="">We examine the personal data you are storing and using and create a risk matrix based on the importance of the data to your organisation and the risk to the rights of individuals. We then suggest ways to reduce these risks, for instance by minimising the types of personal data collected and implementing a data retention policy.</div>
						</div>
					</div>
				</div>
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">COMPLIANCE GAP ANALYSIS</div>
							<div class="">We then start by helping you complete a detailed GDPR gap analysis questionnaire. This will identify business practices that need addressing and forms the basis of an action plan. At this stage we can usually identify if you need to appoint a Data Protection Officer.</div>
						</div>
					</div>
				</div>
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">COMPANY POLICIES</div>
							<div class="">The next step is to create or update your company policies and procedures and give your staff awareness training on the rights of individuals that engage with your business.</div>
						</div>
					</div>
				</div>
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">DATA AUDIT</div>
							<div class="">We then perform a data audit and create a data flow map. These are important exercises that help to identify what personal data you store, where you store it, what you use it for and how it flows through your business.</div>
						</div>
					</div>
				</div>
				<div class="we-do__item">
					<div class="row">
						<div class="col-1 we-do__count"></div>
						<div class="col-11">
							<div class="we-do__item-title">CONTINUOUS IMPROVEMENT</div>
							<div class="">We recommend a policy of continuous improvement and suggest that you review your GDPR compliance at least once per annum.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="container-fluid pb fadeIn wow" data-wow-delay="0.3s">
		<div class="container about">
			<div class="row align-items-center justify-content-center">
				<div class="col-sm-12 col-md-8 col-lg-9 about-text">
					<h2>About Us</h2>
					<div class="w-100">
						<p>
						We help organisations who don’t have the necessary internal resources available to manage their GDPR compliance process in its entirety.
						</p>
						<p>
						Every organisation is different. Our approach is to tailor the solution for you to meet GDPR
						requirements with comfortable changes to your established processes. We do not shoe-horn
						you into a proprietary solution that might not fit well with your business or culture.
						</p>
						<p>
						ProTecData can help organisations understand what they need to do to comply with the
						GDPR requirements, and continue that support if required, into managing the changes
						needed continually to meet GDPR ‘Best Efforts’.
						</p>
						<p>
						This represents a challenge for organisations without visibility and control of the type of data
						they handle, where the data is located and applicable regulations.
						</p>
						<p class="show-more">
						Now is the time access and implement appropriate data security measures to locate, identify
						and protect sensitive business and personal data within your organisation, enabling
						compliance with applicable legislation such as the GDPR and UK DPA (Data Protection Act).
						</p>
						<p class="show-more">
						Our approach is to keep things simple and easy throughout the GDPR process. Our
						methodology is, Access, Discover, Plan, Implement and Manage.
						</p>
						<a class="show-more in btn-sec">More...</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="container services fadeIn wow" data-wow-delay="0.3s">
		<h2 class="w-100 text-center" style="margin-bottom: 25px;">Our Services</h1>
		<span class="w-100">
			<span class="services-line"></span>
		</span>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 50px;">
				<span class="w-100 services__title">GDPR Compliance Software</span>
				<p class="w-100">GDPR Software tools have an important part to play in your compliance process. They dramatically reduce the amount of effort needed to build data maps, help you to create GDPR Compliant policies and provide a safety net to protect your data when employees accidentally or intentionally do something that could possibly expose personal information held on your systems to the risk of a breach.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 50px;">
				<span class="w-100 services__title">GDPR Consultancy</span>
				<p class="w-100">We provide GDPR consultancy services which guide you through the process of meeting
				your responsibilities under the European General Data Protection Regulation (GDPR).
				Under GDPR, you are responsible for all the Data that you hold on your IT systems and
				other locations in various formats. With this accountability comes the need to have the
				appropriate policies, procedures and technical controls in place to protect all personal

				information that you store in your HR, sales, and marketing and indeed any other databases
				and folders.
				A Personal Information Management System is the set of processes and procedures that
				you will need to have in place not only to achieve compliance under the GDPR, but also to
				stay on track as your business and IT processes evolve.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 50px;">
				<span class="w-100 services__title">DPO Service</span>
				<p class="w-100">You will need to have someone available who can advise you on how to comply with the
				GDPR and stay compliant. But unless you are a large company it is hard to justify employing
				your own full-time Data Protection Officer.
				Every time your business workflows or processes change you will need to assess how the
				proposed change effects on GDPR compliance. You will need access to a data protection
				specialist to assess the proposed change, provide advice to minimise the risk of a data
				breach.
				Our Virtual Data Protection Officer service provides you with access to a GDPR practitioner
				to carry out Privacy Impact Analysis work as and when needed as well as annual audits and
				the provision of ad hoc data protection advice.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 50px;">
				<span class="w-100 services__title">Cyber Security Service</span>
				<p class="w-100">With growing risks of cyber-attacks and data breaches, it is important to know your business
				has the right cyber defense in place to reduce the risk of becoming a target.
				Our Cyber Security Service provides a range of services to measure, manage and control
				Cyber Risk within your organisation.
				To best protect you, we work with your business to identify key business assets and risk of
				cyber-attack or data breach from a range of threats.
				Our Cyber Security Service align to leading industry standards enabling us to identify the
				most appropriate Cyber Security Framework for your business size and requirements.</p>
			</div>
		</div>
	</div>

	<div id="faq" class="container-fluid faq">
		<div class="container fadeIn wow" data-wow-delay="0.3s">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-8 col-lg-8">
					<div class="w-100">
						<h2 class="faq__title">Frequently Asked Questions</h2>
					</div>

					<div class="accordion" id="accordion" style="margin-bottom: 50px;">
						<div class="card">
							<div class="card-header" id="headingOne">
								<a class="faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is the General Data Protection Regulation?
								</a>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
								The GDPR is a European regulation that replaces the Data Protection Act 1998 in the UK. It provides greater protection for the personal data of individuals in the EU.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<a class="faq-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Is my business affected?
								</a>
							</div>

							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
								The GDPR applies to all organisations operating within the EU. It also applies to organisations outside the EU that offer goods or services to individuals in the EU.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<a class="faq-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								But I only offer business-to-business services, am I still affected?
								</a>
							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
								Yes. You still control the personal data of your employees, and even the work email addresses and phone numbers of your customers and suppliers can be classed as personal data that falls under the scope of GDPR.
								</div>
							</div>
						</div>
					</div>
					<a class="btn-main" href="faq.html">Read More<i class="far fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div id="contact" class="contact container fadeIn wow" data-wow-delay="0.3s">
		<h2>Contact Us</h2>
		<div class="row">
			<div class="col-xs-12 col-md-6">

				<span>Please contact us using this form if you want to arrange a free GDPR briefing, have a question, or would like further information about ProTecData’s services.</span>

				<?php
				if($_POST['submit']){
				 if($_POST['email'] != ""){
				   echo $_POST['email'];
				   echo "Thank you for contacting us"; 
				 }
				}?>

				<form name="contactform" method="post" action="sendform.php">
					<div class="styled-input">
						<input type="text" id="name" name="name" required="" autocomplete="off">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" id="email" name="email" required="" autocomplete="off">
						<label>Email</label>
						<span></span>
					</div>
						<div class="styled-input">
						<input type="text" id="comments" name="comments" required="">
						<label>Comment</label>
						<span></span>
					</div>
					<input type="submit" value="Send">
				</form>

			</div>
			<div class="col-xs-12 col-md-6">
				<div class="row">
					<div class="col-md-10 col-xs-12 offset-md-2">
						<div class="row">
							<div class="col-lg-6 col-xs-12 contact__item text-center">
								<i class="fa fa-envelope"></i>
								<br>
								<span class="w-100">protecdata@consultant.com</span>
							</div>
							<div class="col-lg-6 col-xs-12 contact__item text-center">
								<i class="fa fa-phone"></i>
								<br>
								<span class="w-100">+44 (0) 1223 968670</span>
							</div>
						</div>
					</div>
					<div class="col-footer align-self-end text-right">
						<div class="w-100">
							<a href="#home" class="btn-footer">To Top</a>
							<a href="#whatwedo" class="btn-footer">What We Do</a>
							<a href="#about" class="btn-footer">About Us</a>
							<a href="#services" class="btn-footer">Services</a>
							<a href="faq.html" class="btn-footer">F.A.Q.</a>
							<a href="gmyths.html" class="btn-footer">GDPR Myths</a>
							<br>
							<a href="disclaimer.html" class="btn-footer" target="_blank">Disclaimer</a>
							<a href="privacy.html" class="btn-footer" target="_blank">Privacy Policy</a>
						</div>
						<div class="w-100">&copy; ProTecData Solutions 2018</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a id="to_top" href="#home" class="to_top">Top</a>

</body>
</html>




