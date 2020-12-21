<?php get_header(); ?>
<div class="wrapper">
	<section class="header contact-us">
		<div class="header-nav">
			<div class="header-nav-logo">
			<?php if(function_exists('the_custom_logo')){
					$custom_logo_id=get_theme_mod('custom_logo');
					$logo_info_array=wp_get_attachment_image_src($custom_logo_id);
				} ?>
				<img src="<?php echo $logo_info_array[0]; ?>">
			</div>
			<div class="header-nav-menu">
				<div class="mobile-menu" >
					<i class="fa fa-bars " onclick="display_menu()"></i>
					<ul id="mobile-menu">
						<li class="active">
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about-us.html">About Us</a>
						</li>
						<li id="dropdown-mobile">
							<a href="#">Services & Products</a>
						</li>
						<div class="header-nav-dropdown-mobile">
							<div class="lists">
							  <h3 class="drop-heading">Services</h3>
							  <div class="ul">
								  <div class="li"><a class="a" href="services2.html">APDIS</a></div>
								  <div class="li"><a class="a" href="services3.html">PDAS</a></div>
							  </div>
							  </div>
							  <div class="lists">
								  <h3  class="drop-heading">Products</h3>
								  <div class="ul">
									 <div class="li"><a class="a" href="services4.html">DAD</a></div>
									 <div class="li"><a class="a" href="services5.html">ASCIS</a></div>
									 <div class="li"><a class="a" href="services6.html">MPVC</a></div>
								  </div>
								  </div>
						  </div>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				
				<!-- <ul class="header-nav-menu-ul">
					<li class="header-nav-menu-ul-li">
						<a href="index.html" class="header-nav-menu-ul-li-a active">Home</a>
					</li>
					<li class="header-nav-menu-ul-li">
						<a href="about-us.html" class="header-nav-menu-ul-li-a">About Us</a>
					</li>
					<li class="header-nav-menu-ul-li"  id="dropdown">
						<a href="#" class="header-nav-menu-ul-li-a">
							Services & Products</a>
					</li>
						<div class="header-nav-dropdown">
							  <div class="lists">
								<h3 class="drop-heading">Services</h3>
								<ul><li><a href="services.html">Services</a></li>
									<li><a href="services2.html">APDIS</a></li>
									<li><a href="services3.html">PDAS</a></li>
								</ul>
								</div>
								<div class="lists">
									<h3  class="drop-heading">Products</h3>
									<ul>
										<li><a href="services4.html">DAD</a></li>
										<li><a href="services5.html">ASCIS</a></li>
										<li><a href="services6.html">MPVC</a></li>
									</ul>
									</div>
							</div>
					<li class="header-nav-menu-ul-li">
						<a href="contact.html" class="header-nav-menu-ul-li-a">Contact Us</a>
					</li>
				</ul> -->
				<?php 
				wp_nav_menu(array(
					'menu'=>'primary-menu',
					'container'=>'',
					'item_wrap'=>'<ul class="header-nav-menu-ul">%3$s</ul>'
				));?>
			</div>
		</div>
		<div class="header-text">
			<div class="header-text-big-title">Slick material design</div>
			<div class="header-text-small-title">beautiful,elegently coded ,
				 one-page wordpress theme for business</div>
				 <button class="header-text-button">KNOW MORE</button>
		</div>
	</section>
	<section class="services">
            <div class="services-about-us">
				<div class="services-about-us-top">
					<h1 class="top-heading">ABOUT US</h1>
					<div class="horizontal-line"></div>
				</div>
			       <div class="services-about-us-para">
					<p class="services-about-us-para-text">NEXCO Highway Solutions of America, Inc. (NHSA) "a NEXCO-Central Group" provides road operators and engineering companies with the innovative road and traffic management solutions taking advantage of highway business history over 60 years in Japan. 
					</p>
					<a href="#" class="services-about-us-para-know ">Know More</a>   
				</div>
			</div>
			<div class="services-products">
				<div class="services-products-heading">
					<h1 class="top-heading">SERVICES & PRODUCTS</h1>
					<div class="horizontal-line"></div>
				</div>
				<div class="services-products-box">
					<div class="services-products-box-l">
						<div class="para">
							<p class="para-text">Our engineering services, backed by decades of
								 practical experience, help road operators and engineering 
								 companies that seek to manage their roadways
								 effectively by reducing life-cycle costs and
								  increasing performances. </p>
								  <button class="para-button">KNOW MORE</button>
						</div>
						
					</div>
					<div class="services-products-box-r">
						<div class="services-products-slideshow">
							<div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="<?php echo get_bloginfo('template_url'); ?>/images/home/service_1.jpg" class="slideshow-img">
							  </div>
							  <div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="<?php echo get_bloginfo('template_url'); ?>/images/home/service_1.jpg" class="slideshow-img">
							  </div>
							  <div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="<?php echo get_bloginfo('template_url'); ?>/images/home/service_1.jpg" class="slideshow-img">
							  </div>
						</div>
						<div class="slideshow-dot-box">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="portfolio">
		<div class="portfolio-heading">
			<div class="top-heading">Portfolio</div>
			<div class="horizontal-line"></div>
		</div>
		  <div class="portfolio-para">
			<div class="portfolio-para-text">You need more information? Check what other persons are saying about our product. They are very happy with their purchase. </div>
		    <button class="portfolio-para-text-button">KNOW MORE</button>
	    </div>
	</section>
<section class="news">
	<div class="news-title">
		<div class="top-heading">News</div>
		<div class="horizontal-line"></div>
	</div>
	<div class="news-description">
		<div class="news-description-cards">
			<div class="news-description-cards-t">JUNE 14, 2019 </div>
			<div class="news-description-cards-d">We open a local office in Irving, TX (Jan 1, 2020). </div>
		</div>
		
		<div class="news-description-cards">
			<div class="news-description-cards-t">APRIL 4, 2019 </div>
			<div class="news-description-cards-d">Thank you for visiting our booth at IBTTA Annual Technology Summit ! </div>
		</div>
	</div>
	<div class="news-description">
		<div class="news-description-cards">
			<div class="news-description-cards-t">JANUARY 13, 2019</div>
			<div class="news-description-cards-d">We're going to run a booth at the
				 TRB exhibition (Jan XX, 2020)  </div>
		</div>
		
		<div class="news-description-cards">
			<div class="news-description-cards-t">JUNE 5, 2017 </div>
			<div class="news-description-cards-d">Conclusion of the strategic Partnership with FECON  </div>
		</div>
	</div>
</section>
	<section class="getintouch">
		<div class="getintouch-heading">
			<div class="top-heading">get in touch</div>
			<div class="horizontal-line"></div>
		</div>
		  <div class="getintouch-para">
			<div class="getintouch-para-text">You need more information? Check what other persons are saying about our product. They are very happy with their purchase. </div>
			<div class="getintouch-para-contact-us">
				<div class="getintouch-para-address">
					<div class="getintouch-para-address-icon">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/home/address.png">
					</div>
					<div class="getintouch-para-address-text">
						Bld Mihail Kogalniceanu, nr. 8, 7652 <br>
					Bucharest, USA
					</div>
					 </div>
					 <div class="getintouch-para-contact">
						<div class="getintouch-para-contact-icon">
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/home/mail.png">
							</div>
							<div class="getintouch-para-contact-text">
						ask@cnexo.com
					   </div>
					</div>
					<div class="getintouch-para-contact">
						<div class="getintouch-para-contact-icon">
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/home/call.png">
							</div>
							<div class="getintouch-para-contact-text">
						Michael Jordan +40 762 321 762 <br>
					   Mon - Fri, 8:00-22:00 
					   </div>
					</div>
					
			</div>
			<button class="getintouch-para-text-button">CONTACT US</button>
		</div>
		<div class="home-scroll-button" id="back2Top">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/top.png">
          </div>
	</section>
	<section class="footer">
	<?php if(function_exists('the_custom_logo')){
					$custom_logo_id=get_theme_mod('custom_logo');
					$logo_info_array=wp_get_attachment_image_src($custom_logo_id);
				} ?>
			<img src="<?php echo $logo_info_array[0]; ?>" class="footer-logo">
			<div class="footer-privacy-text"><span>Privacy Policy</span></div>
			<div class="footer-copyright-text">Copyright &copy; Central Nippon Expressway Company Limited All Rights Reserved.</div>
	</section>
</div>
<?php get_footer(); ?>