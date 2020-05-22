<html>
<head>

	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<script >
			function validate() 
			{

				var email=document.forms["createUser"]["email"].value;
				var email_regx=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
				if(email_regx.test(email) == false)
				{
					alert("Invalid email..");
				}

				var num=document.forms["createUser"]["mobile_no"].value;
				var regex_num = /^[0-9]{10}$/;
				if(regex_num.test(num)== false)
				{
					alert("Number only upto 10 ");
					return false;
				} 
				var pin=document.forms["createUser"]["pin_code"].value;
				var regex_pin=/^[0-9]{6}|[0-9]{3}\s[0-9]{3}^/; 
				if(regex_pin.test(pin)== false)
				{
					alert("Pincode upto 6");
					return false;
				}
			}
	</script>
	</head>
	<body>
		<h3 style="padding-left: 100px; padding-top=10px">Update User</h3>
		<hr>

		<div class="container">
		<form method="POST" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['User_id'];?>" onSubmit='return validate();'>

			<div class="row"> 
				<div class="col-md-6">
					<div class="form-group">
						<label>Name:- </label>
						<input type="text" name="name" value="<?php echo set_value('name',$user['Name']);?>" class="form-control" pattern="[a-zA-Z]+">
						<?php echo form_error('name');?>
					
					</div>
					<div class="form-group">
						<label>Email:- </label>
						<input type="text" name="email" value="<?php echo set_value('email',$user['Email_id']);?>" class="form-control" >
						<?php echo form_error('email');?>
					</div>
					
					<div class="form-group">
						<label>Mobile No:- </label>
						<input type="tel" name="mobile_no" value="<?php echo set_value('mobile_no',$user['Mobile_no']);?>" class="form-control" >
						<?php echo form_error('mobile_no');?>
					
					</div>
					
					<div class="form-group">
						<label>DOB:- </label>
						<input type="date" name="dob" value="<?php echo set_value('dob',$user['DOB']);?>" class="form-control"  >
						<?php echo form_error('dob');?>
						

					</div>
					<div class="form-group">
						<label>Pin Code:- </label>
						<input type="text" name="pin_code" value="<?php echo set_value('pin_code',$user['Pin_code']);?>" class="form-control"  >
						<?php echo form_error('pin_code');?>
						

					</div>
					<div class="form-group">
						<button class="btn btn-primary">Update</button>
						<a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>
					</div>

				</div>
				
			</div>
			</form/>
		</div>
	</body>
</html>
