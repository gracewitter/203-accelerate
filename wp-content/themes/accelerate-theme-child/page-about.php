<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
    <div class="main-content about-hero-content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
</div><!-- #primary -->
	
<section class="about-services">
    <div class="site-content services-wrapper">
        <div id="services-intro">
            <h4>Our Services</h4>
            <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
        </div>
        <div id="about-services-custom-fields">
            <?php while ( have_posts() ) : the_post();
                $size = "full";
                $service_image_1 = get_field('services_image_1');
                $service_title_1 = get_field('service_title_1');
                $service_blurb_1 = get_field('service_blurb_1');
                $service_image_2 = get_field('services_image_2');
                $service_title_2 = get_field('service_title_2');
                $service_blurb_2 = get_field('service_blurb_2');
                $service_image_3 = get_field('services_image_3');
                $service_title_3 = get_field('service_title_3');
                $service_blurb_3 = get_field('service_blurb_3');
                $service_image_4 = get_field('services_image_4');
                $service_title_4 = get_field('service_title_4');
                $service_blurb_4 = get_field('service_blurb_4');
            ?>
            
                <div class="about-services-section">
                    <div class="about-services-image image-margin-1">
                        <?php if($service_image_1) { 
                            echo wp_get_attachment_image( $service_image_1, $size );
                        } ?>
                    </div>
                    <div class="about-services-TEXT">
                        <h3><?php echo $service_title_1; ?></h3>
                        <p><?php echo $service_blurb_1; ?></p>
                    </div>
                </div>
                <div class="about-services-section">
                    <div class="about-services-TEXT">
                        <h3><?php echo $service_title_2; ?></h3>
                        <p><?php echo $service_blurb_2; ?></p>
                    </div>
                    <div class="about-services-image image-margin-2">
                        <?php if($service_image_2) { 
                            echo wp_get_attachment_image( $service_image_2, $size );
                        } ?>
                    </div>
                </div>
                <div class="about-services-section">
                    <div class="about-services-image image-margin-1">
                        <?php if($service_image_3) { 
                            echo wp_get_attachment_image( $service_image_3, $size );
                        } ?>
                    </div>
                    <div class="about-services-TEXT">
                        <h3><?php echo $service_title_3; ?></h3>
                        <p><?php echo $service_blurb_3; ?></p>
                    </div>
                </div>
                <div class="about-services-section">
                    <div class="about-services-TEXT">
                        <h3><?php echo $service_title_4; ?></h3>
                        <p><?php echo $service_blurb_4; ?></p>
                    </div>
                    <div class="about-services-image image-margin-2">
                        <?php if($service_image_4) { 
                            echo wp_get_attachment_image( $service_image_4, $size );
                        } ?>
                    </div>
                </div>
            <?php endwhile; //end of the loop ?>
        </div> <!-- end custom services section -->
        
    </div>
</section>
<div id=about-cta-wrapper>
    <div id="about-cta">
        <h2>Interested in working with us?</h2>
        <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </div>
</div>


<?php get_footer(); ?>
