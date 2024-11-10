<?php /* Template Name: Home */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package XD_to_WordPress
 */
		// ACF image (ID) as background - with size 
		$image = get_field( 'home_bg' );
		$size = 'full';
		$img = wp_get_attachment_image_src( $image, $size );


get_header();
?>

	<main id="primary" class="site-main">
    <!-- banner section -->
    <section class="home-banner"  style="background-image: url('<?php echo $img[0] ?>')">
        <div class="container">
            <div class="banner-text">
                <h2><?php echo esc_html( get_field('heading') ); ?></h2>
                <p><?php echo esc_html( get_field('sub_title') ); ?></p>
            </div>
        </div>
    </section>
	<!-- end of banner section -->

    <!-- contact info section -->
    <div class="contact-info">
        <div class="container">
            <h2><?php echo esc_html( get_field('contact_info_heading') ); ?></h2>
            <p><?php echo esc_html( get_field('contact_info_text') ); ?></p>
            <div class="icon-container">
            <?php
                $args = array(
                    'post_type' => 'icon_box',
                    'posts_per_page' => 10, // Adjust as needed
                );
                $custom_posts = new WP_Query($args);

                if ($custom_posts->have_posts()) {
                    while ($custom_posts->have_posts()) {
                        $custom_posts->the_post();
                        ?>

                            <div class="icon-box-wrap">
                                
                                <?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium'); 
                                }
                                ?>
                            <div><?php the_content(); ?></div>
                            </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>No posts found.</p>';
                }
            ?>
        </div>
        </div>
    </div>
    <!-- end of contact info -->

    <!-- accreditation section -->

    <div class="accreditation">
        <div class="container">
            <h2><?php echo esc_html( get_field('accreditation_title') ); ?></h2>
            <p><?php echo esc_html( get_field('accreditation_text') ); ?></p>
                <?php
                    $image = get_field('accreditation_image'); 
                    if ($image): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
        </div>
    </div>
    <!-- end of accreditation section -->
    
    <!--Virtual tour section -->
    <div class="virtual-tour">
        <div class="container">
            <h2><?php echo esc_html( get_field('virtual_title') ); ?></h2>
            <?php
                $video = get_field('tour_video'); 

                if ($video) {
                    echo $video; // Output the oEmbed content
                }
                ?>
        </div>
    </div>
     <!-- end Virtual tour section -->
    <div class="specialized-programs">
        <div class="container">
            <h2><?php echo esc_html( get_field('specialized_title') ); ?></h2>
            <p><?php echo esc_html( get_field('specialized_text') ); ?></p>
            <div class="program-container">
            <?php
                $args = array(
                    'post_type' => 'specialized_program',
                    'posts_per_page' => 10, // Adjust as needed
                );
                $custom_posts = new WP_Query($args);

                if ($custom_posts->have_posts()) {
                    while ($custom_posts->have_posts()) {
                        $custom_posts->the_post();
                        ?>

                            <div class="icon-box-wrap">
                                
                                <?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium'); 
                                }
                                ?>
                            <div><?php the_content(); ?></div>
                            <h3><?php the_title(); ?></h3>
                            </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>No posts found.</p>';
                }
            ?>
        </div>
        </div>
    </div>
    
    <!-- faq section -->

    <div class="faq-section">
    <div class="container">
        <h2><?php echo esc_html( get_field('faq_title') ); ?></h2>
        <?php 
        // Define the number of FAQs
        $faq_count = 4; // Adjust this based on the number of FAQ fields you've created

        for ($i = 0; $i <= $faq_count; $i++) {
            $question = get_field("question_$i");
            $answer = get_field("answer_$i");

            if ($question && $answer): ?>
                <div class="faq-item">
                    <h3 class="faq-question"><?php echo esc_html($question); ?> <i class="fa fa-plus icon-toggle"></i></h3>
                    <div class="faq-answer"><?php echo wp_kses_post($answer); ?></div>
                </div>
            <?php endif;
        }
        ?>
    </div>

    <!-- end of faq-->

    <!-- box with buttons-->
    <div class="medicare-center">
        <div class="container"> 
            <h2><?php echo esc_html( get_field('box_with_title') ); ?></h2>
            <p><?php echo esc_html( get_field('box_with_text') ); ?></p>
            <div class="btn-wrap">
                <a href="#"><?php echo esc_html( get_field('box_first_button_text') ); ?></a>
                <a href="#"><?php echo esc_html( get_field('box_second_button_text') ); ?></a>
            </div>
        </div>
    </div>
    <!-- end of box with buttons-->
    </div>

	</main><!-- #main -->

<?php
get_footer();
