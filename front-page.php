<?php get_header(); ?>

<div class="featured">
  
  <div class="container">
    
    <div class="row">
        
        <a href="<?php the_permalink(); ?>">
          
          <div class="featured-post">
            
            <?php
              $args = array(
                    'posts_per_page' => 2,
                    'meta_key' => 'meta-checkbox',
                    'meta_value' => 'yes'
                );
                $featured = new WP_Query($args);
             
              if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
              
              <?php the_post_thumbnail(); ?>
              
              <div class="post-content">
                
                <h3><?php the_title(); ?></h3>
                
                <?php the_excerpt();?>
                
                <div class="post-date">
                  <i class="fas fa-calendar-alt post-dateIcon"></i><?php echo get_the_date('F j, Y'); ?>
                </div>
                
              </div>
                
              <?php
                endwhile; else:
                endif;
              ?>
              
          </div> 
          
          <div class="featured-post">
            
            <?php
              $args = array(
                    'posts_per_page' => 2,
                    'meta_key' => 'meta-checkbox',
                    'meta_value' => 'yes'
                );
                $featured = new WP_Query($args);
             
              if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
              
              <?php the_post_thumbnail(); ?>
              
              <div class="post-content">
                
                <h3><?php the_title(); ?></h3>
                
                <?php the_excerpt();?>
                
                <div class="post-date">
                  <i class="fas fa-calendar-alt post-dateIcon"></i><?php echo get_the_date('F j, Y'); ?>
                </div>
                
              </div>
                
              <?php
                endwhile; else:
                endif;
              ?>
              
          </div> 
          
          <div class="featured-post">
            
            <?php
              $args = array(
                    'posts_per_page' => 2,
                    'meta_key' => 'meta-checkbox',
                    'meta_value' => 'yes'
                );
                $featured = new WP_Query($args);
             
              if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
              
              <?php the_post_thumbnail(); ?>
              
              <div class="post-content">
                
                <h3><?php the_title(); ?></h3>
                
                <?php the_excerpt();?>
                
                <div class="post-date">
                  <i class="fas fa-calendar-alt post-dateIcon"></i><?php echo get_the_date('F j, Y'); ?>
                </div>
                
              </div>
                
              <?php
                endwhile; else:
                endif;
              ?>
              
          </div> 


        
        </a>
      
    </div>
      
  </div>

</div>


<div class="container page-container">
  
    <div class="row">
        
        <div class="sidebar-wrapper">
          <?php get_sidebar(); ?>
        </div> 

        <main id="main" class="site-main col-md-8" role="main">
          

        <?php 
          // the query
          $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
           
          <?php if ( $wpb_all_query->have_posts() ) : ?>
           
              <!-- the loop -->
              <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              <div class="post">
                  <div class="row title-row">
              		  <div class="col-md-12 title-columns">
                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              		    </div>
              		  </div>
              	</header><!-- .entry-header -->
              	
              	<div class="row">
              	  <div class="col-md-3 post-imageWrapper">
                    <div class="post-image"><?php the_post_thumbnail(); ?></div>
              	  </div>
              	  <div class="col-md-9 post-text">
                    <?php the_excerpt(); ?>
                    <div class="row">
                      <div class="post-date">
                        <i class="fas fa-calendar-alt post-dateIcon"></i><?php echo get_the_date('F j, Y'); ?>
                      </div>
                    </div>
              	  </div>
                </div>
              </div>

            <?php endwhile; ?>
            <div class="join-linkWrapper">
             <a href="#" class="join-link">Read More</a>
            </div>
            <?php wp_reset_postdata(); ?>


           <?php  the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                'next_text'          => __( 'Next page', 'twentysixteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

        </main>

    </div>
<?php get_footer(); ?>
