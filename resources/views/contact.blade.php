@extends('layouts.app')
@section('content')
	<!--start wrapper-->
	<section class="wrapper">
		<section class="content contact">
			<div class="container">
				<div class="row sub_content">
					<div class="col-md-8">
						<div class="dividerHeading">
							<h4><span>Get in Touch</span></h4>
						</div>
						<p>Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.</p>

						<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
						</div>

						<div class="alert alert-error hidden" id="contactError">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error!</strong> There was an error sending your message.
						</div>

						<form id="contactForm" action="" novalidate="novalidate">
                            <div class="row form-group">
                                <div class="col-lg-6 ">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
                                </div>
                                <div class="col-lg-6 ">
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Message">
                                </div>
                            </div>
						</form>
					</div>

					<div class="col-md-4">
						<div class="sidebar">
							<div class="widget_info">
								<div class="dividerHeading">
									<h4><span>Contact Info</span></h4>
									</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="widget_info_contact">
									<li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: #2021 Lorem Ipsum</p></li>
									<li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 9000-12345</p></li>
									<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
									<li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="#" data-placement="bottom" data-toggle="tooltip" title="www.example.com">www.example.com</a></p></li>
								</ul>

							</div>

							<div class="widget_social">
								<div class="dividerHeading">
									<h4><span>Get Social</span></h4>
								</div>
								<ul class="widget_social">
									<li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
									<li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
									<li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->

@endsection
