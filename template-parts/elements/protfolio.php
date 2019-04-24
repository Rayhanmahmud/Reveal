<?php 


function protfolio_section(){


vc_map(array(

      'name' => __('Protfolio section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'protfolio_section',
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
            'heading'=> 'Description',
            
        ),
         array(

                'type' => 'param_group',
                'heading' => 'img section group',
                'param_name' => 'sec_img_grp',
                'params' => array(
                    array(

                            'param_name' => 'image_one',
                            'type' => 'attach_image',
                            'heading'=> 'Image',      
                        ),
                          array(

                            'param_name' => 'image_title',
                            'type' => 'textfield',
                            'heading'=> 'Image Title',      
                        ),

                )

         )
            
        
      )

  ));



}
add_action("vc_before_init","protfolio_section");



function project_protfolio_section($attr){

 extract(
shortcode_atts(array(

     'sec_img_grp' => '',
     'title_one' => '',
     'desc_one' => '',
     'image_one' => '',
     'image_title' => '',
    
     

 
),$attr)
);

ob_start();
?>


 <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
          <p><?php echo esc_html($desc_one);?></p>
        </div>
      </div>



      <div class="container-fluid">
        <div class="row no-gutters">

               <?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_img_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                  
            <?php 
  $fec_image = wp_get_attachment_image_src($sec_icon_value['image_one'],'full');

  if($fec_image ){ ?>

    <a href="<?php echo esc_url($fec_image[0]);?>" class="portfolio-popup">
        <img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
             
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"><?php echo esc_html($sec_icon_value['image_title']);?></h2></div>
                </div>
              </a>
            </div>
          </div>

          <?php } ?>
         

     

          

        </div>

      </div>
    </section>




<?php

return ob_get_clean();




}
add_shortcode("protfolio_section","project_protfolio_section");




















?>