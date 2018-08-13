<?php function user_search_form1(){
	$metavalue = '';
	$metavalueType = '';
					
	if (isset($_GET['s_value'])){
		$metavalue = $_GET['s_value'];
	}
	if (isset($_GET['type_value'])){
		$metavalueType = $_GET['type_value'];
	}
	$search = ( isset( $_GET['s_value'])) ? explode(',', $_GET['s_value']) : '';
	$type = ( isset( $_GET['type_value'])) ? $_GET['type_value'] : '';
	

	$englandCounties =	array('Bedfordshire','Buckinghamshire','Cambridgeshire','Cheshire','Cleveland','Cornwall','Cumbria','Derbyshire','Devon','Dorset','Durham','East Sussex','Essex','Gloucestershire','Greater London','Greater Manchester','Hampshire','Hertfordshire','Kent','Lancashire','Leicestershire','Lincolnshire','Merseyside','Norfolk','North Yorkshire','Northamptonshire','Northumberland','Nottinghamshire','Oxfordshire','Shropshire','Somerset','South Yorkshire','Staffordshire','Suffolk','Surrey','Tyne and Wear','Warwickshire','West Berkshire','West Midlands','West Sussex','West Yorkshire','Wiltshire','Worcestershire');
	$scotlandCounties = array('Aberdeen City','Aberdeenshire','Angus','Argyll and Bute','City of Edinburgh','Clackmannanshire','Dumfries and Galloway','Dundee City','East Ayrshire','East Dunbartonshire','East Lothian','East Renfrewshire','Eilean Siar','Falkirk','Fife','Glasgow City','Highland','Inverclyde','Midlothian','Moray','North Ayrshire','North Lanarkshire','Orkney Islands','Perth and Kinross','Renfrewshire','Scottish Borders','Shetland Islands','South Ayrshire','South Lanarkshire','Stirling','West Dunbartonshire','West Lothian');
	$walesCounties = array('Anglesey','Breconshire','Caernarvonshire','Cardiganshire','Carmarthenshire','Denbighshire','Flintshire','Glamorgan','Merionethshire','Monmouthshire','Montgomeryshire','Pembrokeshire','Radnorshire'); 
	

	$petTypes=array('Dogs','Cats','Small Animals','Horses/Donkeys','Wildlife'); ?>

	<div class="user_search row no-gutters">
		<form action="/uk/rescues/" name="user_s" method="get" class="col-12">
			
				
			<select multiple="multiple" data-live-search="true" searchable="Search here" id="s_value" name="s_value[]" class=" mdb-select colorful-select dropdown-primary form-control col-xl-3 clo-lg-3 col-md-3 col-sm-12 col-12 float-left" style="margin-bottom:10px;">
				<option value=""> - All Counties - </option>
				<optgroup label="ALL OF ENGLAND">
				<?php foreach($englandCounties as $england){ ?>
				    <option value="<?php echo $england ?>" <?php selected( $england, $search); ?>><?php echo $england ?></option>
				<?php }; ?>	
				</optgroup>
				<optgroup label="ALL OF SCOTLAND">
				<?php foreach($scotlandCounties as $scotland){ ?>
				    <option value="<?php echo $scotland ?>" <?php selected( $scotland, $search); ?>><?php echo $scotland ?></option>
				<?php }; ?>
				</optgroup>
				<optgroup label="ALL OF WALES">
				<?php foreach($walesCounties as $wales){ ?>
				    <option value="<?php echo $wales ?>" <?php selected( $wales, $search); ?>><?php echo $wales ?></option>
				<?php }; ?>	
				</optgroup>		
			</select>
			
			<select id="type_value" name="type_value" class="form-control col-xl-3 clo-lg-3 col-md-3 col-sm-12 col-12 float-left offset-xl-1 offset-lg-1 offset-md-1" style="margin-bottom:10px;">
				<option value=""> - All Pet Types - </option>
				<?php foreach($petTypes as $petType){ ?>
				    <option value="<?php echo $petType ?>" <?php selected( $petType, $type); ?>><?php echo $petType ?></option>
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