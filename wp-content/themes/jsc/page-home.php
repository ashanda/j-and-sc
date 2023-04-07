<?php
/*
Template Name: Home
*/
 get_header();  ?>
        <div class="hero-section">
            <div class="bann" style="background-image: url(<?php the_field('banner_image');?>)">
                <div class="hero-text">
                    <div class="middle-text">
                        <h4 class="main-heading">
                        <?php the_field('banner_title');?>
                        </h4>
                        <h4 class="sub-heading">
                        <?php the_field('banner_sub_title');?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-section">
            <div class="service-list-header">
                <div class="container">
                    <div class="row service-list">
                    <?php if( have_rows('section_01_service') ): ?>
                            <?php while( have_rows('section_01_service') ): the_row(); 
                                $image = get_sub_field('service_image');
                                ?>
                                <div class="col-md-3">
                                    <div class="services">
                                        <div class="service-icon">
                                            <img src="<?php echo $image['url'];?>" alt="">
                                        </div>

                                        <h5 class="main-title">
                                        <?php the_sub_field('service_title'); ?>
                                        </h5>
                                        <p class="main-description">
                                           <?php the_sub_field('service_description'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-section">
            <div class="container">
                <div class="row about-us py-5">
                    <div class="inline-about-us">
                        <div class="about-us-left-image text-center">
                            <img class="about-image" src="<?php the_field('about_section_image');?>" alt="">
                        </div>
                        <div class="about-us-right-text">
                            <h5 class="about-us-text mb-4 mt-4 mt-md-0">
                            <?php the_field('about_section_title');?>
                            </h5>
                            <span class="about-us-description">
                            <?php the_field('about_text');?>
                            </span>
                            <div class="red-line">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="owl-carousel-section">
            <div class="container-fluid">
                <div class="owl-carousel owl-carousel1 owl-theme">
                <?php if( have_rows('section_03_slider') ): ?>

                    <?php while( have_rows('section_03_slider') ): the_row(); 
                        $image = get_sub_field('slider_image');
                        ?>
                        <div class="item">
                            <img class="w-100" src="<?php echo $image['url'];?>" alt="">
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
                    
                </div>
            </div>
        </div>

        <div class="skewbox" style="background-image: url(<?php the_field('section_04_image');?>)">
            <div class="skew-content">
                <div class="content">
                    <div class="text pb-5">
                        <h4><?php the_field('section_04_description');?></h4>
                    </div>
                </div>
            </div>
            <div class="image-box">
            </div>
        </div>
        <div class="skewbox2" style="background-image: url(<?php the_field('section_05_image');?>)">
            <div class="image-box">
            </div>
            <div class="skew-content2">
                <div class="content">
                    <div class="text pb-4">
                        <h4><?php the_field('section_05_title');?></h4>
                        <?php the_field('section_05_description');?>
                    </div>
                </div>
            </div>

        </div>

        <div class="owl-carousel-section compsnies">
            <div class="owl-carousel owl-carousel2 owl-theme">
            <?php if( have_rows('company_slider') ): ?>

            <?php while( have_rows('company_slider') ): the_row(); 
                $image = get_sub_field('comapy_logo');
                ?>
                <div class="item">
                    <img src="<?php echo $image['url'];?>" alt="">
                </div>
            <?php endwhile; ?>

            <?php endif; ?>
            </div>
        </div>

        <div class="team-section">
            <div class="container py-5">
                <div class="team-main-title my-5">
                    <h2 class="main">
                      <?php the_field('about_team_title');?>
                    </h2>
                    <div class="main-description">
                      <?php the_field('about_team_description');?>
                    </div>

                    <div class="about-team">
                        <div class="row">

                            <?php if( have_rows('our_team') ): ?>
                                <?php while( have_rows('our_team') ): the_row(); 
                                    $image = get_sub_field('memeber_image');
                                    ?>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="image-items mt-3 mt-lg-0">
                                    <img src="<?php echo $image['url'];?>" alt="">
                                    <h5 class="item-title mt-2"><?php the_sub_field('name'); ?>
                                    </h5>
                                    <h5 class="item-position"><?php the_sub_field('jobrole'); ?></h5>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-section">
            <div class="container-fluid">
                <div class="row map-area">
                   <?php the_field('google_location','option');?>
                </div>
            </div>
        </div>

        <div class="contact-us-section pt-5">
            <div class="container">
                <div class="row contact">
                    <div class="col-md-6 contact-info">
                        <div class="contact-left-text">
                            <div class="left-text">
                                <h3 class="s1">
                                <?php the_field('conatct_title');?>
                                </h3>

                                <h5 class="s1">
                                <?php the_field('conatact_description');?>
                                </h5>

                                <div class="social-links">
                                    <div class="social">
                                        <li class="social-meadia-links">
                                            <span class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </span>
                                            <p class="icon-text">
                                                <span class="icon-main-text">Phone:</span>
                                                <span class="text-value"><?php the_field('company_telephone','option');?></span>
                                            </p>
                                        </li>

                                        <li class="social-meadia-links">
                                            <span class="icon">
                                                <i class="fas fa-envelope-open-text"></i>
                                            </span>
                                            <p class="icon-text">
                                                <span class="icon-main-text">Email:</span>
                                                <span class="text-value"><?php the_field('company_email','option');?></span>
                                            </p>
                                        </li>

                                        <li class="social-meadia-links">
                                            <span class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                            <p class="icon-text">
                                                <span class="icon-main-text">Address:</span>
                                                <span class="text-value"><?php the_field('company_address','option');?></span>
                                            </p>
                                        </li>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-right-form">
                            <div class="form">
                                <div id="contact-form" name="contact-form">
                                    <h3 class="heading">
                                    <?php the_field('contact_form_title');?>
                                    </h3>
                                   <?php
                                     echo  do_shortcode('[contact-form-7 id="6" title="Contact form 1"]');
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php get_footer(); ?>