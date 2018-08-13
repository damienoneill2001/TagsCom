<?php
global $post;

$form_settings       = get_post_meta( $post->ID, 'wpuf_form_settings', true );

$enable_mailchimp    = isset( $form_settings['enable_mailchimp'] ) ? $form_settings['enable_mailchimp'] : 'no';
$list_selected       = isset( $form_settings['mailchimp_list'] ) ? $form_settings['mailchimp_list'] : '';
$enable_double_optin = isset( $form_settings['enable_double_optin'] ) ? $form_settings['enable_double_optin'] : 'no';
?>

<table class="form-table">

    <tr class="wpuf-post-type">
        <th><?php _e( 'Enable Mailchimp', 'wpuf' ); ?></th>
        <td>
            <input type="checkbox" id="enable_mailchimp" name="wpuf_settings[enable_mailchimp]" value="yes" <?php echo ($enable_mailchimp=='yes') ? 'checked': '' ?> > <label for="enable_mailchimp"><?php  _e( 'Enable Mailchimp', 'wpuf' ) ?></label>
        </td>
    </tr>

    <tr class="wpuf-redirect-to">
        <th><?php _e( 'Select Preferred List', 'wpuf' ); ?></th>
        <td>
            <?php $lists = get_option( 'wpuf_mc_lists');
                
                if ( $lists ) { ?>
                <select name="wpuf_settings[mailchimp_list]">
                    <?php foreach ( $lists as $key => $value) {
                        printf('<option value="%s"%s>%s</option>', $value['id'], selected( $list_selected, $value['id'], false ), $value['name'] );
                    } ?>
                </select>

                <div class="description">
                    <?php _e( 'Select your mailchimp list for subscriptions', 'wpuf' ) ?>
                </div>

            <?php } else {
                if ( get_option( 'wpuf_mailchimp_api_key' ) ) {
                    list(, $datacentre) = explode('-', get_option( 'wpuf_mailchimp_api_key' ));
                    printf( '%s <a href="https://%s.admin.mailchimp.com/lists/" target="_blank">%s</a>', __( 'No List Found. ', 'wpuf' ), $datacentre, __( 'Create your list here', 'wpuf' ) );
                } else { 
                    _e( 'You are not connected with mailchimp. Insert your API key first', 'wpuf' );
                }
            } ?>
        </td>
    </tr>

    <tr class="wpuf-post-type">
        <th><?php _e( 'Double Optin', 'wpuf' ); ?></th>
        <td>
            <input type="checkbox" id="enable_double_optin" name="wpuf_settings[enable_double_optin]" value="yes" <?php echo ($enable_double_optin=='yes') ? 'checked': '' ?> > <label for="enable_double_optin"><?php _e( 'Enable Double Optin', 'wpuf' ); ?></label>
        </td>
    </tr>

</table>
