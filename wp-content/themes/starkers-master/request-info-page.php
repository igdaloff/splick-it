<?php
/*
Template Name: request info
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<div class="form-page">
	<?php include("parts/shared/header.php"); ?>
	<div class="wrapper">
		<h2>Request for Info and Pricing</h2>
		<p>Complete the form below or call us at (303) 481-3660 to receive info about our branded iPhone, Android and web ordering apps for restaurants.</p>
		<p><strong>Are you a Pita Pit franchisee?</strong> Please use <a href="http://www.splickit.com/pitapit" title="New Pita Pit Franchisee Sign-Up">this sign-up form</a> instead!</p>

		<form id="salesforce_w2l_lead_1" class="w2llead" method="post">
			<ul>
				<li class="form-row">
					<label class="w2llabel text" for="sf_first_name">First name: *</label>
					<input value="" id="sf_first_name" class="w2linput text" name="first_name" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_last_name">Last name: *</label>
					<input value="" id="sf_last_name" class="w2linput text" name="last_name" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_title">Title:</label>
					<input value="" id="sf_title" class="w2linput text" name="title" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_email">Email: *</label>
					<input value="" id="sf_email" class="w2linput text" name="email" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_phone">Phone:</label>
					<input value="" id="sf_phone" class="w2linput text" name="phone" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_company">Restaurant Name / Company:</label>
					<input value="" id="sf_company" class="w2linput text" name="company" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_Total_Number_of_Locations__c">No. of Locations:</label>
					<input value="" id="sf_Total_Number_of_Locations__c" class="w2linput text" name="Total_Number_of_Locations__c" type="text">
				</li>

				<li class="form-row">
					<label class="w2llabel textarea" for="sf_description">Tell us a little about your business: *</label>
					<textarea id="sf_description" rows="4" class="w2linput textarea" name="description"></textarea>
				</li>

				<li class="form-row">
					<label class="w2llabel text" for="sf_OpenMenu_ID__c">Already have an OpenMenu ID? Enter it here!:</label>
					<input value="" id="sf_OpenMenu_ID__c" class="w2linput text" name="OpenMenu_ID__c" type="text">
				</li>

					<p><label class="w2llabel checkbox"><input type="checkbox" name="w2lcc" class="w2linput checkbox" value="1"> Send me a copy</label></p><p>
					<input type="text" name="message" class="w2linput" value="" style="display: none;">
					<input type="hidden" name="form_id" class="w2linput" value="1">
					</p><div class="w2lsubmit"><input type="submit" name="w2lsubmit" class="w2linput submit" value="Send"></div>
			</ul>
		</form>
	</div>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>