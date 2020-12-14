<?php get_header();?>
<body>
<div class="wrapper">
	<section class="header">
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
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="#">Services & Products</a>
						</li>
						<li>
							<a href="#">Contact Us</a>
						</li>
					</ul>
				</div>
				 <?php wp_nav_menu(
					 [
						 'menu'=>'primary',
						 'container'=>'div class="header-nav-menu"',
						 'menu_class'=>'header-nav-menu-ul',
						 'theme_location'=>'primary'
					 ]
				 );?>
				
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
				<div class="services-about-us-box">
					<div class="services-about-us-box-card borderHori">
						<div class="services-about-us-box-card-text">
							<div class="big-text">
                                 60+ years
							</div>
							<div class="small-text">
                                  Experience
							</div>
						</div>
					</div>
					<div class="services-about-us-box-card borderVert borderHori">
						<div class="services-about-us-box-card-text">
							<div class="big-text">
                                 LONG TERM
							</div>
							<div class="small-text">
                                  concessionaire
							</div>
						</div>
					</div>
					<div class="services-about-us-box-card borderHori">
						<div class="services-about-us-box-card-text">
							<div class="big-text">
                                 EXTENSIVE
							</div>
							<div class="small-text">
                                  DBFOM experience
							</div>
						</div>
					</div>
				</div>
				<div class="services-about-us-box">
					<div class="services-about-us-box-card">
						<div class="services-about-us-box-card-text">
							<div class="big-text">
                                 HEAVY TRAFFIC
							</div>
							<div class="small-text">
                                  Corridor Management
							</div>
						</div>
					</div>
					<div class="services-about-us-box-card borderVert">
						<div class="services-about-us-box-card-text">
							<div class="big-text">
                                JAPANESE
							</div>
							<div class="small-text">
                                  Technologies
							</div>
						</div>
					</div>
					<div class="services-about-us-box-card">
						<div class="services-about-us-box-card-text">
							<div class="big-text know-text">
                                 KNOW MORE
							</div>
							<div class="small-text">
                                 
							</div>
						</div>
					</div>

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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_1.jpg" class="slideshow-img">
							  </div>
							  <div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_1.jpg" class="slideshow-img">
							  </div>
							  <div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/service_1.jpg" class="slideshow-img">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/address.png">
					</div>
					<div class="getintouch-para-address-text">
						Bld Mihail Kogalniceanu, nr. 8, 7652 <br>
					Bucharest, USA
					</div>
					 </div>
					<div class="getintouch-para-contact">
						<div class="getintouch-para-contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/call.png">
							</div>
							<div class="getintouch-para-contact-text">
						Michael Jordan +40 762 321 762 <br>
					   Mon - Fri, 8:00-22:00 
					   </div>
					</div>
			</div>
			<button class="getintouch-para-text-button">CONTACT US</button>
	    </div>
	</section>
	

<?php get_footer();?>
