<div aria-labelledby="slider-tab" class="tab-pane fade show active" id="slider" role="tabpanel">
<div class="update-post">
<div class="form-body container-fluid">


<h2 class="update-heading">Hero Header</h2>
<div class="row section-edit">


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
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="hero_header_img" value="<?php echo get_option('hero_header_img'); ?>" placeholder="http://">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
     </div>    
    <div class="col-md-12">
        <input type="submit" name="save_options_btn" value="Update Section" class="btn btn-primary">
    </div> 





</div>

<br>

<h2 class="update-heading">Que voulez-vous protéger ?</h2>
<div class="row section-edit">

    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <textarea class="form-control" name="protect_item1" placeholder="Item 1"><?php echo get_option('protect_item1');?></textarea>
            <div class="form-control-focus"></div>
        </div>

          <div class="form-group form-md-line-input">
         
        <?php
        if(get_option('protect_img1')!="")
        echo "<img src='". get_option('protect_img1')."' style='margin:auto;width:100%'/>";
        ?>
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="protect_img1" value="<?php echo get_option('protect_img1'); ?>" placeholder="select image">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
      
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <textarea class="form-control" name="protect_item2" placeholder="Item 2"><?php echo get_option('protect_item2');?></textarea>
            <div class="form-control-focus"></div>
        </div>

          <div class="form-group form-md-line-input">
         
        <?php
        if(get_option('protect_img2')!="")
        echo "<img src='". get_option('protect_img2')."' style='margin:auto;width:100%'/>";
        ?>
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="protect_img2" value="<?php echo get_option('protect_img2'); ?>" placeholder="select image">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
      
    </div>


    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <textarea class="form-control" name="protect_item3" placeholder="Item 3"><?php echo get_option('protect_item3');?></textarea>
            <div class="form-control-focus"></div>
        </div>

          <div class="form-group form-md-line-input">
         
        <?php
        if(get_option('protect_img3')!="")
        echo "<img src='". get_option('protect_img3')."' style='margin:auto;width:100%'/>";
        ?>
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="protect_img3" value="<?php echo get_option('protect_img3'); ?>" placeholder="select image">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
      
    </div>

    <div class="col-md-12">
        <input type="submit" name="save_options_btn" value="Update Section" class="btn btn-primary">
    </div> 

</div>
<br>
<h2 class="update-heading">Who we are</h2>
<div class="row section-edit">


    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class=" control-label">Header</label> 
            <input class="form-control" name="who_header" value=" <?php echo get_option('who_header');?>">
               
        
            <div class="form-control-focus"></div>
        </div>
    
    
        <div class="form-group form-md-line-input">
            <label class=" control-label">Details</label> 
            <textarea class="form-control" name="who_details"><?php echo get_option('who_details');?></textarea>
            <div class="form-control-focus"></div>
        </div>
     
    </div>
  

       <div class="col-md-6">
        <div class="form-group form-md-line-input">
        <?php
        if(get_option('who_img')!="")
        echo "<img src='". get_option('who_img')."' style='margin:auto;width:100%'/>";
        ?>
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="who_img" value="<?php echo get_option('who_img'); ?>" placeholder="Image">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
     </div>    
    <div class="col-md-12">
        <input type="submit" name="save_options_btn" value="Update Section" class="btn btn-primary">
    </div> 





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
    $image_url = $_REQUEST["hero_header_img"];
    

    add_option('hero_intro_heading',$hero_intro_heading,'','yes');
    update_option('hero_intro_heading',$hero_intro_heading);

    add_option('hero_intro_text',$hero_intro_text,'','yes');
    update_option('hero_intro_text',$hero_intro_text);

    add_option('hero_intro_subheading',$hero_intro_subheading,'','yes');
    update_option('hero_intro_subheading',$hero_intro_subheading);

    add_option('hero_header_img',$image_url,'','yes');
    update_option('hero_header_img',$image_url);


    $protect_item1 = $_REQUEST["protect_item1"];
    $protect_item2 = $_REQUEST["protect_item2"];
    $protect_item3 = $_REQUEST["protect_item3"];
    $protect_img1 = $_REQUEST["protect_img1"];
    $protect_img2 = $_REQUEST["protect_img2"];
    $protect_img3 = $_REQUEST["protect_img3"];
    

    add_option('protect_item1',$protect_item1,'','yes');
    update_option('protect_item1',$protect_item1);

    add_option('protect_item2',$protect_item2,'','yes');
    update_option('protect_item2',$protect_item2);

    add_option('protect_item3',$protect_item3,'','yes');
    update_option('protect_item3',$protect_item3);

    add_option('protect_img1',$protect_img1,'','yes');
    update_option('protect_img1',$protect_img1);

    add_option('protect_img2',$protect_img2,'','yes');
    update_option('protect_img2',$protect_img2);

    add_option('protect_img3',$protect_img3,'','yes');
    update_option('protect_img3',$protect_img3);


    $who_header = $_REQUEST["who_header"];
    $who_details = $_REQUEST["who_details"];
    $who_img = $_REQUEST["who_img"];
    

    add_option('who_header',$who_header,'','yes');
    update_option('who_header',$who_header);

    add_option('who_details',$who_details,'','yes');
    update_option('who_details',$who_details);

    add_option('who_img',$who_img,'','yes');
    update_option('who_img',$who_img);



    wp_redirect($_SERVER['HTTP_REFERER']);     

}

?>