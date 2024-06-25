<?php

if( !class_exists('One_Slider_Post_type')){
    class One_Slider_Post_Type{
        function __construct(){
            add_action('init', array($this,'create_post_type'));
        }

        public function create_post_type(){
            register_post_type(
                'one-slider', 
                array(
                    'label'=>'Slider',
                    'description'=>'Sliders',
                    'Labels'=> array(
                        'name'=>'Sliders',
                        'singular_name'=>'Slider'
                    
                    ),
                    
                    // description and all parameters https://developer.wordpress.org/reference/functions/register_post_type/#description
                    
                    'public' => true,
                    'supports'=> array('title','editor','thumbnail'),
                    
                    //allow hierarch my posts as child post
                    'hierarchical'=> false,
                    'show_ui' => true,

                    //show my plugin in wp dashboard list
                    'show_in_menu' => false,
                    
                    //position of my plugin on dashboard wp list
                    'menu_position' => 5 ,
                    
                    //show in admin bar on backend
                    'show_in_admin_bar' => true,
                    
                    //show my plugin on menu webpage section 
                    'show_in_nav_menus' => true,
                    'can_export' => true,
                    'has_archive' => false

                   
                )
            );

        }

}
}