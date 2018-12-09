<?php /* Template Name: Front Page */

	get_header(); ?>

        <main id="content" class="site-content <?php brideliness_main_content_class(); ?>" itemscope="itemscope" itemprop="mainContentOfPage">
            <?php 
                $main_slider = get_post_meta($id, 'main_slider', true);
            ?>
            <div class="main_slide">
                <?php echo do_shortcode( "$main_slider" ); ?>
            </div>
            <?php
                $small_promos_1 = get_field('small_promos_1');
                $small_promos_2 = get_field('small_promos_2');
                $small_promos_3 = get_field('small_promos_3');
                $small_promos_4 = get_field('small_promos_4');

                $args = array( 'numberposts' => '10', 'suppress_filters' => false );
	            $recent_posts = wp_get_recent_posts( $args );

            ?>
            <div class="featured_home">      
                <div class="col-xs-12 col-sm-4">
                    <figure class="brideliness-banner banner-with-effects effect-bubba2  vc_custom_1489069766761 br-banner1">
                    <img width="720" height="948" src="<?php echo $small_promos_1['image']['url'] ?>" class="attachment-full size-full" alt="<?php echo  $small_promos_1['image']['alt'] ?>">
                    <figcaption>
                        <h3 class="main-caption " style="left:14%; top:17%;">
                        <span style="text-align:left; display: block; font-family: EB Garamond; font-size:32px; font-weight:300; line-height:1.1;">
                        <span style="font-style:italic;"><?php echo $small_promos_1['title'] ?></span>
                        </h3>
                        <h4 class="secondary-caption " style="left:14%; top:61%;">
                        <span style="font-size:12px; color:#757575;  text-align:left; display:block;"><?php echo $small_promos_1['subtitle'] ?></span>
                        </h4>
                    </figcaption>
                        <a class="button-banner button1" style="left:14%; top:72%;" href="<?php echo $small_promos_1['url'] ?>" title="<?php echo esc_html__('VIEW NOW', 'brideliness') ?>" target=""><?php echo esc_html__('VIEW NOW', 'brideliness') ?></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <figure class="brideliness-banner banner-with-effects effect-bubba2  vc_custom_1489069766761 br-banner1">
                    <img width="720" height="948" src="<?php echo $small_promos_2['image']['url'] ?>" class="attachment-full size-full" alt="<?php echo  $small_promos_2['image']['alt'] ?>">
                    <figcaption>
                        <h3 class="main-caption " style="left:14%; top:17%;">
                        <span style="text-align:left; display: block; font-family: EB Garamond; font-size:32px; font-weight:300; line-height:1.1;">
                        <span style="font-style:italic;"><?php echo $small_promos_2['title'] ?></span>
                        </h3>
                        <h4 class="secondary-caption " style="left:14%; top:61%;">
                        <span style="font-size:12px; color:#757575;  text-align:left; display:block;"><?php echo $small_promos_2['subtitle'] ?></span>
                        </h4>
                    </figcaption>
                        <a class="button-banner button1" style="left:14%; top:72%;" href="<?php echo $small_promos_2['url'] ?>" title="<?php echo esc_html__('VIEW NOW', 'brideliness') ?>" target=""><?php echo esc_html__('VIEW NOW', 'brideliness') ?></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <figure class="brideliness-banner banner-with-effects effect-bubba2  vc_custom_1489069766761 br-banner1">
                    <img width="720" height="948" src="<?php echo $small_promos_3['image']['url'] ?>" class="attachment-full size-full" alt="<?php echo  $small_promos_3['image']['alt'] ?>">
                    <figcaption>
                        <h3 class="main-caption " style="left:14%; top:17%;">
                        <span style="text-align:left; display: block; font-family: EB Garamond; font-size:32px; font-weight:300; line-height:1.1;">
                        <span style="font-style:italic;"><?php echo $small_promos_3['title'] ?></span>
                        </h3>
                        <h4 class="secondary-caption " style="left:14%; top:61%;">
                        <span style="font-size:12px; color:#757575;  text-align:left; display:block;"><?php echo $small_promos_3['subtitle'] ?></span>
                        </h4>
                    </figcaption>
                        <a class="button-banner button1" style="left:14%; top:72%;" href="<?php echo $small_promos_3['url'] ?>" title="<?php echo esc_html__('VIEW NOW', 'brideliness') ?>" target=""><?php echo esc_html__('VIEW NOW', 'brideliness') ?></a>
                    </figure>
                </div>
            </div>
            <div class="featured_horizontal col-xs-12">
            <figure class="brideliness-banner banner-with-effects effect-bubba2  ">
                <img width="1140" height="174" src="<?php echo $small_promos_4['image']['url'] ?>" class="attachment-full size-full" alt="<?php echo $small_promos_4['image']['alt'] ?>">
                <figcaption>
                    <h3 class="main-caption " style="left:46%; top:18%;"><span style="color:#996a63; font-size:14px;"><?php echo $small_promos_4['subtitle'] ?></span></h3>
                    <h4 class="secondary-caption " style="left:35%; top:35%;"><span style="color:#996a63; font-size:38px;  font-style:italic; font-family: EB Garamond;"><?php echo $small_promos_4['title'] ?></span></h4>
                </figcaption>
                <a class="button-banner button2" style="left:50%; top:77%;" href="<?php echo $small_promos_4['url'] ?>" title="<?php echo esc_html__('SHOP NOW', 'brideliness') ?>" target=""><?php echo esc_html__('SHOP NOW', 'brideliness') ?></a>
            </figure>
            </div>
   
            <div class="featured_products col-xs-12">
            <div class="br-wrap-title custom_title vc_custom_1473779797796"><h2 style="font-size: 26px;text-align: center;font-family:EB Garamond;font-weight:400;font-style:normal" class="br-title "><span><?php echo esc_html__('FEATURED PRODUCTS', 'brideliness') ?></span></h2></div>
            <div class="brideliness-woo-shortcode with-slider" id="featured_slider">
            
                <?php echo do_shortcode( '[products limit="10" columns="4" visibility="featured" ]' ); ?>
            </div>
            </div>
            <div class="featured_products col-xs-12">
            <div class="br-wrap-title custom_title vc_custom_1473779797796"><h2 style="font-size: 26px;text-align: center;font-family:EB Garamond;font-weight:400;font-style:normal" class="br-title "><span><?php echo esc_html__('ON SALE', 'brideliness') ?></span></h2></div>
            <div class="brideliness-woo-shortcode with-slider" id="featured_slider">
            
                <?php echo do_shortcode( '[products limit="10" columns="4" visibility="on_sale" ]' ); ?>
            </div>
            </div>
            <div class="clearfix"></div>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content">

                        <?php the_content(); ?>

                    </div><!-- .entry-content -->
                <?php endwhile; ?>
            <?php endif; ?>
		
        </main><!--.site-content-->
        <div class="clearfix"></div>
        
       

        <div class="latest_posts_home col-xs-12">
        <div class="br-wrap-title custom_title vc_custom_1473779797796"><h2 style="font-size: 26px;text-align: center;font-family:EB Garamond;font-weight:400;font-style:normal" class="br-title "><span><?php echo esc_html__('FROM THE BLOG', 'brideliness') ?></span></h2></div>

        <div class="brideliness-posts-shortcode" id="owl-demo">
        <ul class="post-list columns-3 owl-carousel owl-theme" style="opacity: 1; display: block;">
        <?php foreach( $recent_posts as $recent ){  
           $post_id = $recent['ID']; 
           $size = "full";
        //    echo '<pre>'; print_r($recent); echo '</pre>';
        ?>
        <div class="item">
            <li>
                <div class="thumb-wrapper">
                    <div class="thumb-background"></div>
                    <div class="date">
                        <span class="day"><?php echo get_the_time('d', $post_id)?></span>
                        <span class="month"><?php echo get_the_time('M', $post_id)?></span>
                    </div>
                    <img
                        width="360"
                        height="180"
                        src="<?php echo get_the_post_thumbnail_url($post_id) ?>"
                        class="attachment-brideliness-recent-post size-brideliness-recent-post wp-post-image"
                        alt=""></div>
                    <div class="item-content-wrapper ">
                        <div class="item-content">
                            <h3>
                                <a
                                    rel="bookmark"
                                    href="<?php echo get_permalink($post_id) ?>"
                                    title="Click to read more"><?php echo $recent['post_title'] ?></a>
                            </h3>
                            <div class="meta-wrapper">
                                <div class="author"><?php echo esc_html__('by', 'brideliness').' '.get_the_author($recent['post_author']).' '.esc_html__('in', 'brideliness'); ?></div>
                                <div class="category">
                                    <a
                                        href="http://brideliness.themes.zone/category/accessories/"
                                        rel="category tag">
                                        <?php  
                                        $category_detail=get_the_category($post_id);
                                            foreach($category_detail as $cd){
                                                echo $cd->cat_name;
                                            }
                                        ?></a>
                                </div>
                            </div>
                            <div class="entry-excerpt">
                                <?php echo wp_trim_words( $recent['post_content'], 12, '...' ); ?>
                            </div>
                            <div class="buttons-wrapper">
                                <div class="comments-qty">
                                    <i class="icon-speech-bubble"></i><?php echo $recent['comment_count']; ?></div>
                                <span class="delimeter">|</span>
                                <div class="wrapper-likes">
                                    <i class="icon-shapes"></i>
                                    <div class="likes-counter"><?php echo get_post_meta( $post_id, "_post_like_count", true );?><span>
                                            likes</span>
                                    </div>
                                </div>
                                <a
                                    class="posts-img-link button"
                                    rel="bookmark"
                                    href="<?php echo get_permalink($post_id); ?>"
                                    title="Click to read more">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
        </div>    
        <?php } wp_reset_query(); ?>       
        </ul>
        </div>
        </div>
       

        <div class="clearfix"></div>

        <div class="small_products_home col-xs-12">
        <aside  class="widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">		
			
					<div class="shop-bottom-sidebar col-xs-12 col-sm-12 col-md-12">
						<?php dynamic_sidebar('footer-content-bottom-shop1'); ?>
					</div>
					<div class="shop-bottom-sidebar col-xs-12 col-sm-12 col-md-12">
						<?php dynamic_sidebar('footer-content-bottom-shop2'); ?>
					</div>
				
        </aside>
        <div class="icons_home col-xs-12">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div
                                class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1473929185264">
                                <div class="wpb_wrapper">
                                    <div class="wrapper-text-info" style="margin-top:20px; margin-bottom:20px;">
                                        <div class="wrapper-icon">
                                            <i class="br-icon icon-delivery-truck"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <span style="    display: block; color: #4c4c4c; font-weight:700;"><?php echo esc_html__('FREE ORDER & DELIVERY', 'brideliness') ?></span>
                                            <span style="color: #7e7974; font-style: italic;"><?php echo esc_html__('Guaranteed Delivery In 4 Days', 'brideliness') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div
                                class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1473929069323">
                                <div class="wpb_wrapper">
                                    <div class="wrapper-text-info" style="margin-top:20px; margin-bottom:20px;">
                                        <div class="wrapper-icon">
                                            <i class="br-icon icon-assignment-return"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <span style="display:block; color: #4c4c4c; font-weight: bold;"><?php echo esc_html__('RETURN & REFUNDS', 'brideliness') ?></span>
                                            <span style="color: #7e7974; font-style: italic;"><?php echo esc_html__('Your satisfaction is of the utmost importance', 'brideliness') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div
                                class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1473929094366">
                                <div class="wpb_wrapper">
                                    <div class="wrapper-text-info" style="margin-top:20px; margin-bottom:20px;">
                                        <div class="wrapper-icon">
                                            <i class="br-icon demo-icon icon-tool-simpleicon"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <span style="color: #4c4c4c; display:block; font-weight: bold;"><?php echo esc_html__('PRIVACY & SECURITY', 'brideliness') ?></span>
                                            <span style="color: #7e7974; font-style: italic;"><?php echo esc_html__('What our privacy and security programs', 'brideliness') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php get_footer(); ?>
    <script>
    
    (function($) {
        $(document).ready(function() {
            var owl1 = $("#featured_slider ul.products");
            var owl2 = $("#latest_slider ul.products");

            owl1.owlCarousel({
            items : 4,        		  // items above 1000px browser width
            itemsDesktop : [1199,4], 			  // items between 1000px and 901px
            itemsDesktopSmall : [979,2],  	  // betweem 900px and 601px
            itemsTablet: [768,2], 		  	  // items between 600 and 0
            itemsMobile : [479,1], 						  // 1 item on Mobile dwvices
            pagination: true,
            navigation : false,
            autoPlay   : false,

            slideSpeed : 300,
            paginationSpeed : 400,
            });

            // Custom Navigation Events
            $("#featured_slider").find(".next").click(function(){
            owl1.trigger("owl.next");
            })
            $("#featured_slider").find(".prev").click(function(){
            owl1.trigger("owl.prev");
            })

            owl2.owlCarousel({
            items : 4,        		  // items above 1000px browser width
            itemsDesktop : [1199,4], 			  // items between 1000px and 901px
            itemsDesktopSmall : [979,2],  	  // betweem 900px and 601px
            itemsTablet: [768,2], 		  	  // items between 600 and 0
            itemsMobile : [479,1], 						  // 1 item on Mobile dwvices
            pagination: true,
            navigation : false,
            autoPlay   : false,

            slideSpeed : 300,
            paginationSpeed : 400,
            });

            // Custom Navigation Events
            $("#latest_slider").find(".next").click(function(){
            owl2.trigger("owl.next");
            })
            $("#latest_slider").find(".prev").click(function(){
            owl2.trigger("owl.prev");
            })

            var owl3 = $("#latest_posts_slider ul.post-list");

            owl3.owlCarousel({
            items : 3,
            itemsDesktop : 3,
            itemsDesktopSmall : [900,2],
            itemsTablet: [600,1],
            itemsMobile : [479,1],
            pagination: false,
            autoPlay   : false,
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            });

            // Custom Navigation Events
            $("#latest_posts_slider").find(".next").click(function(){
            owl3.trigger("owl.next");
            })
            $("#latest_posts_slider").find(".prev").click(function(){
            owl3.trigger("owl.prev");
            })
            


            $(document).ready(function() {
 
 $("#owl-demo ul").owlCarousel({

    items : 3,
    itemsDesktop : 3,
    itemsDesktopSmall : [900,2],
    itemsTablet: [600,1],
    itemsMobile : [479,1],
    pagination: true,
    autoPlay   : false,
    navigation : false,
    slideSpeed : 300,
    paginationSpeed : 400,

 });

});
        });
    })(jQuery);
				
    </script>