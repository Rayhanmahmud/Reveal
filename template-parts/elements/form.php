<?php 


function form_section(){


vc_map(array(

      'name' => __('Contact section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'form_section',
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

            'param_name' => 'title_two',
            'type' => 'textfield',
            'heading'=> 'Address Title',      
        ),
             array(

            'param_name' => 'title_three',
            'type' => 'textfield',
            'heading'=> 'Address',      
        ),
             array(

            'param_name' => 'title_four',
            'type' => 'textfield',
            'heading'=> 'Phone number',      
        ),
             array(

            'param_name' => 'title_five',
            'type' => 'textfield',
            'heading'=> 'Number',      
        ),
             array(

            'param_name' => 'title_six',
            'type' => 'textfield',
            'heading'=> 'Email Title',      
        ),
             array(

            'param_name' => 'title_seven',
            'type' => 'textfield',
            'heading'=> 'Email',      
        ),
    
    
            
        
      )

  ));



}
add_action("vc_before_init","form_section");



function project_form_section($attr,$content=null){

 extract(
shortcode_atts(array(

     'title_one' => '',
     'desc_one' => '',
     'title_two' => '',
     'title_three' => '',
     'title_four' => '',
     'title_five' => '',
     'title_six' => '',
     'title_seven' => '',
     
    
     

 
),$attr)
);

ob_start();
?>



<section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
          <p><?php echo esc_html($desc_one);?></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3><?php echo esc_html($title_two);?></h3>
              <address><?php echo esc_html($title_three);?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3><?php echo esc_html($title_four);?></h3>
              <p><a href="tel:+155895548855"><?php echo esc_html($title_five);?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3><?php echo esc_html($title_six);?></h3>
              <p><a href="mailto:info@example.com"><?php echo esc_html($title_seven);?></a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      

      </div>
    </section>
     



<?php

return ob_get_clean();




}
add_shortcode("form_section","project_form_section");




















?>