<?php




function mamurjor_enqueue(){


wp_enqueue_style("mamurjor_text","https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700");

wp_enqueue_style("project-touch",get_theme_file_uri("/assets/img/apple-touch-icon.png"),null,"2.0");
wp_enqueue_style("project-favicon",get_theme_file_uri("/assets/img/favicon.png"),null,"2.0");
wp_enqueue_style("project-bootstrap",get_theme_file_uri("/assets/lib/bootstrap/css/bootstrap.min.css"),null,"2.0");
wp_enqueue_style("project-awesome",get_theme_file_uri("/assets/lib/font-awesome/css/font-awesome.min.css"),null,"2.0");
wp_enqueue_style("project-animate",get_theme_file_uri("/assets/lib/animate/animate.min.css"),null,"2.0");
wp_enqueue_style("project-ionicons",get_theme_file_uri("/assets/lib/ionicons/css/ionicons.min.css"),null,"2.0");
wp_enqueue_style("project-owlcarousel",get_theme_file_uri("/assets/lib/owlcarousel/assets/owl.carousel.min.css"),null,"2.0");
wp_enqueue_style("project-magnific",get_theme_file_uri("/assets/lib/magnific-popup/magnific-popup.css"),null,"2.0");
wp_enqueue_style("project-ioni",get_theme_file_uri("/assets/lib/ionicons/css/ionicons.min.css"),null,"2.0");
wp_enqueue_style("project-style-main",get_theme_file_uri("/assets/css/style.css"),null,"2.0");


wp_enqueue_style("project-style",get_stylesheet_uri());





wp_enqueue_script("project-jquery",get_theme_file_uri("/assets/lib/jquery/jquery.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-migrate",get_theme_file_uri("/assets/lib/jquery/jquery-migrate.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-bundle",get_theme_file_uri("/assets/lib/bootstrap/js/bootstrap.bundle.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-easing",get_theme_file_uri("/assets/lib/easing/easing.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-superfish",get_theme_file_uri("/assets/lib/superfish/hoverIntent.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-superfish-main",get_theme_file_uri("/assets/lib/superfish/superfish.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-wow",get_theme_file_uri("/assets/lib/wow/wow.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-owlcarousel-js",get_theme_file_uri("/assets/lib/owlcarousel/owl.carousel.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-magnific-js",get_theme_file_uri("/assets/lib/magnific-popup/magnific-popup.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-sticky",get_theme_file_uri("/assets/lib/sticky/sticky.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-contactform",get_theme_file_uri("/assets/contactform/contactform.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-main",get_theme_file_uri("/assets/js/main.js"),array('jquery'),null,"2.0");


}
add_action("wp_enqueue_scripts","mamurjor_enqueue");









?>