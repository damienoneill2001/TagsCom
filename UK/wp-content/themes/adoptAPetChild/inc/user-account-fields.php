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
                <option value="englandCounties" <?php echo ($selected == "englandCounties")?  'selected="selected"' : '' ?>> --- England --- </option>
                <option value="bedfordshire" <?php echo ($selected == "bedfordshire")?  'selected="selected"' : '' ?>>Bedfordshire</option>
                <option value="buckinghamshire" <?php echo ($selected == "buckinghamshire")?  'selected="selected"' : '' ?>>Buckinghamshire</option>
                <option value="cambridgeshire" <?php echo ($selected == "cambridgeshire")?  'selected="selected"' : '' ?>>Cambridgeshire</option>
                <option value="cheshire" <?php echo ($selected == "cheshire")?  'selected="selected"' : '' ?>>Cheshire</option>
                <option value="cleveland" <?php echo ($selected == "cleveland")?  'selected="selected"' : '' ?>>Cleveland</option>
                <option value="cornwall" <?php echo ($selected == "cornwall")?  'selected="selected"' : '' ?>>Cornwall</option>
                <option value="cumbria" <?php echo ($selected == "cumbria")?  'selected="selected"' : '' ?>>Cumbria</option>
                <option value="derbyshire" <?php echo ($selected == "derbyshire")?  'selected="selected"' : '' ?>>Derbyshire</option>
                <option value="devon" <?php echo ($selected == "devon")?  'selected="selected"' : '' ?>>Devon</option>
                <option value="dorset" <?php echo ($selected == "dorset")?  'selected="selected"' : '' ?>>Dorset</option>
                <option value="durham" <?php echo ($selected == "durham")?  'selected="selected"' : '' ?>>Durham</option>
                <option value="eastSussex" <?php echo ($selected == "eastSussex")?  'selected="selected"' : '' ?>>East Sussex</option>
                <option value="essex" <?php echo ($selected == "essex")?  'selected="selected"' : '' ?>>Essex</option>
                <option value="gloucestershire" <?php echo ($selected == "gloucestershire")?  'selected="selected"' : '' ?>>Gloucestershire</option>
                <option value="greaterLondon" <?php echo ($selected == "greaterLondon")?  'selected="selected"' : '' ?>>Greater London</option>
                <option value="greaterManchester" <?php echo ($selected == "greaterManchester")?  'selected="selected"' : '' ?>>Greater Manchester</option>
                <option value="hampshire" <?php echo ($selected == "hampshire")?  'selected="selected"' : '' ?>>Hampshire</option>
                <option value="hertfordshire" <?php echo ($selected == "hertfordshire")?  'selected="selected"' : '' ?>>Hertfordshire</option>
                <option value="kent" <?php echo ($selected == "kent")?  'selected="selected"' : '' ?>>Kent</option>
                <option value="lancashire" <?php echo ($selected == "lancashire")?  'selected="selected"' : '' ?>>Lancashire</option>
                <option value="leicestershire" <?php echo ($selected == "leicestershire")?  'selected="selected"' : '' ?>>Leicestershire</option>
                <option value="lincolnshire" <?php echo ($selected == "lincolnshire")?  'selected="selected"' : '' ?>>Lincolnshire</option>
                <option value="merseyside" <?php echo ($selected == "merseyside")?  'selected="selected"' : '' ?>>Merseyside</option>
                <option value="norfolk" <?php echo ($selected == "norfolk")?  'selected="selected"' : '' ?>>Norfolk</option>
                <option value="northYorkshire" <?php echo ($selected == "northYorkshire")?  'selected="selected"' : '' ?>>North Yorkshire</option>
                <option value="northamptonshire" <?php echo ($selected == "northamptonshire")?  'selected="selected"' : '' ?>>Northamptonshire</option>
                <option value="northumberland" <?php echo ($selected == "northumberland")?  'selected="selected"' : '' ?>>Northumberland</option>
                <option value="nottinghamshire" <?php echo ($selected == "nottinghamshire")?  'selected="selected"' : '' ?>>Nottinghamshire</option>
                <option value="oxfordshire" <?php echo ($selected == "oxfordshire")?  'selected="selected"' : '' ?>>Oxfordshire</option>
                <option value="shropshire" <?php echo ($selected == "shropshire")?  'selected="selected"' : '' ?>>Shropshire</option>
                <option value="somerset" <?php echo ($selected == "somerset")?  'selected="selected"' : '' ?>>Somerset</option>
                <option value="southYorkshire" <?php echo ($selected == "southYorkshire")?  'selected="selected"' : '' ?>>South Yorkshire</option>
                <option value="staffordshire" <?php echo ($selected == "staffordshire")?  'selected="selected"' : '' ?>>Staffordshire</option>
                <option value="suffolk" <?php echo ($selected == "suffolk")?  'selected="selected"' : '' ?>>Suffolk</option>
                <option value="surrey" <?php echo ($selected == "surrey")?  'selected="selected"' : '' ?>>Surrey</option>
                <option value="tyneAndWear" <?php echo ($selected == "tyneAndWear")?  'selected="selected"' : '' ?>>Tyne and Wear</option>
                <option value="warwickshire" <?php echo ($selected == "warwickshire")?  'selected="selected"' : '' ?>>Warwickshire</option>
                <option value="westBerkshire" <?php echo ($selected == "westBerkshire")?  'selected="selected"' : '' ?>>West Berkshire</option>
                <option value="westMidlands" <?php echo ($selected == "westMidlands")?  'selected="selected"' : '' ?>>West Midlands</option>
                <option value="westSussex" <?php echo ($selected == "westSussex")?  'selected="selected"' : '' ?>>West Sussex</option>
                <option value="westYorkshire" <?php echo ($selected == "westYorkshire")?  'selected="selected"' : '' ?>>West Yorkshire</option>
                <option value="wiltshire" <?php echo ($selected == "wiltshire")?  'selected="selected"' : '' ?>>Wiltshire</option>
                <option value="worcestershire" <?php echo ($selected == "worcestershire")?  'selected="selected"' : '' ?>>Worcestershire</option>
                <option value="scotlandCounties" <?php echo ($selected == "scotlandCounties")?  'selected="selected"' : '' ?>> --- Scotland --- </option>
                <option value="aberdeenCity" <?php echo ($selected == "aberdeenCity")?  'selected="selected"' : '' ?>>Aberdeen City</option>
                <option value="aberdeenshire" <?php echo ($selected == "aberdeenshire")?  'selected="selected"' : '' ?>>Aberdeenshire</option>
                <option value="angus" <?php echo ($selected == "angus")?  'selected="selected"' : '' ?>>Angus</option>
                <option value="argyllAndBute" <?php echo ($selected == "argyllAndBute")?  'selected="selected"' : '' ?>>Argyll and Bute</option>
                <option value="cityOfEdinburgh" <?php echo ($selected == "cityOfEdinburgh")?  'selected="selected"' : '' ?>>City of Edinburgh</option>
                <option value="clackmannanshire" <?php echo ($selected == "clackmannanshire")?  'selected="selected"' : '' ?>>Clackmannanshire</option>
                <option value="dumfriesAndGalloway" <?php echo ($selected == "dumfriesAndGalloway")?  'selected="selected"' : '' ?>>Dumfries and Galloway</option>
                <option value="dundeeCity" <?php echo ($selected == "dundeeCity")?  'selected="selected"' : '' ?>>Dundee City</option>
                <option value="eastAyrshire" <?php echo ($selected == "eastAyrshire")?  'selected="selected"' : '' ?>>East Ayrshire</option>
                <option value="eastDunbartonshire" <?php echo ($selected == "eastDunbartonshire")?  'selected="selected"' : '' ?>>East Dunbartonshire</option>
                <option value="eastLothian" <?php echo ($selected == "eastLothian")?  'selected="selected"' : '' ?>>East Lothian</option>
                <option value="eastRenfrewshire" <?php echo ($selected == "eastRenfrewshire")?  'selected="selected"' : '' ?>>East Renfrewshire</option>
                <option value="eileanSiar" <?php echo ($selected == "eileanSiar")?  'selected="selected"' : '' ?>>Eilean Siar</option>
                <option value="falkirk" <?php echo ($selected == "falkirk")?  'selected="selected"' : '' ?>>Falkirk</option>
                <option value="fife" <?php echo ($selected == "fife")?  'selected="selected"' : '' ?>>Fife</option>
                <option value="glasgowCity" <?php echo ($selected == "glasgowCity")?  'selected="selected"' : '' ?>>Glasgow City</option>
                <option value="highland" <?php echo ($selected == "highland")?  'selected="selected"' : '' ?>>Highland</option>
                <option value="inverclyde" <?php echo ($selected == "inverclyde")?  'selected="selected"' : '' ?>>Inverclyde</option>
                <option value="midlothian" <?php echo ($selected == "midlothian")?  'selected="selected"' : '' ?>>Midlothian</option>
                <option value="moray" <?php echo ($selected == "moray")?  'selected="selected"' : '' ?>>Moray</option>
                <option value="northAyrshire" <?php echo ($selected == "northAyrshire")?  'selected="selected"' : '' ?>>North Ayrshire</option>
                <option value="northLanarkshire" <?php echo ($selected == "northLanarkshire")?  'selected="selected"' : '' ?>>North Lanarkshire</option>
                <option value="orkneyIslands" <?php echo ($selected == "orkneyIslands")?  'selected="selected"' : '' ?>>Orkney Islands</option>
                <option value="perthAndKinross" <?php echo ($selected == "perthAndKinross")?  'selected="selected"' : '' ?>>Perth and Kinross</option>
                <option value="renfrewshire" <?php echo ($selected == "renfrewshire")?  'selected="selected"' : '' ?>>Renfrewshire</option>
                <option value="scottishBorders" <?php echo ($selected == "scottishBorders")?  'selected="selected"' : '' ?>>Scottish Borders</option>
                <option value="shetlandIslands" <?php echo ($selected == "shetlandIslands")?  'selected="selected"' : '' ?>>Shetland Islands</option>
                <option value="southAyrshire" <?php echo ($selected == "southAyrshire")?  'selected="selected"' : '' ?>>South Ayrshire</option>
                <option value="southLanarkshire" <?php echo ($selected == "southLanarkshire")?  'selected="selected"' : '' ?>>South Lanarkshire</option>
                <option value="stirling" <?php echo ($selected == "stirling")?  'selected="selected"' : '' ?>>Stirling</option>
                <option value="westDunbartonshire" <?php echo ($selected == "westDunbartonshire")?  'selected="selected"' : '' ?>>West Dunbartonshire</option>
                <option value="westLothian" <?php echo ($selected == "westLothian")?  'selected="selected"' : '' ?>>West Lothian</option>
                <option value="walesCounties" <?php echo ($selected == "walesCounties")?  'selected="selected"' : '' ?>> --- Wales --- </option>
                <option value="anglesey" <?php echo ($selected == "anglesey")?  'selected="selected"' : '' ?>>Anglesey</option>
                <option value="breconshire" <?php echo ($selected == "breconshire")?  'selected="selected"' : '' ?>>Breconshire</option>
                <option value="caernarvonshire" <?php echo ($selected == "caernarvonshire")?  'selected="selected"' : '' ?>>Caernarvonshire</option>
                <option value="cardiganshire" <?php echo ($selected == "cardiganshire")?  'selected="selected"' : '' ?>>Cardiganshire</option>
                <option value="carmarthenshire" <?php echo ($selected == "carmarthenshire")?  'selected="selected"' : '' ?>>Carmarthenshire</option>
                <option value="denbighshire" <?php echo ($selected == "denbighshire")?  'selected="selected"' : '' ?>>Denbighshire</option>
                <option value="flintshire" <?php echo ($selected == "flintshire")?  'selected="selected"' : '' ?>>Flintshire</option>
                <option value="glamorgan" <?php echo ($selected == "glamorgan")?  'selected="selected"' : '' ?>>Glamorgan</option>
                <option value="merionethshire" <?php echo ($selected == "merionethshire")?  'selected="selected"' : '' ?>>Merionethshire</option>
                <option value="monmouthshire" <?php echo ($selected == "monmouthshire")?  'selected="selected"' : '' ?>>Monmouthshire</option>
                <option value="montgomeryshire" <?php echo ($selected == "montgomeryshire")?  'selected="selected"' : '' ?>>Montgomeryshire</option>
                <option value="pembrokeshire" <?php echo ($selected == "pembrokeshire")?  'selected="selected"' : '' ?>>Pembrokeshire</option>
                <option value="radnorshire" <?php echo ($selected == "radnorshire")?  'selected="selected"' : '' ?>>Radnorshire</option>
            </select>

        </td>
    </tr>

    <tr>
        <th><label for="dropdown" style="padding:10px;">Country</label></th>
        <td>
            <?php 
            //get dropdown saved value
            $selected = get_the_author_meta( 'country', $user->ID ); //there was an extra ) here that was not needed 
            ?>
            <select name="country" id="country">
                <option value="select" <?php echo ($selected == "select")?  'selected="selected"' : '' ?>>Select a Country</option>
                <option value="england" <?php echo ($selected == "england")?  'selected="selected"' : '' ?>>England</option>
                <option value="scotland" <?php echo ($selected == "scotland")?  'selected="selected"' : '' ?>>Scotland</option>
                <option value="wales" <?php echo ($selected == "wales")?  'selected="selected"' : '' ?>>Wales</option>
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
update_usermeta( $user_id, 'country', $_POST['country'] );
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