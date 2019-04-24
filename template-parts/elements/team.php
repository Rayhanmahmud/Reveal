<?php 


function team_section(){


vc_map(array(

      'name' => __('Team section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'team_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(
       
          
        array(

            'param_name' => 'title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
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

                                'param_name' => 'title_name',
                                'type' => 'textfield',
                                'heading'=> 'Name',      
                            ),
                                array(

                                'param_name' => 'title_desig',
                                'type' => 'textfield',
                                'heading'=> 'Designation',      
                            ),

                )

         )
            
        
      )

  ));



}
add_action("vc_before_init","team_section");



function project_team_section($attr){

 extract(
shortcode_atts(array(

     'sec_img_grp' => '',
     'title_one' => '',
     'image_one' => '',
     'title_name' => '',
     'title_desig' => '',
    
     

 
),$attr)
);

ob_start();
?>


<section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($title_one);?></h2>
        </div>
        <div class="row">
        <?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_img_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic">
                          <?php 
  $fec_image = wp_get_attachment_image_src($sec_icon_value['image_one'],'full');

  if($fec_image ){ ?>

   <img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
          </div>
              <div class="details">
                <h4><?php echo esc_html($sec_icon_value['title_name']);?></h4>
                <span><?php echo esc_html($sec_icon_value['title_desig']);?></span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
  <?php } ?>
         
        </div>

      </div>
    </section>




     



<?php

return ob_get_clean();




}
add_shortcode("team_section","project_team_section");




















?>