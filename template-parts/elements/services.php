<?php 


function services_section(){


vc_map(array(

      'name' => __('Services section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'service_section',
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

            'param_name' => 'title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
    
        array(

            'param_name' => 'desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
    
        array(

            'param_name' => 'desc_three',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'title_four',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
    
        array(

            'param_name' => 'desc_four',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'title_five',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
    
        array(

            'param_name' => 'desc_five',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
        
       
        
       
  
      )

  ));



}
add_action("vc_before_init","services_section");



function project_service_section($attr){

 extract(
shortcode_atts(array(

     'title_one' => '',
     'desc_one' => '',
     'title_two' => '',
     'desc_two' => '',
     'title_three' => '',
     'desc_three' => '',
     'title_four' => '',
     'desc_four' => '',
     'title_five' => '',
     'desc_five' => '',
     

 
),$attr)
);

ob_start();
?>


    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
          <p><?php echo esc_html($desc_one);?></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href=""><?php echo esc_html($title_two);?></a></h4>
              <p class="description"><?php echo esc_html($desc_two);?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href=""><?php echo esc_html($title_three);?></a></h4>
              <p class="description"><?php echo esc_html($desc_three);?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href=""><?php echo esc_html($title_four);?></a></h4>
              <p class="description"><?php echo esc_html($desc_four);?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href=""><?php echo esc_html($title_five);?></a></h4>
              <p class="description"><?php echo esc_html($desc_five);?></p>
            </div>
          </div>

        </div>

      </div>
    </section>


<?php

return ob_get_clean();




}
add_shortcode("service_section","project_service_section");




















?>