@extends('layouts.app')
@section('content')
	<!--start wrapper-->
	<section class="wrapper">
        <section class="content about">
			<div class="container">
				<div class="row sub_content who">
                    <div class="col-md-6">
                        <div class="img-about">
                            <div id="slider" class="swipe">
                                <ul class="swipe-wrap">
                                    <li><img src="images/about/1.png" alt="" /></li>
                                    <li><img src="images/about/2.png" alt="" /></li>
                                    <li><img src="images/about/3.png" alt="" /></li>
                                </ul>
                                <div class="swipe-navi">
                                  <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div>
                                  <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="dividerHeading">
                            <h4><span>Welcome to Amaze</span></h4>
                        </div>
                        <p>Veos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum. </p>

                        <p>Donec rutrum erat non arcu gravida porttitor. Nunc et magna nisi. Lore aliquam at erat in lorem purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. Maecenas ut nulla quis eros scelerisque posuere vel vitae nibh eros scelerisque posuere vel. </p>

                        <p>Maecenas ut nulla quis eros scelerisque posuere vel vitae nibh. Proin id condimentum sem. Morb vitae dui in magna vestibulum suscipit vitae vel nunc. Integer ut risus nulla. malesuada tortor, nec scelerisque lorem mat.</p>
                    </div>
				</div>

				<div class="row sub_content">
                    <div class="col-md-6">
                        <div class="Amaze-tab">
                            <div class="dividerHeading">
                                <h4><span>Tabs Content</span></h4>
                            </div>

                            <div class="tab" role="tabpanel">
                                <ul class="nav nav-tabs">
                                    <li><a href="#Popular" data-toggle="tab" class="active">Popular</a></li>
                                    <li class=""><a href="#Recent" data-toggle="tab">Recent</a></li>
                                    <li class=""><a href="#Comment" data-toggle="tab">Comment</a></li>
                                </ul>
                                <div class="tab-content clearfix">
                                    <div class="tab-pane fade show active in" id="Popular">
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_1.png" alt="" /></a></span>
                                                <a href="#">Publishing packag esanse web page editos</a>
                                                <i>October 09, 2015</i>
                                            </li>
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_2.png" alt="" /></a></span>
                                                <a href="#">Sublishing packag esanse web page editos</a>
                                                <i>October 08, 2015</i>
                                            </li>
                                            <li class="last">
                                                <span><a href="#"><img src="images/content/recent_3.png" alt="" /></a></span>
                                                <a href="#">Mublishing packag esanse web page editos</a>
                                                <i>October 07, 2015</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="Recent">
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_4.png" alt="" /></a></span>
                                                <a href="#">Various versions has evolved over the years</a>
                                                <i>October 18, 2015</i>
                                            </li>
                                            <li>
                                                <span><a href="#"><img src="images/content/recent_5.png" alt="" /></a></span>
                                                <a href="#">Rarious versions has evolve over the years</a>
                                                <i>October 17, 2015</i>
                                            </li>
                                            <li class="last">
                                                <span><a href="#"><img src="images/content/recent_6.png" alt="" /></a></span>
                                                <a href="#">Marious versions has evolven over the years</a>
                                                <i>October 16, 2015</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="Comment">
                                        <ul class="comments">
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_3.png" alt="#"></a>
                                                <p><strong><a href="#">Prambose</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_1.png" alt="#"></a>
                                                <p><strong><a href="#">Makaroni</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list clearfix">
                                                <a class="post-thumbnail" href="#"><img width="60" height="60" src="images/content/recent_2.png" alt="#"></a>
                                                <p><strong><a href="#">Prambanan</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TESTIMONIALS -->
					<div class="col-md-6">
						<div class="dividerHeading">
							<h4><span>Our Crazy Skills</span></h4>
						</div>
						<p>Donec rutrum erat non arcu gravida porttitor. Nunc et magna nisi. Lore aliquam at erat in lorem purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas.</p>
						<ul class="progress-skill-bar">
							<li>
								<span class="lable">70%</span>
								<div class="progress_skill">
									<div class="bar" data-value="70" role="progressbar" data-height="100">
										HTML
									</div>
								</div>
							</li>
							<li>
								<span class="lable">80%</span>
								<div class="progress_skill">
									<div class="bar" data-value="80" role="progressbar" data-height="100">
										CSS
									</div>
								</div>
							</li>
							<li>
								<span class="lable">90%</span>
								<div class="progress_skill">
									<div class="bar" data-value="90" role="progressbar" data-height="100">
										JavaScript
									</div>
								</div>
							</li>
							<li>
								<span class="lable">80%</span>
								<div class="progress_skill">
									<div class="bar" data-value="80" role="progressbar" data-height="100">
										MySQL
									</div>
								</div>
							</li>
							<li>
								<span class="lable">70%</span>
								<div class="progress_skill">
									<div class="bar" data-value="70" role="progressbar" data-height="100">
										PHP
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="row sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row promo_box">
                            <div class="col-md-9">
                                <div class="promo_content">
                                    <h3>Amaze is awesome responsive template, with refreshingly clean design.</h3>
                                    <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pb_action">
                                    <a href="#fakelink" class="btn btn-default btn-lg">
                                        <i class="fa fa-shopping-cart"></i>
                                        Download Now
                                    </a>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

				<div class="row  sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="dividerHeading">
							<h4><span>Meet the Team</span></h4>
						</div>
					</div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team_2">
                            <div class="pic">
                                <img src="images/teams/9.png"/>
                                <div class="over-layer">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Williamson</h3>
                                <span class="post">Web Developer</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            </div>
                            <a href="#" class="read">CONTACT ME</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team_2">
                            <div class="pic">
                                <img src="images/teams/10.png"/>
                                <div class="over-layer">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Kristiana</h3>
                                <span class="post">Web Designer</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            </div>
                            <a href="#" class="read">CONTACT ME</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team_2">
                            <div class="pic">
                                <img src="images/teams/11.png"/>
                                <div class="over-layer">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Steve Thomas</h3>
                                <span class="post">Web Developer</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            </div>
                            <a href="#" class="read">CONTACT ME</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team_2">
                            <div class="pic">
                                <img src="images/teams/12.png"/>
                                <div class="over-layer">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title">Miranda joy</h3>
                                <span class="post">Web Designer</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            </div>
                            <a href="#" class="read">CONTACT ME</a>
                        </div>
                    </div>
				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->
@endsection
