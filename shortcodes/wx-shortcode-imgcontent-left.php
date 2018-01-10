/***************/
// [Text with Image Attached ]
function text_img_shortcode( $atts,$content ) {
    $a = shortcode_atts( array(
        'textarea_html' => 'Insert Name',
        'image_attr' => 'attach_image',
        'text_attr' => 'heading here',
        'text_attr2' => '1',
        'url_link' => '',
    ), $atts );
    
    
    $image_id = $a['image_attr'];
    $textarea_html = $a['textarea_html'];
    $title_head = $a['text_attr'];
    $title_numbering = $a['text_attr2'];
    $href = vc_build_link( $a['url_link'] );
    $image = wp_get_attachment_image($image_id, 'full');
    
    
        $html .= '<div class="text-image-wrapper">';
        $html .= '<div class="text-image-holder">
                        <div class="col-md-3">
                            '. $image .'
                        </div>
                        <div class="col-md-9 text-left">
                            <h3>  '. $title_numbering .'<span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></h3>
                            <h1>'. $title_head .'</h1>
                            <p>
                             '. $content .'
                             </p>
                            <a href="'. $href['url'] .'" class="process-btn">  REAMORE  </a>
                        
                        </div>
                       
                  </div>';
    
        $html .= '</div>';
       
    return $html;
    
    
    
    
}
add_shortcode( 'text_image_shortcode', 'text_img_shortcode' );
add_action( 'vc_before_init', 'my_text_image_shortcode' );
function my_text_image_shortcode() {
   vc_map( array(
      "name" => __( "WX Process Left", "my-dropdown-domain" ),
      "base" => "text_image_shortcode",
      "class" => "",
      "content" => true,
      "category" => __( "WX Custom Shortcode", "my-text-domain"),
      "params" => array(
       
       
        array(
            "type" => "attach_image",
            "heading" => __( "Insert image", "my-text-domain" ),
            "param_name" => "image_attr",
            "value" => __( "Default param value", "my-text-domain" ),
           
            "description" => __( "Description for foo param.", "my-text-domain" )
        ),
       
        array(
            "type" => "textfield",
            "heading" => __( "Numbering", "my-text-domain" ),
            "param_name" => "text_attr2",
            "value" => __( "Default param value", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert the heading word.", "my-text-domain" )
         ),
       
        array(
            "type" => "textfield",
            "heading" => __( "Text Heading", "my-text-domain" ),
            "param_name" => "text_attr",
            "value" => __( "Default param value", "my-text-domain" ),
            "admin_label" => true,
            "description" => __( "Insert the heading word.", "my-text-domain" )
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
            "type" => "vc_link",
            "heading" => __( "Text Url", "my-text-domain" ),
            "param_name" => "url_link",
            "description" => __( "page link url page.", "my-text-domain" )
        )
       
       
      )
   ) );
}
/*************/
