<?php 


function action_section(){


vc_map(array(

      'name' => __('Action section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'action_section',
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

            'param_name' => 'button_title',
            'type' => 'textfield',
            'heading'=> 'Button title',      
        ),
        
            
        
      )

  ));



}
add_action("vc_before_init","action_section");



function project_action_section($attr){

 extract(
shortcode_atts(array(

     'title_one' => '',
     'desc_one' => '',
     'button_title' => '',   

 
),$attr)
);

ob_start();
?>

 <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"><?php echo esc_html($title_one);?></h3>
            <p class="cta-text"> <?php echo esc_html($desc_one);?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#"><?php echo esc_html($button_title);?></a>
          </div>
        </div>

      </div>
    </section>
     


<?php

return ob_get_clean();




}
add_shortcode("action_section","project_action_section");




















?>