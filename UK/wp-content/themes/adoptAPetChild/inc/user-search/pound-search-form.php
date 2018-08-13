<?php function user_search_form1(){
	$metavalue = '';
					
	if (isset($_GET['s_value'])){
		$metavalue = $_GET['s_value'];
	}
	$search = ( isset( $_GET['s_value'])) ? $_GET['s_value'] : '';

	$counties=array('Antrim','Armagh','Carlow','Cavan','Clare','Cork','Derry','Donegal','Down','Dublin','Fermanagh','Galway',
			    	'Kerry','Kildare','Kilkenny','Laois','Leitrim','Limerick','Longford','Louth','Mayo','Meath','Monaghan',
			    	'Offaly','Roscommon','Sligo','Tipperary','Tyrone','Waterford','Westmeath','Wexford','Wicklow'); ?>

	<div class="user_search row no-gutters">
		<form action="/pounds/" name="user_s" method="get" class="col-12">
						
			<select id="s_value" name="s_value" class="form-control col-xl-7 clo-lg-7 col-md-7 col-sm-12 col-12 float-left" style="margin-bottom:10px;">
				<option value=""> - All Counties - </option>
				<?php foreach($counties as $county){ ?>
				    <option value="<?php echo $county ?>" <?php selected( $county, $search); ?>><?php echo $county ?></option>
				<?php }; ?>				
			</select>   
			<!--<input name="user_search" id="user_search" type="hidden" value="search_users"/>-->
			<input class="form-control search col-xl-3 clo-lg-3 col-md-3 col-sm-12 col-12 offset-xl-2 offset-lg-2 offset-md-2 float-left" id="submit" type="submit" value="Search" />
		</form>
	</div>
			    			
<?php } ?>
						
<?php 
	echo user_search_form1();
?>