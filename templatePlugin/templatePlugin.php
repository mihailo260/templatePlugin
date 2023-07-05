<?php
/*
Plugin Name: Page Template Plugin
Version: 1.0
*/

register_activation_hook(__FILE__, 'my_page_template_plugin_activate');

function my_page_template_plugin_activate() {
   $page_template = '<?php
   /*
   Template Name: DimitriTemplate
   */
   get_header(); ?>
   <body>
   <script>
      window.addEventListener(\'load\',function(){
         alert("Hello! I am Custom Template");
      })
   </script>
       
   </body>
   <?php get_footer(); ?>';

   $template_path = get_template_directory() . '/custom-page-template.php';
   file_put_contents($template_path, $page_template);
   // if (!file_exists($template_path)) {
   //    file_put_contents($template_path, $page_template);
   // }
}
