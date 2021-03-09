      
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