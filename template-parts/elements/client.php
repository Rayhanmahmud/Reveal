<?php 


function clients_section(){


vc_map(array(

      'name' => __('Clients section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'client_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(
       
          
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

                'type' => 'param_group',
                'heading' => 'img section group',
                'param_name' => 'sec_img_grp',
                'params' => array(
                    array(

                            'param_name' => 'image_one',
                            'type' => 'attach_image',
                            'heading'=> 'Image',      
                        ),

                )

         )
            
        
      )

  ));



}
add_action("vc_before_init","clients_section");



function project_client_section($attr){

 extract(
shortcode_atts(array(

     'sec_img_grp' => '',
     'title_one' => '',
     'desc_one' => '',
     'image_one' => '',
    
     

 
),$attr)
);

ob_start();
?>


     <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
          <p><?php echo esc_html($desc_one);?></p>
        </div>

        <div class="owl-carousel clients-carousel">
        <?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_img_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>
         
            <?php 
  $fec_image = wp_get_attachment_image_src($sec_icon_value['image_one'],'full');

  if($fec_image ){ ?>

    <img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">
   

  <?php
  }
?>
  <?php } ?>
   
        </div>

      
     

      </div>
    </section>



<?php

return ob_get_clean();




}
add_shortcode("client_section","project_client_section");




















?>