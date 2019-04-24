<?php 


function banner_section(){


vc_map(array(

      'name' => __('Banner section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'banner_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(
          
        array(

            'param_name' => 'title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        
        array(

            'param_name' => 'title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        
        array(

            'param_name' => 'title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        
        array(

            'param_name' => 'title_four',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        
        array(

            'param_name' => 'title_five',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        
        array(

            'param_name' => 'image_one',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'image_two',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'image_three',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'image_four',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'image_five',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
     

   

  
      )

  ));



}
add_action("vc_before_init","banner_section");



function project_banner_section($attr){

 extract(
shortcode_atts(array(

     'title_one' => '',
     'title_two' => '',
     'title_three' => '',
     'title_four' => '',
     'title_five' => '',
     'image_one' => '',
     'image_two' => '',
     'image_three' => '',
     'image_four' => '',
     'image_five' => '',
     

 
),$attr)
);

ob_start();
?>


<section id="intro">

    <div class="intro-content">
      <h2><?php echo esc_html($title_one);?> <span><?php echo esc_html($title_two);?></span><br><?php echo esc_html($title_three);?></h2>
      <div>
        <a href="#about" class="btn-get-started scrollto"><?php echo esc_html($title_four);?></a>
        <a href="#portfolio" class="btn-projects scrollto"><?php echo esc_html($title_five);?></a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item">
      
        <?php 
  $sec_image = wp_get_attachment_image_src($image_one,'full');

  if($sec_image ){ ?>

   <img src="<?php echo esc_url($sec_image[0]);?>">

  <?php
  }
?>
      
       </div>

           <div class="item">
      
        <?php 
  $sec_image_tw = wp_get_attachment_image_src($title_two,'full');

  if($sec_image_tw ){ ?>

   <img src="<?php echo esc_url($sec_image_tw[0]);?>">

  <?php
  }
?>
      
       </div>
      

          <div class="item">
      
        <?php 
  $sec_image_th = wp_get_attachment_image_src($image_three,'full');

  if($sec_image_th ){ ?>

   <img src="<?php echo esc_url($sec_image_th[0]);?>">

  <?php
  }
?>
      
       </div>
      
          <div class="item">
      
        <?php 
  $sec_image_fr = wp_get_attachment_image_src($image_four,'full');

  if($sec_image_fr ){ ?>

   <img src="<?php echo esc_url($sec_image_fr[0]);?>">

  <?php
  }
?>
      
       </div>
      
          <div class="item">
      
        <?php 
  $sec_image_fv = wp_get_attachment_image_src($image_five,'full');

  if($sec_image_fv ){ ?>

   <img src="<?php echo esc_url($sec_image_fv[0]);?>">

  <?php
  }
?>
      
       </div>
      
      
    </div>

  </section>



<?php

return ob_get_clean();




}
add_shortcode("banner_section","project_banner_section");




















?>