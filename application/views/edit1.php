<html>
<head>

	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	</head>
	<body>
		<h3 style="padding-left: 100px; padding-top=10px">Update User</h3>
		<hr>

		<div class="container">
		<form method="POST" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['User_id'];?>">

			<div class="row"> 
				<div class="col-md-6">
					<div class="form-group">
						<label>Name:- </label>
						<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control" >
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
