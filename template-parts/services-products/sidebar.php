     <?php $walker = new Menu_With_Description; ?>
 
 <section class="services1-content-sidebar">
          <?php wp_nav_menu(
           [
             'menu'=>'Sidebar',
             'container'=>'',
             'menu_class'=>'',
             'theme_location'=>'Sidebar',
             'walker' => $walker
           ]
         );?>
       </section>