<div aria-labelledby="slider-tab" class="tab-pane fade show active" id="slider" role="tabpanel">
<div class="update-post">
<div class="form-body container-fluid">


<h2 class="update-heading">Hero Header</h2>
<div class="row section-edit">

     <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class=" control-label">Intro Heading</label> 
            <input class="form-control" name="hero_intro_heading" value=" <?php echo get_option('hero_intro_heading');?>">
               
        
            <div class="form-control-focus"></div>
        </div>
    
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class=" control-label">Intro Text</label> 
            <textarea class="form-control" name="hero_intro_text"><?php echo get_option('hero_intro_text');?></textarea>
            <div class="form-control-focus"></div>
        </div>
     
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class=" control-label">Intro Subheading</label> 
            <textarea class="form-control" name="hero_intro_subheading"><?php echo get_option('hero_intro_subheading');?></textarea>
            <div class="form-control-focus"></div>
        </div>
      
    </div>

       <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class="control-label"> Header Image</label>
        <?php
        if(get_option('hero_header_img')!="")
        echo "<img src='". get_option('hero_header_img')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="hero_header_img" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div> 
         
             
     
         
    </div>



    <div class="col-md-12">
        <input type="submit" name="save_options_btn" value="Update Header" class="btn btn-primary">
    </div>

</form>
</div>

</div>
</div>
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
                         
                        add_option('hero_header_img',$image_url,'','yes');
                        update_option('hero_header_img',$image_url);
                    }
                 
                   $i++;
                }            

            }

}

?>