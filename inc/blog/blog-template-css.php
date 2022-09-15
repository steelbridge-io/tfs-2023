<?php

function blog_css() {
  $blog_css = '';
  
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
  
  
  $blog_css .= '
  
    #image {
      background-image: url('. $thumb_url .');
    }
    
		';
    return $blog_css;
  }
