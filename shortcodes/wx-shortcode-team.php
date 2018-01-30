<?php

function testiminial_details( $atts,$content ) {
    
    $a = shortcode_atts( array(
        'dropdown_attr' => 'left-style',
        'image_attr' => 'attach_image',
        'text_attr' => 'insert name',
        'text_attr2' => 'insert position', 
        'textarea_html' => 'Insert Description',
        'text_attr3' => 'insert email ',
        'text_attr4' => 'insert phone',
        'text_attr5' => 'insert mobile',
        'text_attr6' => 'insert facebook',
        'text_attr7' => 'insert twitter',
        'text_attr8' => 'insert google +',
    ), $atts );
    
    
    $dropdown_value = $a['dropdown_attr'];
    $image_id = $a['image_attr'];
    $image = wp_get_attachment_image($image_id, 'full');
    $text_value = $a['text_attr'];
    $text_value2 = $a['text_attr2'];
    $text_value3 = $a['text_attr3'];
    $textarea_html = $a['textarea_html'];
    $text_value4 = $a['text_attr4'];
    $text_value5 = $a['text_attr5'];
    $text_value6 = $a['text_attr6'];
    $text_value7 = $a['text_attr7'];
    $text_value8 = $a['text_attr8'];
    
    if(!empty($text_value3)):
        $text_value3_output = '
            <li> <span> <i class="fa fa-envelope" aria-hidden="true"></i> </span> '. $text_value3 .' </li>
        ';
    endif;
    
    
    if(!empty($text_value4)):
        $text_value4_output = '
            <li> <span> <i class="fa fa-phone" aria-hidden="true"></i> </span>'. $text_value4 .' </li>
        ';
    endif;
    
    if(!empty($text_value5)):
        $text_value5_output = '
            <li class="mobile-icons"> <span> <i class="fa fa-mobile" aria-hidden="true"></i> </span> '. $text_value5 .' </li>
        ';
    endif;
    
    if(!empty($text_value6)):
        $text_value6_output = '
                <li> <a href="'. $text_value6 .'"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
        ';
    endif;
    
    if(!empty($text_value7)):
        $text_value7_output = '
                <li> <a href="'. $text_value7 .'"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
        ';
    endif;
    
    if(!empty($text_value8)):
        $text_value8_output = '
                <li> <a href="'. $text_value8 .'"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </li>
        ';
    endif;
    
        
        $html .= '<div class="wx-testimonial-details '.$dropdown_value.' ">';
    
        $html .='
            <div class="featured_testimonial">
               '. $image .'
            </div>
            <div class="testimonial-contents">
                    <div>
                        <ul class="team-details">
                            <li> '. $text_value .' </li>
                            <li> '. $text_value2 .' </li>
                            <li> '. $content .' </li>
                        </ul>
                        <ul class="team-details-contacts">
                            '. $text_value3_output .'
                            '. $text_value5_output .'
                            '. $text_value4_output .'
                        </ul>
                        <ul class="team-social-details">
                            '. $text_value6_output .'
                            '. $text_value7_output .'
                            '. $text_value8_output .'
                        </ul>
                    </div>
            </div>
        ';
            
        $html .= '</div>';
    
       
    return $html;
    
    
    
    
}
add_shortcode( 'my_testimonial_details_shortcode', 'testiminial_details' );
add_action( 'vc_before_init', 'my_testimonial_details_shortcode_vs' );
function my_testimonial_details_shortcode_vs() {
   vc_map( array(
      "name" => __( "WX Testimonial Details", "my-dropdown-domain" ),
      "base" => "my_testimonial_details_shortcode",
      "class" => "",
      "category" => __( "WX Custom Shortcode", "my-text-domain"),
      "params" => array(
       
       
       
         array(
            "type" => "dropdown",
            "heading" => __( "Testimonial Style", "my-text-domain" ),
            "param_name" => "dropdown_attr",
            "admin_label" => true,
            "description" => __( "Select style for heading.", "my-text-domain" ),
            "value" =>  array(
                    'Left Style'    =>  '',
                    'Right Style'    =>  'right-style',
                )
         ),
       
       
         array(
            "type" => "attach_image",
            "heading" => __( "Insert image", "my-text-domain" ),
            "param_name" => "image_attr",
            "value" => __( "Default param value", "my-text-domain" ),
           
            "description" => __( "Description for foo param.", "my-text-domain" )
        ),
       
       
         array(
            "type" => "textfield",
            "heading" => __( "Insert Name", "my-text-domain" ),
            "param_name" => "text_attr",
            "value" => __( "Insert Name", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Name.", "my-text-domain" )
         ),
       
       
        array(
            "type" => "textfield",
            "heading" => __( "Type your Position", "my-text-domain" ),
            "param_name" => "text_attr2",
            "value" => __( "Type your Position", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Type your Position.", "my-text-domain" ),
         ),
       
       
        array(
            "type" => "textarea_html",
            "heading" => __( "text content", "my-text-domain" ),
            "param_name" => "content",
            "value" => __( "Default param value", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Description for foo param.", "my-text-domain" )
        ),
       
       
       
        array(
            "type" => "textfield",
            "heading" => __( "Insert Email Address", "my-text-domain" ),
            "param_name" => "text_attr3",
            "value" => __( "Insert Email Address", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Email Address", "my-text-domain" ),
         ),
       
        array(
            "type" => "textfield",
            "heading" => __( "Insert Phone Number", "my-text-domain" ),
            "param_name" => "text_attr4",
            "value" => __( "Insert Phone Number", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Phone Number", "my-text-domain" ),
         ),
       
         array(
            "type" => "textfield",
            "heading" => __( "Insert Mobile Number", "my-text-domain" ),
            "param_name" => "text_attr5",
            "value" => __( "Insert Mobile Number", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Mobile Number", "my-text-domain" ),
         ),
       
         array(
            "type" => "textfield",
            "heading" => __( "Insert Facebook", "my-text-domain" ),
            "param_name" => "text_attr6",
            "value" => __( "Insert Facebook", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Facebook", "my-text-domain" ),
         ),
       
        array(
            "type" => "textfield",
            "heading" => __( "Insert Twitter", "my-text-domain" ),
            "param_name" => "text_attr7",
            "value" => __( "Insert Twitter", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Twitter", "my-text-domain" ),
         ),
       
        array(
            "type" => "textfield",
            "heading" => __( "Insert Google +", "my-text-domain" ),
            "param_name" => "text_attr8",
            "value" => __( "Insert Google +", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert Google +", "my-text-domain" ),
         ),
       
      )
   ) );
}
/*************/
