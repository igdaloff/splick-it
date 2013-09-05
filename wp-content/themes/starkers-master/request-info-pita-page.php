<?php
/*
Template Name: request info pita
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<div class="form-page">
	<?php include("parts/shared/header.php"); ?>
	<div class="wrapper form-page-inner">
		<h2>Request for Info and&nbsp;Pricing - Pita Pit</h2>

<form method="post" novalidate enctype="multipart/form-data" action="http://www.formstack.com/forms/index.php" class="fsForm fsSingleColumn fsMaxCol1" id="fsForm1400682">
<input type="hidden" name="form" value="1400682" />
<input type="hidden" name="viewkey" value="6BYJm2qINc" />
<input type="hidden" name="hidden_fields" id="hidden_fields1400682" value="" />
<input type="hidden" name="_submit" value="1" />
<input type="hidden" name="incomplete" id="incomplete1400682" value="" />
<input type="hidden" name="style_version" value="3" />
<div role="alert" id="requiredFieldsError" style="display:none;">Please fill in a valid value for all required fields</div>
<div role="alert" id="invalidFormatError" style="display:none;">Please ensure all values are in a proper format.</div>
<div role="alert" id="resumeConfirm" style="display:none;">Are you sure you want to leave this form and resume later?</div>
<div role="alert" id="fileTypeAlert" style="display:none;">You must upload one of the following file types for the selected field:</div>
<div role="alert" id="embedError" style="display:none;">There was an error displaying the form. Please copy and paste the embed code again.</div>
<div role="alert" id="applyDiscountButton" style="display:none;">Apply Discount</div>
<div role="alert" id="dcmYouSaved" style="display:none;">You saved</div>
<div role="alert" id="dcmWithCode" style="display:none;">with code</div>
<div role="alert" id="submitButtonText" style="display:none;">Submit Form</div>
<div role="alert" id="submittingText" style="display:none;">Submitting</div>
<div class="fsPage" id="fsPage1400682-1">
<div class="fsSection fs1Col">
<div id="fsRow1400682-1" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical  fsSpan100 " id="fsCell18643820">
<h4 id="label18643820" class="fsLabel fsRequiredLabel">Franchise Owner</h4>
<div class="fsSubFieldGroup">
<div class="fsSubField">
<label class="fsRequiredLabel" for="field18643820-first">First Name<span class="hidden">*</span></label>
<input type="text" id="field18643820-first" name="field18643820-first" size="20" value="" required class="fsField fsFieldName fsRequired" aria-required="true"  />
</div>
<div class="fsSubField">
<label class="fsRequiredLabel" for="field18643820-last">Last Name<span class="hidden">*</span></label>
<input type="text" id="field18643820-last" name="field18643820-last" size="20" value="" required class="fsField fsFieldName fsRequired" aria-required="true"  />
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="fsRow1400682-2" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical  fsSpan100 " id="fsCell18643826">
<label id="label18643826" class="fsLabel fsRequiredLabel" for="field18643826">Email<span class="fsRequiredMarker">*</span></label>
<input type="email" id="field18643826" name="field18643826" size="50" required="required"  placeholder="example@email.com"  value=""  class="fsField fsFormatEmail fsRequired" aria-required="true"  />
</div>
</div>
<div id="fsRow1400682-3" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical  fsSpan100 " id="fsCell18643828">
<label id="label18643828" class="fsLabel fsRequiredLabel" for="field18643828">Phone<span class="fsRequiredMarker">*</span></label>
<input type="tel" id="field18643828" name="field18643828" size="20" required   value=""  placeholder="123-456-7890" class="fsField fsFormatPhoneUS fsRequired" aria-required="true"  />
</div>
</div>
<div id="fsRow1400682-4" class="fsRow fsFieldRow fsLastRow">
<div class="fsRowBody fsCell fsFieldCell  fsFirst fsLast fsLabelVertical  fsSpan100 " id="fsCell18643837" aria-describedby="fsSupporting18643837">
<label id="label18643837" class="fsLabel fsRequiredLabel" for="field18643837">Pita Pit Store ID<span class="fsRequiredMarker">*</span></label>
<input type="text" id="field18643837" name="field18643837" size="7" required  placeholder="US-091" value=""  class="fsField fsRequired " aria-required="true"  />
<div id="fsSupporting18643837" class="fsSupporting">Example: US-091</div>
</div>
</div>
</div>
</div>
<div id="fsSubmit1400682" class="fsSubmit fsPagination" >
<button type="button" id="fsPreviousButton1400682" class="fsPreviousButton" value="Previous Page" style="display:none; "><span class="fsFull">Previous</span><span class="fsSlim">&larr;</span></button>
<button type="button" id="fsNextButton1400682" class="fsNextButton" value="Next Page" style="display:none; "><span class="fsFull">Next</span><span class="fsSlim">&rarr;</span></button>
<input id="fsSubmitButton1400682" class="fsSubmitButton button" style="display:block;" type="submit" value="Submit Form" />
<div class="clear"></div>
</div>
<script type="text/javascript" src="http://www.formstack.com/forms/js/3/jquery.min.js"></script>
<link href="http://www.formstack.com/forms/css/3/jquery-ui.css?20130225" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.formstack.com/forms/js/3/jquery-ui.min.js?20130225"></script>
<script type="text/javascript" src="http://www.formstack.com/forms/js/3/scripts.js?20130521"></script>
<script type="text/javascript">
if(window.addEventListener) {
window.addEventListener('load', loadFormstack, false);
} else if(window.attachEvent) {
window.attachEvent('onload', loadFormstack);
} else {
loadFormstack();
}
function loadFormstack() {
var form1400682 = new Formstack.Form(1400682);
form1400682.logicFields = [];
form1400682.calcFields = [];
form1400682.init();
window.form1400682 = form1400682;
};
</script>
</form>
</div>
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>