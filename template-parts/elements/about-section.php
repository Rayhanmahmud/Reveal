<?php 


function about_section(){


vc_map(array(

      'name' => __('About section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'about_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(
           array(

            'param_name' => 'image_one',
            'type' => 'attach_image',
            'heading'=> 'Image',      
        ),
          
        array(

            'param_name' => 'title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        array(

            'param_name' => 'desc_one',
            'type' => 'textarea',
            'heading'=> 'Description',
            
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

            'param_name' => 'desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
        
       
  
      )

  ));



}
add_action("vc_before_init","about_section");



function project_about_section($attr){

 extract(
shortcode_atts(array(

     'image_one' => '',
     'title_one' => '',
     'desc_one' => '',
     'title_two' => '',
     'title_three' => '',
     'desc_two' => '',
     

 
),$attr)
);

ob_start();
?>


     <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
          <?php 
  $sec_image = wp_get_attachment_image_src($image_one,'full');

  if($sec_image ){ ?>

      <img src="<?php echo esc_url($sec_image[0]);?>" alt="">

  <?php
  }
?>
          
          </div>

          <div class="col-lg-6 content">
            <h2><?php echo esc_html($title_one);?></h2>
            <h3><?php echo esc_html($desc_one);?></h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> <?php echo esc_html($title_two);?></li>
              <li><i class="ion-android-checkmark-circle"></i> <?php echo esc_html($title_three);?></li>
              <li><i class="ion-android-checkmark-circle"></i> <?php echo esc_html($desc_two);?></li>
            </ul>

          </div>
        </div>

      </div>
    </section>



<?php

return ob_get_clean();




}
add_shortcode("about_section","project_about_section");




















?>