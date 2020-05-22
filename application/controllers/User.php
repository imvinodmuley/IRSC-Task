<?php
class User extends CI_controller
{
	function index()
	{
		$this->load->model('User_model');
		$this->load->view('list');
		$users=$this->User_model->all();
		$data=array();


		$data['users']=$users;
		$this->load->view('list',$data);
	}

	function edit($user_id)
	{
		$this->load->model('User_model');
		$user=$this->User_model->getUser($user_id);	

		$data=array();
		$data['user']=$user;

		$this->load->model('User_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('mobile_no','Mobile_no','required');
		$this->form_validation->set_rules('dob','DOB','required');
		$this->form_validation->set_rules('pin_code','Pin_code','required');


		if($this->form_validation->run()==false)
		{
			$this->load->view('edit',$data);
		}
		else
		{
			$formArray =array();
			$formArray['Name']=$this->input->post('name');
			$formArray['Email_id']=$this->input->post('email');
			$formArray['Mobile_no']=$this->input->post('mobile_no');
			$formArray['DOB']=$this->input->post('dob');
			$formArray['Pin_code']=$this->input->post('pin_code');	
			$this->User_model->updateUser($user_id,$formArray	);
			$this->session->set_flashdata('Success','Record Updated');
			redirect(base_url().'index.php/user/index');		

		}
	}
	function create()
	{
		$this->load->model('User_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('mobile_no','Mobile_no','required');
		$this->form_validation->set_rules('dob','DOB','required');
		$this->form_validation->set_rules('pin_code','Pin_code','required');

		if($this->form_validation->run()==false)
		{
					$this->load->view('create');
		}
		else
		{
			$formArray =array();

			$formArray['Name']=$this->input->post('name');
			$formArray['Email_id']=$this->input->post('email');
			$formArray['Mobile_no']=$this->input->post('mobile_no');
			$formArray['DOB']=$this->input->post('dob');
			$formArray['Pin_code']=$this->input->post('pin_code');	
			$this->User_model->create($formArray);
			$this->session->set_flashdata('Success','Record added');
			redirect(base_url().'index.php/user/index');
		}



	}
	function delete($user_id)
	{
		$this->load->model("User_model");
		$user=$this->User_model->getUser($user_id);

		if(empty($user))
		{
			$this->session->set_flashdata('Failure','Recod Not Found');
			redirect(base_url().'index.php/user/index');

		}

		$this->User_model->deleteUser($user_id);
		$this->session->set_flashdata('Success','Record Deleted');
		redirect(base_url().'index.php/user/index');

	}
}

	
?>