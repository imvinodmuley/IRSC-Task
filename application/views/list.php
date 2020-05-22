<html>
	<head>
		
			<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	</head>
		<body>
		<div class="container" style="padding-top: 10px;">
			
				<div class="col-md-12">
					<?php 
					$success=$this->session->userdata('success');
					if($success!="")
					{
						?>
						<div class="alert alert-success"><?php echo $Success?></div>
						<?php
					}		

					?>
					<?php 
					$failure=$this->session->userdata('failure');
					if($failure!="")
					{
						?>
						<div class="alert alert-success"><?php echo $failure;?></div>
						<?php
					}		

					?>
				</div>
			
			<hr>
			<div class="row">
				<div class="col-12" style="padding-left: 100px">
						<a  href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-primary"style="margin-left: 900px;margin-bottom: 10px;">Create</a>
						
				</div>
				<div class="col-md-12">
					<table class="table table-striped">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile no</th>
							<th>DOB</th>
							<th>Pin Code</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php if(!empty($users)) { foreach ($users as $user) {?>
						<tr>
							<td><?php echo $user['User_id']?></td>
							<td><?php echo $user['Name']?></td>
							<td><?php echo $user['Email_id']?></td>
							<td><?php echo $user['Mobile_no']?></td>
							<td><?php echo $user['DOB']?></td>
							<td><?php echo $user['Pin_code']?></td>
							<td><a href="<?php echo base_url().'index.php/user/edit/'.$user['User_id']?>" class="btn btn-primary">Edit</td>
							<td><a href="<?php echo base_url().'index.php/user/delete/'.$user['User_id']?>" class="btn btn-primary">Delete</td>
						</tr>
						<?php } } else {?>
						<tr>
							<td colspan="5">Record not found</td>
						</tr>
						<?php }?>
					</table>
				</div>
			</div>
		</div>		
		</body>
</html>