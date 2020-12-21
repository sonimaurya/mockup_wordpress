<?php 
			if (have_posts()) :
				if(is_page("about-us")){
					get_template_part('template-parts/about-us/about-us');
				}
				else if(is_page("contact-us")){
					get_template_part('template-parts/contact/contact-us');
							}
				else if(is_page("services-2")){
		           get_template_part('template-parts/services-products/services');
				}
				else if(is_page("APDIS")){
		           get_template_part('template-parts/services-products/services1/services1');
				}
				else if(is_page("PDAS")){
		           get_template_part('template-parts/services-products/services2/services2');
				}
				else if(is_page("traffic")){
		           get_template_part('template-parts/services-products/services3/services3');
				}
				else if(is_page("bridges")){
		           get_template_part('template-parts/services-products/services4/services4');
				}
				else if(is_page("tunnels")){
		           get_template_part('template-parts/services-products/services5/services5');
				}
				
            endif; // End the loop.
            ?>
            


            