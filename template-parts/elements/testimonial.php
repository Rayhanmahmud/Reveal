<?php 


function testimonial_section(){


vc_map(array(

      'name' => __('Testimonial section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'testimonial_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(
       
          
        array(

            'param_name' => 'title_one',
            'type' => 'textfield',
            'heading'=> 'Header Title',      
        ),
        array(

            'param_name' => 'desc_one',
            'type' => 'textarea',
            'heading'=> 'Header Description',
            
        ),
         array(

                'type' => 'param_group',
                'heading' => 'testi section group',
                'param_name' => 'sec_testi_grp',
                'params' => array(
                     array(

                            'param_name' => 'image_left',
                            'type' => 'attach_image',
                            'heading'=> 'Image left',      
                        ),
                        array(

                            'param_name' => 'testi_desc',
                            'type' => 'textarea',
                            'heading'=> 'Description',
                            
                        ),
                         array(

                            'param_name' => 'image_right',
                            'type' => 'attach_image',
                            'heading'=> 'Image right',      
                        ),
                    array(

                            'param_name' => 'image_one',
                            'type' => 'attach_image',
                            'heading'=> 'Image',      
                        ),
                          array(

                            'param_name' => 'image_title',
                            'type' => 'textfield',
                            'heading'=> 'Name',      
                        ),
                        array(

                            'param_name' => 'image_title_one',
                            'type' => 'textfield',
                            'heading'=> 'Designation',      
                        ),


                )

         )
            
        
      )

  ));



}
add_action("vc_before_init","testimonial_section");



function project_testimonial_section($attr){

 extract(
shortcode_atts(array(

     'sec_testi_grp' => '',
     'title_one' => '',
     'desc_one' => '',
     'image_left' => '',
     'testi_desc' => '',
     'image_right' => '',
     'image_one' => '',
     'image_title' => '',
     'image_title_one' => '',
    
     

 
),$attr)
);

ob_start();
?>


<section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
          <p><?php echo esc_html($desc_one);?></p>
        </div>
        <div class="owl-carousel testimonials-carousel">

              <?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_testi_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>

            <div class="testimonial-item">
              <p>
                                <?php 
  $fec_image_one = wp_get_attachment_image_src($sec_icon_value['image_left'],'full');

  if($fec_image_one ){ ?>

 <img src="<?php echo esc_url($fec_image_one[0]);?>" class="quote-sign-left" alt="">

  <?php
  }
?>
               
    <?php echo esc_html($sec_icon_value['testi_desc']);?>

     <?php 
  $fec_image_two = wp_get_attachment_image_src($sec_icon_value['image_right'],'full');

  if($fec_image_two ){ ?>

 <img src="<?php echo esc_url($fec_image_two[0]);?>" class="quote-sign-right" alt="">
  <?php
  }
?>
               
              </p>
                   <?php 
  $fec_image = wp_get_attachment_image_src($sec_icon_value['image_one'],'full');

  if($fec_image ){ ?>

   <img src="<?php echo esc_url($fec_image[0]);?>" class="testimonial-img" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
              
              <h3><?php echo esc_html($sec_icon_value['image_title']);?></h3>
              <h4><?php echo esc_html($sec_icon_value['image_title_one']);?></h4>
            </div>

            <?php } ?>   

        </div>

      </div>
    </section>




 

<?php

return ob_get_clean();




}
add_shortcode("testimonial_section","project_testimonial_section");




















?>