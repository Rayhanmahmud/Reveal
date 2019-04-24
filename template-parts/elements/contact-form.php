<?php


function section_shortcode(){


vc_map(array(

      'name' => __('Shortcode','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_sortcode',
      'category' => 'project',
      'icon' => 'fas fa-angry',
      'params' => array(
          array(

            'param_name' => 'content',
            'type' => 'textarea',
            'heading'=> 'Contact form 7',      
        ),
      )
)
);
}
add_action("vc_before_init","section_shortcode");

function project_section_sort($attr,$content=null){

 extract(
shortcode_atts(array(


 
 
),$attr)
);

ob_start();
?>




<div class="container">
        <div class="form">
          <div id="sendmessage"></div>
          <div id="errormessage"></div>

         <?php 
             
             
             include_once( ABSPATH . 'wp-admin/includes/plugin.php');

     
             if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
                  echo do_shortcode($content);

             }
             
             
             
             ?>
   </div>
        </div>

  <?php

return ob_get_clean();




}
add_shortcode("section_sortcode","project_section_sort");