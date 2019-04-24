<?php 

//require_once get_template_directory().'/inc/tgm.php';
require_once get_template_directory().'/inc/setup.php';



require_once get_template_directory().'/inc/enqueue.php';




require_once get_template_directory().'/template-parts/theme-option.php';



if(!class_exists('ReduxFramework')&& file_exists(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php')){
  require_once(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php');
}

if(!isset($redux_demo) && file_exists(dirname(__FILE__).'/redux-framework/sample/function-config.php')){
require_once(dirname(__FILE__).'/redux-framework/sample/function-config.php');
}






?>