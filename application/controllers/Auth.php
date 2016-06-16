<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{	$access = $this->session->userdata( 'logininfo' );
	
		if ( isset( $access )) {
			 $this->dashboard();
			}else{

			$this->load->view( 'login' );
			}
	}

	public function dashboard()
	{	
		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$data['dashboard'] = 'dashboard';
		$this->load->view( 'layouts/main',$data );
	}
	public function check_login()
	{ 

		$this->form_validation->set_rules( 'email', 'Email', 'trim|required');
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect( 'auth?Please Try with valid access' );
		} else 
		{
			$this->load->model( 'auth_model' );
			$result = $this->auth_model->check_login();

			if ( $result ) 
			{
				redirect( 'auth/dashboard' );
			}else
			{
				$this->session->set_flashdata( 'errorinfo', 'Please Try with valid email and password' );
				redirect(base_url());
			}
		}
	}

	public function logout()
	{		
		$this->session->unset_userdata('logininfo');
		$this->session->sess_destroy();
		redirect( base_url() );		
	}

	public function adminlist()
	{	
		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$data['adminlist_page'] = 'adminlist';
		$data['adminlistData'] = $this->auth_model->adminlist();
		$this->load->view( 'layouts/main',$data );
	}

	public function registration_form()
	{	
		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$data['registration_page'] = 'registration_form';
		$this->load->view( 'layouts/main',$data );
	}

	public function create_admin()
	{	

		$this->form_validation->set_rules( 'name', 'Name', 'trim|required|min_length[3]|max_length[22]' );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|min_length[5]|max_length[32]|is_unique[admin.email]' );
		$this->form_validation->set_rules( 'username', 'Username', 'trim|required|min_length[3]|max_length[22]|is_unique[admin.username]' );
		$this->form_validation->set_rules( 'account_type', 'Admin Label', 'required' );
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[6]|max_length[18]' );

		if ( $this->form_validation->run() == FALSE ) 
		{
			$data['registration_page'] = 'registration_form';
			$this->load->view( 'layouts/main',$data );
		} else {		
			$this->load->model('auth_model');
			$result = $this->auth_model->create_admin();

			if ( $result ) 
			{
				redirect( 'auth/adminlist' );
			}else
			{
				redirect( 'auth/create_admin' );
			}
			}
	}

	public function edit_admin( $id = NULL )
	{	
		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$data['admin_data'] = $this->auth_model->edit_admin( $id );
		$data['edit_adminPage'] = 'edit_admin';
		$this->load->view( 'layouts/main',$data );
	}

	public function changepassword_form()
	{	
		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$data['change_password'] = 'change_password';
		$this->load->view( 'layouts/main',$data );
	}

	public function changepassword_check()
	{	

		$this->load->model( 'auth_model' );
		$data['nav'] = 'nav';
		$data['navData'] = $this->auth_model->nav_data();
		$checkemail = $this->auth_model->checkemail();
		if ( $checkemail ) {
			echo " sucess ";
		}else
		{
			echo "Fail";
		}

		// $data['change_password'] = 'change_password';
		// $this->load->view( 'layouts/main',$data );
	}

	public function update_admin( $id = NULL)
	{
		$this->load->model( 'auth_model' );
		$update_admin = $this->auth_model->update_admin( $id );
		if ( $update_admin )
		 {	
		 	$this->session->set_flashdata( 'adminupdate', $this->notification->success('Data Updated Successfully.'));
			redirect( 'auth/adminlist' );
		 }
		 else{
		 	
		 	$this->load->model( 'auth_model' );
		 	$data['nav'] = 'nav';
		 	$data['navData'] = $this->auth_model->nav_data();
		 	 	$data['edit_adminPage'] = 'edit_admin';
		 	$this->load->view( 'layouts/main',$data );
		 }
	}

	public function delete_admin( $id = NULL )
	{
		$this->load->model( 'auth_model' );
		$delete_admin = $this->auth_model->delete_admin( $id );
		if ( $delete_admin )
		 {
		 	$this->session->set_flashdata( 'adminupdate', $this->notification->danger( 'Delete your information' ) );
			redirect( 'auth/adminlist' );
		 }
		 else{

		 	$this->load->model( 'auth_model' );
		 	$data['nav'] = 'nav';
		 	$data['navData'] = $this->auth_model->nav_data();
		 	 	$data['adminlist_page'] = 'adminlist';
		 	$this->load->view( 'layouts/main',$data );
		 }
	}

	public function approve( $id = NULL, $status = NUll )
	{
		$this->load->model( 'auth_model' );
		$status = $this->auth_model->approve( $id, $status );
		if ( $status == TRUE ) {
		 	$this->session->set_flashdata( 'adminupdate', $this->notification->success( 'Change your status' ) );
			redirect( 'auth/adminlist' );
		}
		else{
			 	$this->session->set_flashdata( 'adminupdate', $this->notification->danger( 'Change your status' ) );
				redirect( 'auth/adminlist' );
		}
	}


}
