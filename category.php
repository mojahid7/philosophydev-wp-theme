<?php get_header() ?>
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1><?php  single_cat_title();?></h1>

                <p class="lead"><?php echo category_description(); ?></p>
            </div>
        </div>
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>
				
                <?php
					if(have_posts()){
						while(have_posts()){
							the_post();
							
							get_template_part("template-parts/post-formet/post",get_post_format()); 
						}
					}else{
						echo _e("there have no post Abelable now...");
					}
				?>

                    

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
					<?php philosophydev_paginate_links(); ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


    
  <?php get_footer(); ?>