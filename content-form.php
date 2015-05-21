<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.validate.min.js"></script>
<script>
jQuery(function ($) {
	$(document).ready(function() {
		$("#signupForm").validate({
			//errorLabelContainer: $("#signupForm div.field_error"),
			// validate signup form on keyup and submit
			rules: {
				"62379[71516]": "required", // First name
				"62380[71517]": "required", // Last name
				"62381": { // Email
					required: true,
					email: true
				},
				
			},
			messages: {
				"62379[71516]": "Please enter your first name",
				"62380[71517]": "Please enter your last name",
				"62381": "Please enter a valid email address",
				
			},
			
			submitHandler: function() {
				//alert("submitted!");
				form.submit();
			}
			
		});
	});
});
</script>

<div class="container-fluid">
  <form action="http://demandengine.bm23.com/public/webform/process/" method="post" id="signupForm">
    <input type="hidden" name="fid" value="b52xgcfc02g24z6jwkfore4xadq7s" />
<input type="hidden" name="sid" value="d4a671f6b0808e341eee3571eae99448" />
<input type="hidden" name="delid" value="" />
<input type="hidden" name="subid" value="" />
<input type="hidden" name="td" value="" />
<input type="hidden" name="formtype" value="addcontact" />
    <div class="row pad-one-b">
      <div class="col-xs-6" field_id="71516">
        <label>First Name <span class="red">*</span></label>
        <div class="field">
          <input type="text" id="field_71516" class="form-control" name="62379[71516]" value="" />
        </div>
      </div>
      <div class="col-xs-6" field_id="71517">
        <label>Last Name <span class="red">*</span></label>
        <div class="field">
          <input type="text" id="field_71517" class="form-control" name="62380[71517]" value="" />
        </div>
      </div>
    </div>
    <div class="row pad-one-b">
      <div class="col-xs-6">
        <label>E-mail Address <span class="red">*</span></label>
        <div class="field">
          <input type="text" class="form-control" name="62381" value=""  />
        </div>
      </div>
      <div class="col-xs-6" field_id="71527">
        <label>Phone Number </label>
        <div class="field">
          <input type="text" id="field_71525" class="form-control" name="62382[71525]" value="" />
        </div>
      </div>
    </div>
    <div class="row pad-one-b">
      <div class="col-xs-6">
        <label>Current College/University</label>
        <div class="field">
          <input type="text" id="field_72021" class="form-control" name="62389[72021]" value="" />
        </div>
      </div>
      <div class="col-xs-6" field_id="71582">
        <label>How Did You Hear About Winterlude?</label>
        <div class="field">
          <select id="field_71582" class="form-control" name="62392[71582]" >
<option value="Please choose..." selected="selected">Please choose...</option>
<option value="Billboard" >Billboard</option>
<option value="Daily Orange" >Daily Orange</option>
<option value="eLearners Website" >eLearners Website</option>
<option value="Facebook" >Facebook</option>
<option value="Family/Friend Referral" >Family/Friend Referral</option>
<option value="General Awareness of SU" >General Awareness of SU</option>
<option value="Internet Search" >Internet Search</option>
<option value="Received Email" >Received Email</option>
<option value="Recruiting Event" >Recruiting Event</option>
<option value="SU website" >SU website</option>
<option value="Syracuse.com" >Syracuse.com</option>
<option value="Web Ad" >Web Ad</option>
<option value="Other" >Other</option>
</select>
        </div>
      </div>
    </div>
    <div class="row pad-one-b">
      <div class="col-xs-9">
        <label>Questions About Winterlude?</label>
        <p>Provide us with some details as to what you're looking to achieve this winter at Syracuse University</p>
        <div class="field">
          <textarea id="field_72646" class="form-control" rows="5" cols="35" name="62390[72646]" ></textarea>
        </div>
      </div>
    </div>
    <div class="row pad-one-b">
      <div class="col-xs-12">
        <button type="submit" name="Submit" class="btn btn-info"><i class="fa fa-arrow-right"></i> Submit Request</button>
        <input type="hidden" id="field_71531" class="hidden field" name="62385[71531]" value="" />
        <input type="hidden" name="62391[407612]" value="true" />
        <input type="hidden" id="field_71535" class="hidden field" name="62387[71535]" value="Inquiry" />
      </div>
    </div>
  </form>
</div>
<script>
//
var currentDate = new Date()
var day = currentDate.getDate()
if (day < 10) { day = '0' + day; }
var month = currentDate.getMonth() + 1
if (month < 10) { month = '0' + month; }
var year = currentDate.getFullYear()
var newDay = month + "/" + day + "/" + year
document.getElementById("field_71531").value = newDay;
</script> 
