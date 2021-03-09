<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

function wpb_custom_new_menu() {
	register_nav_menu('topmenu',__( 'Top Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

function add_menuclass($ulclass) {
return preg_replace('/<a/', '<a class="nav-link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');


// Woocommerce rating stars always
    add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);

    function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }

    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
    }


 // add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

  add_action( 'woocommerce_after_single_product_summary', 'related_products', 9 );
function related_products(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
    //add_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook_new', 10, 2);

}

add_shortcode( 'show-breadcrumb' , 'ss_show_breadcrumb');
function ss_show_breadcrumb() {
    if(function_exists('bcn_display'))
    {
        return bcn_display(true);
    }
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 8 );

function wpdocs_enqueue_custom_admin_style($hook_suffix) {
    if($hook_suffix != 'appearance_page_alcof_options') {
        return;
    }

    // Load your css.
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.min.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );

    // Load your js.
    wp_register_script( 'custom_wp_admin_js', get_template_directory_uri() . '/js/theme.js', false, '1.0.0' );
    wp_enqueue_script( 'custom_wp_admin_js' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );



  add_action( 'um_post_registration_approved_hook', 'remove_my_action', 9 );
function remove_my_action(){
    remove_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook', 10, 2);
    add_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook_new', 10, 2);

}

create_page("Brand"," ","page-templates/brands.php");
function create_page($page_name,$content,$template){
     if(get_page_by_title($page_name)==NULL|| get_post_status( get_page_by_title($page_name) )=="trash") {

         $my_post = array(
          'post_title'    => $page_name,
          'post_content'  =>$content,         
          'post_status'   => 'publish',      
          'post_type'     =>'page',
          'comment_status' =>'closed',
          'page_template'  =>$template        
        );
        $post_id = wp_insert_post( $my_post);
        
        
    }
      
        
 }

add_action('admin_menu', 'customize_homepage');

function customize_homepage() { 

    add_submenu_page('themes.php','Alcof Options', 'Alcof Options','manage_options','alcof_options','alcof_options');
   
}

function alcof_options(){
    ?>


    


    <div class="update-section">
        <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" enctype="multipart/form-data" method="post">
            <div class="options-header">

                <div class="brand">
                    
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="title">
                        <span class="dashicons dashicons-admin-generic"></span>
                        Theme Options
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" name="save_options_btn" value="Save all" class="btn btn-primary">
                </div>
            </div>
            <div class="container-fluid options-body">
                <div class="row">
                    <div aria-orientation="vertical" class="col-md-2 nav flex-column nav-pills" id="alcofTab" role="tablist">
                        <a aria-controls="slider" aria-selected="true" class="nav-link active" data-toggle="tab" href="#slider" id="slider-tab" role="tab">Home Hero</a> 
                        <a aria-controls="services" aria-selected="true" class="nav-link" data-toggle="tab" href="#services" id="services-tab" role="tab">Services</a> 
                        <a aria-controls="about" aria-selected="true" class="nav-link" data-toggle="tab" href="#about" id="about-tab" role="tab">About</a>
                    </div>
                    <div class="col-md-10 tab-content" id="alcofTabOptions">
                        <div aria-labelledby="slider-tab" class="tab-pane fade show active" id="slider" role="tabpanel">
                            <div class="update-post">
                                <div class="form-body container-fluid">


                                    <h2 class="update-heading">Hero Header</h2>
                                    <div class="row section-edit">
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Intro Heading</label> 
                                                <textarea class="form-control" name="hero_intro_heading">
                                                    <?php echo get_option('hero_intro_heading');?>
                                                </textarea>
                                                <div class="form-control-focus"></div>
                                            </div>
                                            <div class='heading-preview-wrapper'>
                                                <?php
                                                    if(get_option('hero_intro_heading')!="")
                                                    echo "<h1 class='big-heading'>". get_option('hero_intro_heading') ."</h1>";
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Intro Text</label> 
                                                <textarea class="form-control" name="hero_intro_text"><?php echo get_option('hero_intro_text');?></textarea>
                                                <div class="form-control-focus"></div>
                                            </div>
                                            <div class='text-preview-wrapper'>
                                                <?php
                                                    if(get_option('hero_intro_text')!="")
                                                    echo "<p>". get_option('hero_intro_text') ."</p>";
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Intro Subheading</label> 
                                                <textarea class="form-control" name="hero_intro_subheading"><?php echo get_option('hero_intro_subheading');?></textarea>
                                                <div class="form-control-focus"></div>
                                            </div>
                                            <div class='text-preview-wrapper'>
                                                <?php
                                                    if(get_option('hero_intro_subheading')!="")
                                                    echo "<p>". get_option('hero_intro_subheading') ."</p>";
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="slider_btn" value="Update Text" class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="row section-edit">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="control-label">Header Image</label> 
                                                <?php
                                                if ( isset( $_POST['submit_image_selector'] ) && isset( $_POST['image_attachment_id'] ) ) :
                                                        update_option( 'media_selector_attachment_id', absint( $_POST['image_attachment_id'] ) );
                                                    endif;
                                                    wp_enqueue_media();
                                                    ?>
                                                    <form method='post'>
                                                        <input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                                                        <input type='hidden' name='image_attachment_id' id='image_attachment_id' value='<?php echo get_option( 'media_selector_attachment_id' ); ?>'>
                                                        <input type="submit" name="submit_image_selector" value="Update Image" class="btn btn-primary">
                                                        
                                                    </form>
                                                <?php $my_saved_attachment_post_id = get_option( 'media_selector_attachment_id', 0 ); ?>
                                                    <script type='text/javascript'>
                                                        jQuery( document ).ready( function( $ ) {
                                                            // Uploading files
                                                            var file_frame;
                                                            var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
                                                            var set_to_post_id = <?php echo $my_saved_attachment_post_id; ?>; // Set this
                                                            jQuery('#upload_image_button').on('click', function( event ){
                                                                event.preventDefault();
                                                                // If the media frame already exists, reopen it.
                                                                if ( file_frame ) {
                                                                    // Set the post ID to what we want
                                                                    file_frame.uploader.uploader.param( 'post_id', set_to_post_id );
                                                                    // Open frame
                                                                    file_frame.open();
                                                                    return;
                                                                } else {
                                                                    // Set the wp.media post id so the uploader grabs the ID we want when initialised
                                                                    wp.media.model.settings.post.id = set_to_post_id;
                                                                }
                                                                // Create the media frame.
                                                                file_frame = wp.media.frames.file_frame = wp.media({
                                                                    title: 'Select a image to upload',
                                                                    button: {
                                                                        text: 'Use this image',
                                                                    },
                                                                    multiple: false // Set to true to allow multiple files to be selected
                                                                });
                                                                // When an image is selected, run a callback.
                                                                file_frame.on( 'select', function() {
                                                                    // We set multiple to false so only get one image from the uploader
                                                                    attachment = file_frame.state().get('selection').first().toJSON();
                                                                    // Do something with attachment.id and/or attachment.url here
                                                                    $( '#image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
                                                                    $( '#image_attachment_id' ).val( attachment.id );
                                                                    // Restore the main post ID
                                                                    wp.media.model.settings.post.id = wp_media_post_id;
                                                                });
                                                                    // Finally, open the modal
                                                                    file_frame.open();
                                                            });
                                                            // Restore the main ID when the add media button is pressed
                                                            jQuery( 'a.add_media' ).on( 'click', function() {
                                                                wp.media.model.settings.post.id = wp_media_post_id;
                                                            });
                                                        });
                                                    </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class='image-preview-wrapper'>
                                                <img id='image-preview' src='<?php echo wp_get_attachment_url( get_option( 'media_selector_attachment_id' ) ); ?>' width='300'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="services-tab" class="tab-pane fade" id="services" role="tabpanel">
                            <div class="update-post">
                                <div class="form-body container-fluid">
                                    <h2 class="update-heading">Services</h2>
                                    <div class="row section-edit">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Intro Heading</label>   
                                                    <textarea name="intro_1" class="form-control" rows="5" autocomplete="off">
                                                        <?php echo get_option('intro_1');?>
                                                    </textarea> 
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group form-md-line-input">
                                                    <label class=" control-label">Intro Heading</label>   
                                                        <textarea name="intro_2" class="form-control" rows="5" autocomplete="off">
                                                            <?php echo get_option('intro_2');?>
                                                        </textarea> 
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group form-md-line-input">
                                                    <label class=" control-label">Intro Heading</label>   
                                                        <textarea name="intro_3" class="form-control" rows="5" autocomplete="off">
                                                            <?php echo get_option('intro_3');?>
                                                        </textarea> 
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="about-tab" class="tab-pane fade" id="about" role="tabpanel">
                            <div class="update-post">
                                <div class="form-body container-fluid">
                                    <h2 class="update-heading">About us</h2>
                                    <div class="row section-edit">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class="control-label">About Image</label> 
                                                <?php
                                                if ( isset( $_POST['about_us_image_selector'] ) && isset( $_POST['about_us_image_attachment_id'] ) ) :
                                                        update_option( 'about_us_attachment_id', absint( $_POST['about_us_image_attachment_id'] ) );
                                                    endif;
                                                    wp_enqueue_media();
                                                    ?>
                                                    <form method='post'>
                                                        <input id="about_us_upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                                                        <input type='hidden' name='about_us_image_attachment_id' id='about_us_image_attachment_id' value='<?php echo get_option( 'about_us_attachment_id' ); ?>'>
                                                        <input type="submit" name="about_us_image_selector" value="Update Image" class="btn btn-primary">
                                                        
                                                    </form>
                                                <?php $about_image = get_option( 'about_us_attachment_id', 0 ); ?>
                                                    <script type='text/javascript'>
                                                        jQuery( document ).ready( function( $ ) {
                                                            // Uploading files
                                                            var file_frame;
                                                            var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
                                                            var set_to_post_id = <?php echo $about_image; ?>; // Set this
                                                            jQuery('#about_us_upload_image_button').on('click', function( event ){
                                                                event.preventDefault();
                                                                // If the media frame already exists, reopen it.
                                                                if ( file_frame ) {
                                                                    // Set the post ID to what we want
                                                                    file_frame.uploader.uploader.param( 'post_id', set_to_post_id );
                                                                    // Open frame
                                                                    file_frame.open();
                                                                    return;
                                                                } else {
                                                                    // Set the wp.media post id so the uploader grabs the ID we want when initialised
                                                                    wp.media.model.settings.post.id = set_to_post_id;
                                                                }
                                                                // Create the media frame.
                                                                file_frame = wp.media.frames.file_frame = wp.media({
                                                                    title: 'Select a image to upload',
                                                                    button: {
                                                                        text: 'Use this image',
                                                                    },
                                                                    multiple: false // Set to true to allow multiple files to be selected
                                                                });
                                                                // When an image is selected, run a callback.
                                                                file_frame.on( 'select', function() {
                                                                    // We set multiple to false so only get one image from the uploader
                                                                    attachment = file_frame.state().get('selection').first().toJSON();
                                                                    // Do something with attachment.id and/or attachment.url here
                                                                    $( '#about-image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
                                                                    $( '#about_us_image_attachment_id' ).val( attachment.id );
                                                                    // Restore the main post ID
                                                                    wp.media.model.settings.post.id = wp_media_post_id;
                                                                });
                                                                    // Finally, open the modal
                                                                    file_frame.open();
                                                            });
                                                            // Restore the main ID when the add media button is pressed
                                                            jQuery( 'a.add_media' ).on( 'click', function() {
                                                                wp.media.model.settings.post.id = wp_media_post_id;
                                                            });
                                                        });
                                                    </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class='image-preview-wrapper'>
                                                <img id='about-image-preview' src='<?php echo wp_get_attachment_url( get_option( 'about_us_attachment_id' ) ); ?>' width='300'>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Header</label> <input autocomplete="off" class="form-control" name="who_header" type="text" value="<?php echo get_option('who_header');?>">
                                                <div class="form-control-focus"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <label class=" control-label">Details</label> 
                                                    <textarea class="form-control" name="who_details">       
                                                        <?php echo get_option('who_details');?>
                                                    </textarea>
                                                <div class="form-control-focus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    


<?php


    if(isset($_REQUEST["save_options_btn"]))
    {
    
        $hero_intro_heading = $_REQUEST["hero_intro_heading"];
        $hero_intro_subheading = $_REQUEST["hero_intro_subheading"];
        $hero_intro_text = $_REQUEST["hero_intro_text"];

        

        add_option('hero_intro_heading',$hero_intro_heading,'','yes');
        update_option('hero_intro_heading',$hero_intro_heading);

        add_option('hero_intro_text',$hero_intro_text,'','yes');
        update_option('hero_intro_text',$hero_intro_text);

        add_option('hero_intro_subheading',$hero_intro_subheading,'','yes');
        update_option('hero_intro_subheading',$hero_intro_subheading);

        $intro_1 = $_REQUEST["intro_1"];
        $intro_2 = $_REQUEST["intro_2"];
        $intro_3 = $_REQUEST["intro_3"];
        $intro_4 = $_REQUEST["intro_4"];
        

        add_option('intro_1',$intro_1,'','yes');
        update_option('intro_1',$intro_1);

        add_option('intro_2',$intro_2,'','yes');
        update_option('intro_2',$intro_2);

        add_option('intro_3',$intro_3,'','yes');
        update_option('intro_3',$intro_3);

        add_option('intro_4',$intro_4,'','yes');
        update_option('intro_4',$intro_4);

        $who_header = $_REQUEST["who_header"];
        $who_details = $_REQUEST["who_details"];
        

        add_option('who_header',$who_header,'','yes');
        update_option('who_header',$who_header);

        add_option('who_details',$who_details,'','yes');
        update_option('who_details',$who_details);
               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 

    }


}



function services(){
    ?>


    <div class="update-post">
        <div class="form-body container-fluid">
            <h2 class="update-heading"><span class="dashicons dashicons-admin-generic"></span>Hero Header</h2>
            <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" enctype="multipart/form-data" method="post">
                <div class="row section-edit">
                    <div class="col-md-4">
                            <div class="form-group form-md-line-input">
                                <label class=" control-label">Intro Heading</label>   
                                    <textarea name="intro_1" class="form-control" rows="5" autocomplete="off">
                                        <?php echo get_option('intro_1');?>
                                    </textarea> 
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group form-md-line-input">
                                <label class=" control-label">Intro Heading</label>   
                                    <textarea name="intro_1" class="form-control" rows="5" autocomplete="off">
                                        <?php echo get_option('intro_2');?>
                                    </textarea> 
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group form-md-line-input">
                                <label class=" control-label">Intro Heading</label>   
                                    <textarea name="intro_1" class="form-control" rows="5" autocomplete="off">
                                        <?php echo get_option('intro_3');?>
                                    </textarea> 
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <input type="submit" name="intro_btn" value="Update Text" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php

    if(isset($_REQUEST["intro_btn"]))
    {

        $intro_1 = $_REQUEST["intro_1"];
        $intro_2 = $_REQUEST["intro_2"];
        $intro_3 = $_REQUEST["intro_3"];
        $intro_4 = $_REQUEST["intro_4"];
        

        add_option('intro_1',$intro_1,'','yes');
        update_option('intro_1',$intro_1);

        add_option('intro_2',$intro_2,'','yes');
        update_option('intro_2',$intro_2);

        add_option('intro_3',$intro_3,'','yes');
        update_option('intro_3',$intro_3);

        add_option('intro_4',$intro_4,'','yes');
        update_option('intro_4',$intro_4);

    }

}

function brands(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 

</style>


            
<div class="postbox">
<div class="form-body row">

 <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
        
<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 1</legend>
          <div class="form-group form-md-line-input">
        <label class=" control-label">Brand Name</label>

        <input type="text" name="brand_header1" value="<?php echo get_option('brand_header1');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_1')!="")
        echo "<img src='". get_option('brand_img_1')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_1" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>

 

</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 2</legend>
           <div class="form-group form-md-line-input">
        <label class=" control-label">Brand Name</label>

        <input type="text" name="brand_header2" value="<?php echo get_option('brand_header2');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_2')!="")
        echo "<img src='". get_option('brand_img_2')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_2" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
    

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 3</legend>
           <div class="form-group form-md-line-input">
        <label class=" control-label">Brand Name</label>

        <input type="text" name="brand_header3" value="<?php echo get_option('brand_header3');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_3')!="")
        echo "<img src='". get_option('brand_img_3')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_3" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 4</legend>
           <div class="form-group form-md-line-input">
        <label class=" control-label">Brand Name</label>

        <input type="text" name="brand_header4" value="<?php echo get_option('brand_header4');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_4')!="")
        echo "<img src='". get_option('brand_img_4')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_4" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 5</legend>
           <div class="form-group form-md-line-input">
        <label class=" control-label">Brand Name</label>

        <input type="text" name="brand_header5" value="<?php echo get_option('brand_header5');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_5')!="")
        echo "<img src='". get_option('brand_img_5')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_5" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>



        </div>
        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="brand_btn">Submit</button>
        </div>

</form>

</div>


<?php


    if(isset($_REQUEST["brand_btn"]))
    {               
        $brand_header1 = $_REQUEST["brand_header1"];
        $brand_header2 = $_REQUEST["brand_header2"];
        $brand_header3 = $_REQUEST["brand_header3"];
        $brand_header4 = $_REQUEST["brand_header4"];
        $brand_header5 = $_REQUEST["brand_header5"];
       
        

        add_option('brand_header1',$brand_header1,'','yes');
        update_option('brand_header1',$brand_header1);

        add_option('brand_header2',$brand_header2,'','yes');
        update_option('brand_header2',$brand_header2);

        add_option('brand_header3',$brand_header3,'','yes');
        update_option('brand_header3',$brand_header3);

        add_option('brand_header4',$brand_header4,'','yes');
        update_option('brand_header4',$brand_header4);

        add_option('brand_header5',$brand_header5,'','yes');
        update_option('brand_header5',$brand_header5);

      


        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
              
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error']==0) {  
                        $attach_id = media_handle_upload( $file, "" );
                        $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                        $image_url = $image_url_array[0];
                         
                        add_option('brand_img_'.$i,$image_url,'','yes');
                        update_option('brand_img_'.$i,$image_url);
                    }
                 
                   $i++;
                }            

            }

    }


}
function who_we_are(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 

</style>


            
<div class="postbox">
	<div class="form-body row">
        <div class="col-md-4">
            <fieldset>
                <legend>Image</legend>
                <div class="form-group form-md-line-input">
                    <label class="control-label">Image</label> <?php
                            if(get_option('who_img_1')!="")
                            echo "<img src='". get_option('who_img_1')."' style='margin:auto; width:100%'/>";
                            ?> <input autocomplete="off" class="form-control" name="who_img_1" type="file" value="">
                    <div class="form-control-focus"></div>
                </div>
            </fieldset>
        </div>
        <div class="col-md-4">
            <fieldset>
                <legend>Header</legend>
                <div class="form-group form-md-line-input">
                    <label class=" control-label">Header</label> <input autocomplete="off" class="form-control" name="who_header" type="text" value="<?php echo get_option('who_header');?>">
                    <div class="form-control-focus"></div>
                </div>
            </fieldset>
        </div>
        <div class="col-md-4">
            <fieldset>
                <legend>Details</legend>
                <div class="form-group form-md-line-input">
                    <label class=" control-label">Details</label> 
                    <textarea class="form-control" name="who_details">       <?php echo get_option('who_details');?></textarea>
                    <div class="form-control-focus"></div>
                </div>
            </fieldset>
        </div>
	</div>
</div>


<?php


    if(isset($_REQUEST["who_btn"]))
    {
    
        $who_header = $_REQUEST["who_header"];
        $who_details = $_REQUEST["who_details"];
        

        add_option('who_header',$who_header,'','yes');
        update_option('who_header',$who_header);

        add_option('who_details',$who_details,'','yes');
        update_option('who_details',$who_details);
               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
              
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error']==0) {  
                        $attach_id = media_handle_upload( $file, "" );
                        $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                        $image_url = $image_url_array[0];
                         
                        add_option('who_img_'.$i,$image_url,'','yes');
                        update_option('who_img_'.$i,$image_url);
                    }
                 
                   $i++;
                }            

            }

    }


}


add_filter('get_comment_author', 'my_comment_author', 10, 1);
function my_comment_author( $author = '' ) {
// Get the comment ID from WP_Query
$comment = get_comment( $comment_ID );
if (!empty($comment->comment_author) ) {
if($comment->user_id > 0){
$user=get_userdata($comment->user_id);
$author=$user->first_name.' '.substr($user->last_name,0,1).'.'; // this is the actual line you want to change
} else {
$author = __('Anonymous');
}
} else {
$author = $comment->comment_author;
}
return $author;
}
