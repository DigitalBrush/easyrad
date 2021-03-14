
<?php
function alcof_options(){
?> 


<div class="update-section">
    <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" enctype="multipart/form-data" method="post" id="frm_options">
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
                    <a aria-controls="location" aria-selected="true" class="nav-link" data-toggle="tab" href="#location" id="location-tab" role="tab">Locations</a>
                </div>
                <div class="col-md-10 tab-content" id="alcofTabOptions">
                    <?php include "tabs/homepage.php"; ?>         
                    <?php include "tabs/services.php"; ?>
                    <?php include "tabs/about.php"; ?>
                    <?php include "tabs/locations.php"; ?>
         
                </div>
            </div>
        </div>
    </form>
</div>






<?php





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

