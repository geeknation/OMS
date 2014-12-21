<!-- <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Employee</a></li>
  <li role="presentation"><a href="#">Normal User</a></li>
</ul> -->

<form class="create-user-form">
	<div class="form-group">
		<label for="">First Name</label>
		<input type="text" class="form-control" id="first_name" name="first_name">
	</div>
	<div class="form-group">
		<label for="">Other Names</label>
		<input type="text" class="form-control" id="other_names" name="other_names">
	</div>
	<div class="form-group">
		<label for="">Phone Number</label>
		<input type="text" class="form-control" id="phone_number" name="phone_number">
	</div>
	<div class="form-group">
		<label for="">Email Address</label>
		<input type="text" class="form-control" id="email_address" name="email_address">
	</div>
	<div class="form-group">
		<label for="">ID Number</label>
		<input type="text" class="form-control" id="id_number" name="id_number">
	</div>
	
	<div class="form-group">
		<label for="">Residence</label>
		<input type="text" class="form-control" id="residence" name="residence">
	</div>
	<!-- <div class="form-group">
		<label for="">Passport Photo</label>
		<input type="file" class="form-control" id="employee_photo" name="employee_photo">
	</div> -->
	<div class="form-group">
		<label for="">Role</label>
		<select class="form-control" id="employee_role" name="employee_role">
			<option>Select Employee Role</option>
			<option>Administrator</option>
			<option>Operator</option>
		</select>
	</div>
	<hr>
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" class="form-control" id="username" name="username">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>
	<div class="form-group">
		<label for="">Confirm Password</label>
		<input type="password" class="form-control" id="confirm_password" name="confirm_password">
	</div>
	<div class="user-msg">
		<p></p>
	</div>
</form>
