<div aria-labelledby="services-tab" class="tab-pane fade" id="services" role="tabpanel">

<div class="update-post">
<div class="form-body container-fluid">


<h2 class="update-heading">Top Slider</h2>
<div class="row section-edit">

    <div class="col-md-12">

        <div class="form-group form-md-line-input">
            <label class=" control-label">How many posts will this section have?</label> 
            <input class="process_custom_images" name="service_num" value=" <?php echo get_option('service_num');?>"  onChange="field_count()">
               
     <hr>   
        </div>
   <script>
      function field_count(){
       jQuery('#frm_options').submit();
      } 

   </script>

    </div>  

<?php 

$num=get_option('service_num'); 

for($i=1;$i<$num;$i++):?>

    <div class="col-md-6">
        <div class="form-group form-md-line-input">
            <label class=" control-label">Heading</label> 
            <input class="form-control" name="sh<?php echo $i;?>" value=" <?php echo get_option('sh'.$i);?>" size='4'>
               
        
            <div class="form-control-focus"></div>
        </div>

         <div class="form-group form-md-line-input">
            <label class=" control-label">Subheading</label> 
            <textarea class="form-control" name="ssh<?php echo $i;?>"><?php echo get_option('ssh'.$i);?></textarea>
            <div class="form-control-focus"></div>
        </div>

  
        <div class="form-group form-md-line-input">
            <label class=" control-label">Description</label> 
            <textarea class="form-control" name="sd<?php echo $i;?>"><?php echo get_option('sd'.$i);?></textarea>
            <div class="form-control-focus"></div>
        </div>
  
       
      
    </div>

       <div class="col-md-6">
        <div class="form-group form-md-line-input">
            
        <?php
        if(get_option('s_img'.$i)!="")
        echo "<img src='". get_option('s_img'.$i)."' style='margin:auto;width:100%'/>";
        ?>
    
    <input type="text" class="process_custom_images" id="process_custom_images" name="s_img<?php echo $i;?>" value="<?php echo get_option('s_img'.$i); ?>" placeholder="select image">
    <button class="set_custom_images button" >Select Image</button>
          
        </div> 
     </div>
   
     <div class="col-md-12"><br><hr><br></div>   


 <?php endfor; ?>  

</div>






</div>
</div>
</div>

<?php

if(isset($_REQUEST["service_num"]))
{
   $service_num=$_REQUEST["service_num"];
    add_option('service_num',$service_num,'','yes');
    update_option('service_num',$service_num);

    wp_redirect($_SERVER['HTTP_REFERER']);
}


if(isset($_REQUEST["save_options_btn"]))
{
  

   $num=get_option('service_num'); 

   for($i=1;$i<$num;$i++){

    $sh{$i}= $_REQUEST["sh{$i}"];
    $ssh{$i}= $_REQUEST["ssh{$i}"];
    $sd{$i}= $_REQUEST["sd{$i}"];
    $s_img{$i}= $_REQUEST["s_img{$i}"];




    add_option('sh'.$i,$sh{$i},'','yes');
    update_option('sh'.$i,$sh{$i});

    add_option('ssh'.$i,$ssh{$i},'','yes');
    update_option('ssh'.$i,$ssh{$i});

    add_option('sd'.$i,$sd{$i},'','yes');
    update_option('sd'.$i,$sd{$i});

    add_option('s_img'.$i,$s_img{$i},'','yes');
    update_option('s_img'.$i,$s_img{$i});

    wp_redirect($_SERVER['HTTP_REFERER']);

   }     

}

?>