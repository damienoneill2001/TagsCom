<?php
/*
  If you would like to edit this file, copy it to your current theme's directory and edit it there.
  WPUF will always look in your theme's directory first, before using this default template.
 */
?>
<div class="login" id="wpuf-login-form">

    <?php
    $message = apply_filters( 'login_message', '' );
    if ( ! empty( $message ) ) {
        echo $message . "\n";
    }
    ?>

    <?php wpuf()->login->show_errors(); ?>
    <?php wpuf()->login->show_messages(); ?>
    <h4 style="text-align:center;">Log In</h4>
    <form name="loginform" class="wpuf-login-form" id="loginform" action="<?php echo $action_url; ?>" method="post">
        <p>
            <label for="wpuf-user_login"><?php _e( 'Email Address', 'wpuf' ); ?></label>
            <input type="text" name="log" id="wpuf-user_login" class="input" value="" size="20" />
        </p>
        <p>
            <label for="wpuf-user_pass"><?php _e( 'Password', 'wpuf' ); ?></label>
            <input type="password" name="pwd" id="wpuf-user_pass" class="input" value="" size="20" />
        </p>

        <?php do_action( 'login_form' ); ?>

        <!--<p class="forgetmenot">
            <input name="rememberme" type="checkbox" id="wpuf-rememberme" value="forever" />
            <label for="wpuf-rememberme"><?php esc_attr_e( 'Remember Me', 'wpuf' ); ?></label>
        </p>-->
        <p class="lostPassword"><a href="/login/?action=lostpassword" title="Lost and Found Lost Password">Lost Password?</a></p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" value="<?php esc_attr_e( 'Log In', 'wpuf' ); ?>" />
            <input type="hidden" name="redirect_to" value="<?php echo WPUF_Login::get_posted_value( 'redirect_to' ); ?>" />
            <input type="hidden" name="wpuf_login" value="true" />
            <input type="hidden" name="action" value="login" />
            <?php wp_nonce_field( 'wpuf_login_action' ); ?>
        </p>
    </form>
    
    <div class="registrationArea">
        <p>Are you a rescue and don't have an account? <a href="/signup/" title="Adopt A Pet Rescue Signup">Sign Up Here!</a></p>
        <!--<div class="registrationButton btn btn-default">
            <?php echo WPUF_Login::init()->get_action_links( array( 'login' => false, 'lostpassword' => false ) ); ?>
        </div>-->
    </div>
    <!--<?php echo WPUF_Login::init()->get_action_links( array( 'login' => false ) ); ?>-->
</div>
