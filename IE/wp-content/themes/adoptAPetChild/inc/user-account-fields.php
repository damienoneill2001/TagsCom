<?php

//==================================================================================
//  New User Profile fields
//==================================================================================

function modify_contact_methods($profile_fields) {

    // Add new fields
    //$profile_fields['phoneNumber'] = 'Phone Number';
    //$profile_fields['addressLine1'] = 'Address Line 1';
    //$profile_fields['addressLine2'] = 'Address Line 2';
    //$profile_fields['townCity'] = 'Town/City';
    //$profile_fields['addressCounty'] = 'County';
    //$profile_fields['eircode'] = 'Eircode';
    //$profile_fields['countryList'] = 'Country';
    //$profile_fields['facebook'] = 'Facebook URL';
    //$profile_fields['gplus'] = 'Google+ URL';

    // Remove old fields
    unset($profile_fields['googleplus']);


    return $profile_fields;

}
add_filter('user_contactmethods', 'modify_contact_methods');

//hooks
add_action( 'show_user_profile', 'Add_user_fields' );
add_action( 'edit_user_profile', 'Add_user_fields' );

function Add_user_fields( $user ) { ?>


<table class="form-table" style="background:white;">
    <th style="padding:10px;"><h3>Rescue Details</h3></th>
    
<!--
===========================================================
Address
===========================================================
-->
    <th style="padding:10px;"><h4>Address</h4></th>
    <tr>
        <th><label for="text" style="padding:10px;">Address Line 1</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'address', $user->ID ) );
            ?>
            <input type="text" name="address" id="address" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>

    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Address Line 2</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'addressLine2', $user->ID ) );
            ?>
            <input type="text" name="addressLine2" id="addressLine2" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Town/City</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'town', $user->ID ) );
            ?>
            <input type="text" name="town" id="town" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="dropdown" style="padding:10px;">County</label></th>
        <td>
            <?php 
            //get dropdown saved value
            $selected = get_the_author_meta( 'county', $user->ID ); //there was an extra ) here that was not needed 
            ?>
            <select name="county" id="county">
                <option value="select" <?php echo ($selected == "select")?  'selected="selected"' : '' ?>>Select a County</option>
                <option value="antrim" <?php echo ($selected == "antrim")?  'selected="selected"' : '' ?>>Antrim</option>
                <option value="armagh" <?php echo ($selected == "armagh")?  'selected="selected"' : '' ?>>Armagh</option>
                <option value="carlow" <?php echo ($selected == "carlow")?  'selected="selected"' : '' ?>>Carlow</option>
                <option value="cavan" <?php echo ($selected == "cavan")?  'selected="selected"' : '' ?>>Cavan</option>
                <option value="clare" <?php echo ($selected == "clare")?  'selected="selected"' : '' ?>>Clare</option>
                <option value="cork" <?php echo ($selected == "cork")?  'selected="selected"' : '' ?>>Cork</option>
                <option value="derry" <?php echo ($selected == "derry")?  'selected="selected"' : '' ?>>Derry</option>
                <option value="donegal" <?php echo ($selected == "donegal")?  'selected="selected"' : '' ?>>Donegal</option>
                <option value="down" <?php echo ($selected == "down")?  'selected="selected"' : '' ?>>Down</option>
                <option value="dublin" <?php echo ($selected == "dublin")?  'selected="selected"' : '' ?>>Dublin</option>
                <option value="fermanagh" <?php echo ($selected == "fermanagh")?  'selected="selected"' : '' ?>>Fermanagh</option>
                <option value="galway" <?php echo ($selected == "galway")?  'selected="selected"' : '' ?>>Galway</option>
                <option value="kerry" <?php echo ($selected == "kerry")?  'selected="selected"' : '' ?>>Kerry</option>
                <option value="kildare" <?php echo ($selected == "kildare")?  'selected="selected"' : '' ?>>Kildare</option>
                <option value="kilkenny" <?php echo ($selected == "kilkenny")?  'selected="selected"' : '' ?>>Kilkenny</option>
                <option value="laois" <?php echo ($selected == "laois")?  'selected="selected"' : '' ?>>Laois</option>
                <option value="leitrim" <?php echo ($selected == "leitrim")?  'selected="selected"' : '' ?>>Leitrim</option>
                <option value="limerick" <?php echo ($selected == "limerick")?  'selected="selected"' : '' ?>>Limerick</option>
                <option value="longford" <?php echo ($selected == "longford")?  'selected="selected"' : '' ?>>Longford</option>
                <option value="louth" <?php echo ($selected == "louth")?  'selected="selected"' : '' ?>>Louth</option>
                <option value="mayo" <?php echo ($selected == "mayo")?  'selected="selected"' : '' ?>>Mayo</option>
                <option value="meath" <?php echo ($selected == "meath")?  'selected="selected"' : '' ?>>Meath</option>
                <option value="monaghan" <?php echo ($selected == "monaghan")?  'selected="selected"' : '' ?>>Monaghan</option>
                <option value="offaly" <?php echo ($selected == "offaly")?  'selected="selected"' : '' ?>>Offaly</option>
                <option value="roscommon" <?php echo ($selected == "roscommon")?  'selected="selected"' : '' ?>>Roscommon</option>
                <option value="sligo" <?php echo ($selected == "sligo")?  'selected="selected"' : '' ?>>Sligo</option>
                <option value="tipperary" <?php echo ($selected == "tipperary")?  'selected="selected"' : '' ?>>Tipperary</option>
                <option value="tyrone" <?php echo ($selected == "tyrone")?  'selected="selected"' : '' ?>>Tyrone</option>
                <option value="waterford" <?php echo ($selected == "waterford")?  'selected="selected"' : '' ?>>Waterford</option>
                <option value="westmeath" <?php echo ($selected == "westmeath")?  'selected="selected"' : '' ?>>Westmeath</option>
                <option value="wexford" <?php echo ($selected == "wexford")?  'selected="selected"' : '' ?>>Wexford</option>
                <option value="wicklow" <?php echo ($selected == "wicklow")?  'selected="selected"' : '' ?>>Wicklow</option>
            </select>

        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Postcode</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'postcode', $user->ID ) );
            ?>
            <input type="text" name="postcode" id="postcode" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Google Map</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'googleMap', $user->ID ) );
            ?>
            <input type="text" name="googleMap" id="googleMap" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

<!--
===========================================================
Contact
===========================================================
-->
    <th style="padding:10px;"><h4>Contact</h4></th>

    <tr>
        <th><label for="text" style="padding:10px;">Landline</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'phone_number', $user->ID ) );
            ?>
            <input type="text" name="phone_number" id="phone_number" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
        <td>
            <?php 
            // get test saved value
            $checked = get_the_author_meta( 'hidePhone', $user->ID );
            ?>
            <input type="checkbox" id="hidePhone" name="hidePhone" value="hide" <?php checked('hide', $checked) ?> /> Hide
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Mobile</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'mobile_number', $user->ID ) );
            ?>
            <input type="text" name="mobile_number" id="mobile_number" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Email</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'email', $user->ID ) );
            ?>
            <input type="text" name="email" id="email" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Website</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'website', $user->ID ) );
            ?>
            <input type="text" name="website" id="website" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

<!--
===========================================================
Social
===========================================================
-->
    <th style="padding:10px;"><h4>Social</h4></th>

    <tr>
        <th><label for="text" style="padding:10px;">Facebook URL</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'facebook_page', $user->ID ) );
            ?>
            <input type="text" name="facebook_page" id="facebook_page" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Twitter URL</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'twitter', $user->ID ) );
            ?>
            <input type="text" name="twitter" id="twitter" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

    <tr>
        <th><label for="text" style="padding:10px;">Instagram URL</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'instagram', $user->ID ) );
            ?>
            <input type="text" name="instagram" id="instagram" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
    </tr>

<!--
===========================================================
Additional Info
===========================================================
-->
    <th style="padding:10px;"><h4>Additional Info</h4></th>
    
    <tr>
        <th><label for="text" style="padding:10px;">Charity Number</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'charity_number', $user->ID ) );
            ?>
            <input type="text" name="charity_number" id="charity_number" value="<?php echo $saved; ?>" class="regular-text" /><br />
        </td>
        <td>
            <?php 
            // get test saved value
            $checked = get_the_author_meta( 'hideCharity', $user->ID );
            ?>
            <input type="checkbox" id="hideCharity" name="hideCharity" value="hide" <?php checked('hide', $checked) ?> /> Hide
        </td>
    </tr>

    <tr>
        <th><label for="dropdown" style="padding:10px;">Rescue/Pound/Vet</label></th>
        <td>
            <?php 
            //get dropdown saved value
            $selected = get_the_author_meta( 'rescue_pound_vet', $user->ID ); //there was an extra ) here that was not needed 
            ?>
            <select name="rescue_pound_vet" id="rescue_pound_vet">
                <option value="select" <?php echo ($selected == "select")?  'selected="selected"' : '' ?>>Select a Type</option>
                <option value="rescue" <?php echo ($selected == "rescue")?  'selected="selected"' : '' ?>>Rescue</option>
                <option value="pound" <?php echo ($selected == "pound")?  'selected="selected"' : '' ?>>Pound</option>
                <option value="vet" <?php echo ($selected == "vet")?  'selected="selected"' : '' ?>>Vet</option>
            </select>

        </td>
    </tr>
    <tr>
        <th><label for="checkbox" style="padding:10px;">Pet Type</label></th>
        <td>
            <?php 
            //get dropdown saved value
            $checked1 = get_the_author_meta( 'petType1', $user->ID ); 
            $checked2 = get_the_author_meta( 'petType2', $user->ID );
            $checked3 = get_the_author_meta( 'petType3', $user->ID );
            $checked3 = get_the_author_meta( 'petType4', $user->ID );
            $checked3 = get_the_author_meta( 'petType5', $user->ID );
            ?>
            <form>
                <!--<option value="select" <?php echo ($checked == "select")?  'selected="selected"' : '' ?>>Select a Type</option>-->
                
                <input type="checkbox" id="petType1" name="petType1" value="dogs" <?php checked('dogs', $checked1) ?> /> Dogs
                <input type="checkbox" id="petType2" name="petType2" value="cats" <?php checked('cats', $checked2) ?> /> Cats
                <input type="checkbox" id="petType3" name="petType3" value="smallAnimals" <?php checked('wildlife', $checked3) ?> /> Small Animals
                <input type="checkbox" id="petType4" name="petType4" value="horses" <?php checked('wildlife', $checked4) ?> /> Horses/Donkeys
                <input type="checkbox" id="petType5" name="petType5" value="wildlife" <?php checked('wildlife', $checked5) ?> /> Wildlife
            </form>

        </td>
    </tr>
    <tr>
        <th><label for="textarea" style="padding:10px;">Description</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'userDescription', $user->ID ) );
            ?>
            <textarea type="text" name="userDescription" id="userDescription" class="regular-text"><?php echo esc_attr( get_the_author_meta( 'userDescription', $user->ID ) ); ?></textarea><br />
        </td>
    </tr>

    <tr>
        <th><label for="textarea" style="padding:10px;">Opening Hours</label></th>
        <td>
            <?php 
            // get test saved value
            $saved = esc_attr( get_the_author_meta( 'opening_times', $user->ID ) );
            ?>
            <textarea type="text" name="opening_times" id="opening_times" class="regular-text"><?php echo esc_attr( get_the_author_meta( 'openingHours', $user->ID ) ); ?></textarea><br />

        </td>
    </tr>

</table>
<?php }

/*
===========================================================
Save Data
===========================================================
*/

add_action( 'personal_options_update', 'save_user_fields' );
add_action( 'edit_user_profile_update', 'save_user_fields' );

function save_user_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) )
    return false;

update_usermeta( $user_id, 'address', $_POST['address'] );
update_usermeta( $user_id, 'addressLine2', $_POST['addressLine2'] );
update_usermeta( $user_id, 'town', $_POST['town'] );
update_usermeta( $user_id, 'postcode', $_POST['postcode'] );
update_usermeta( $user_id, 'googleMap', $_POST['googleMap'] );
update_usermeta( $user_id, 'county', $_POST['county'] );
update_usermeta( $user_id, 'phone_number', $_POST['phone_number'] );
update_usermeta( $user_id, 'hidePhone', $_POST['hidePhone'] );
update_usermeta( $user_id, 'mobile_number', $_POST['mobile_number'] );
update_usermeta( $user_id, 'email', $_POST['email'] );
update_usermeta( $user_id, 'website', $_POST['website'] );
update_usermeta( $user_id, 'facebook_page', $_POST['facebook_page'] );
update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
update_usermeta( $user_id, 'instagram', $_POST['instagram'] );
update_usermeta( $user_id, 'charity_number', $_POST['charity_number'] );
update_usermeta( $user_id, 'hideCharity', $_POST['hideCharity'] );
update_usermeta( $user_id, 'rescue_pound_vet', $_POST['rescue_pound_vet'] );
update_usermeta( $user_id, 'petType1', $_POST['petType1'] );
update_usermeta( $user_id, 'petType2', $_POST['petType2'] );
update_usermeta( $user_id, 'petType3', $_POST['petType3'] );
update_usermeta( $user_id, 'petType4', $_POST['petType4'] );
update_usermeta( $user_id, 'petType5', $_POST['petType5'] );
update_usermeta( $user_id, 'opening_times', $_POST['opening_times'] );
update_usermeta( $user_id, 'userDescription', $_POST['userDescription'] );
}