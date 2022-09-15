<?php


// Enqueue scripts for back-end use
function tfs_cust_auth_image() {

   // wp_register_script( 'easy-author-image-uploader', get_template_directory_uri() . '/inc/author-img/js/easy-author-image-uploader.js', __FILE__ , array('jquery',
   //   'media-upload', 'thickbox') );
  
    wp_register_script( 'easy-author-image-uploader', get_template_directory_uri() . '/inc/author-img/js/easy-author-image-uploader.js', __FILE__ , array() );

    // If we are currently viewing the profile field, enqueue our custom js file
    if ( 'profile' == get_current_screen() -> id || 'user-edit' == get_current_screen() ->id ) {
        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'thickbox' );
        wp_enqueue_style( 'thickbox' );

        wp_enqueue_script( 'media-upload' );
        wp_enqueue_script( 'easy-author-image-uploader' );

    }

}
add_action( 'admin_enqueue_scripts', 'tfs_cust_auth_image');

function tfs_cust_auth_image_init() {
    global $pagenow;
    if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
        add_filter( 'gettext', 'tfs_cust_auth_thickbox_btn_text', 1, 3 ); // here we call our function to replace the button text for the avatar uploader
    }
}

add_action( 'admin_init', 'tfs_cust_auth_image_init' );

function tfs_cust_auth_plugin_styles() {
    wp_register_style( 'easy_author_image', get_template_directory_uri() . '/inc/author-img/css/easy-author-image.css',
        __FILE__  );
    wp_enqueue_style( 'easy_author_image' );
}

add_action( 'wp_enqueue_scripts', 'tfs_cust_auth_plugin_styles');

function tfs_cust_auth_thickbox_btn_text($translated_text, $text, $domain) {
    if ( 'Insert into Post' == $text) {
        $referer = strpos( wp_get_referer(), 'profile' );
        if ( $referer != '' ) {
            return __( 'Custom Profile Image', 'easy-author-image' );
        }
    }
    return $translated_text;
}

function tfs_cust_auth_add_custom_profile_fields( $user ) {


    $avatar = get_user_meta( $user->ID, 'author_profile_picture', true );
    ?>
    <h3><?php _e( 'Profile Picture', 'easy-author-image' ); ?></h3>

    <input type="hidden" id="author_profile_picture_url" name="author_profile_picture_url" value="<?php echo esc_url( $avatar ); ?>" />

    <table class="form-table">
        <tr>
            <th><label for="author_profile_picture_button"><span class="description"><?php _e( 'Upload a picture to use as the profile image.', 'easy-author-image' ); ?></span></label></th>
            <?php
            $buttontext = "";
            if( '' != $avatar ) {
                $buttontext = __( 'Change profile picture', 'easy-author-image' );
            } else {
                $buttontext = __( 'Upload new profile picture', 'easy-author-image' );
            }
            ?>
            <td>
                <input id="author_profile_picture_button" type="button" class="button" value="<?php echo $buttontext; ?>" />
                <?php if( '' != $avatar ) { ?>
                    <input id="author_profile_picture_remove" type="button" class="button" value="<?php _e( 'Delete profile picture', 'easy-author-image' ); ?>" />
                <?php } ?>
            </td>
        </tr>

        <tr>
            <th><label for="author_profile_picture_preview"><span class="description"><?php _e( 'Preview:', 'easy-author-image' ); ?></span></label></th>
            <td>
                <?php if ( '' != $avatar ){ ?>
                    <div id="author_profile_picture_preview" style="min-height: 100px;">
                        <img style="max-width:100%;border:2px solid #CCC" src="<?php echo esc_url( $avatar ); ?>" />
                    </div>
                    <span class="description"><?php _e( 'You can update the picture from above.', 'easy-author-image' ); ?></span>
                <?php } else { ?>
                    <div id="author_profile_picture_preview" style="height: 100px; width:100px; line-height:100px; border:2px solid #CCC; text-align:center; font-size:5em;">?</div>
                    <span class="description"><?php _e( 'This profile does not yet have an image. Click the button above to upload one (or select one from your media gallery).', 'easy-author-image' ); ?></span>
                <?php } ?>
                <span id="upload_success" style="color: #FF0000; font-weight: bold; display:block;"></span>
            </td>
        </tr>
    </table>
    <?php

}

function tfs_cust_auth_save_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return FALSE;

    update_user_meta( $user_id, 'author_profile_picture', $_POST['author_profile_picture_url'] );
}

// Add our functions to profile display and update hooks
add_action( 'show_user_profile', 'tfs_cust_auth_add_custom_profile_fields' );
add_action( 'edit_user_profile', 'tfs_cust_auth_add_custom_profile_fields' );
add_action( 'personal_options_update', 'tfs_cust_auth_save_fields' );
add_action( 'edit_user_profile_update', 'tfs_cust_auth_save_fields' );

function author_image_circle( $user_id=999999, $_size="small" ) {

    if( $user_id==999999 ) {
        $avatar = get_user_meta(get_the_ID(), 'author_profile_picture', true);
    } else {
        $avatar = get_user_meta($user_id, 'author_profile_picture');
    }
    $size = ( ($_size == "small" || $_size == "medium" || $_size == "large") ? $_size : "medium");

    $output = '<div class="circular-'.$size.'" style="background: url( '.$avatar.');"></div>';

    echo $output;
}

function get_author_image_url($user_id=999999) {
    if($user_id==999999){
        $avatar = get_user_meta( get_the_ID(), 'author_profile_picture', true);
    } else {
        $avatar = get_user_meta($user_id, 'author_profile_picture', true);
    }

    return $avatar;
}

function get_easy_author_image($avatar, $id_or_email, $size, $default='', $alt='') {

    $myavatar = "";

    if ( is_numeric($id_or_email) ) {
        $id = (int) $id_or_email;
        $user = get_userdata($id);
        if ( $user )
            $email = $user->user_email;
    } elseif ( is_object($id_or_email) ) {

        if ( !empty($id_or_email->user_id) ) {
            $id = (int) $id_or_email->user_id;
            $user = get_userdata($id);
            if ( $user)
                $email = $user->user_email;
        } elseif ( !empty($id_or_email->comment_author_email) ) {
            $email = $id_or_email->comment_author_email;
        }
    } else {
        $email = $id_or_email;
    }


    if(!empty($email)) {

        $avatar_user = get_user_by( 'email', $email);

        if(! empty($avatar_user)){

            $url = get_user_meta($avatar_user->ID, 'author_profile_picture', true);
        }

        if($avatar_user && $url){


            $myavatar = '<img class="avatar avatar-'.$size.' photo" src="'.$url.'"/>';

        } else {

            $gravatarUrl = "https://www.gravatar.com/avatar.php?gravatar_id=" . md5($email) . "&size=40";
            $myavatar = "<img src='$gravatarUrl' alt=".$email."' />";
        }
    }else{
        $myavatar = "<img alt='' src='{$default}' class='avatar avatar-{$size} photo avatar-default' height='{$size}' width='{$size}' />";
    }

    return $myavatar;
}

add_filter( 'get_avatar', 'get_easy_author_image', 10, 5);
