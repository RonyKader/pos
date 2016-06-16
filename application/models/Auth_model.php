<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth_model extends CI_Model 
	{
		
		public function check_login()
		{	
			$email = $this->input->post( 'email' );
			$password = md5( $this->input->post( 'password' ));

			$data = array(
				'email' => $email,
				'password' => $password,
				'status' => 2
				);
			$result = $this->db->get_where( 'admin', $data );

			if ( $result->num_rows() == 1 ) 
			{
				$data = array(
					'id' => $result->row(0)->id,
					'account_type' => $result->row(0)->account_type,
					'username' => $result->row(0)->username,
					'permission' => $result->row(0)->permission,
					);
				
				$this->session->set_userdata( 'logininfo',$data );

				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function create_admin()
		{
			$name     = $this->input->post( 'name' );	
			$email    = $this->input->post( 'email' );	
			$username = $this->input->post( 'username' );	
			$account_type = $this->input->post( 'account_type' );	
			$password = md5($this->input->post( 'password' ));	
			$creator = $this->session->userdata( 'logininfo' );
			$permission_set = $this->input->post('permission' );

				$permission = "";
				foreach ( $permission_set as $key => $value) {
				$permission .= $value. ", ";
				}

			$permission_value = (string)$permission;
			$permission_code = rtrim( $permission_value, ', ');

			$created_by = $creator['id'];
			$created_time = date( 'Y-m-d H:i:s');

			$data = array(
				'name' => $name,
				'email' => $email,
				'username' => $username,
				'password' => $password,
				'account_type' => $account_type,
				'created_by' => $created_by,
				'created_time' => $created_time,
				'permission' => $permission_code
				);
            $data = $this->security->xss_clean($data);
			$result = $this->db->insert( 'admin',$data );

			if ( $result )
			{
			 return TRUE;
			}else
			{
				return FALSE;
			}
		}

		public function adminlist()
		{
			$query = $this->db->get( 'admin' );
			return $query->result();
		}

		public function nav_data()
		{

			$id = $this->session->userdata( 'logininfo' );
			$get_permission = explode( ",", $id['permission'] );

			if ( $id['account_type'] != 1 ) {
				$this->db->where_in( 'id', $get_permission );		
				$this->db->where( array( 'status' => 2 ) );						
				$query = $this->db->get( 'admin_menu' );
				return $query->result();
			}else{
				
				$this->db->where( array( 'status' => 2 ) );						
				$query = $this->db->get( 'admin_menu' );
				return $query->result();
			}

		}

		public function nav_permission()
		{
			$id = $this->session->userdata( 'logininfo' );

			// var_dump( $id['permission'] ); exit();

			$this->db->where( array( 'id' => $id['id'] ));
			$query = $this->db->get( 'admin' );
			return $query->result();
		}

		public function admin_access(){
			$id = $his->session->userdata( 'logininfo' );
			$get_permission = explode( ",", $id['permission']);

			if ( $id['account_type'] != 1 ) {
				$this->db->where_in( 'id', $get_permission );
			}
			$this->db->where( array( 'id' => $id['id'] ));

		}

		public function edit_admin( $id )
		{
			$data = array(
				'id' => $id
				);
			$query = $this->db->get_where( 'admin',$data );

			if ( $query->num_rows() == 1 ) 
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}


		public function update_admin( $id = NULL )
		{
			$updated_by = $this->session->userdata( 'logininfo' );
			$password = md5( $this->input->post( 'password' ) );
			$permission_set = $this->input->post('permission' );

			$permission = "";
			foreach ( $permission_set as $key => $value) {
			$permission .= $value. ", ";
			}

			$permission_value = (string)$permission;
			$permission_code = rtrim( $permission_value, ', ');

			$data = array(
				'name' => $this->input->post( 'name' ),
				'email' => $this->input->post( 'email' ),
				'username' => $this->input->post( 'username' ),
				'password' => $password,
				'permission' => $permission_code,
				'modified_by' => $updated_by['id']
				);
		
			$data = $this->security->xss_clean( $data );
			$this->db->where( 'id',$id );
			$update_admin = $this->db->update( 'admin',$data ); 
			if ( $update_admin ) {
				return TRUE;
			}
			else{
				return FALSE;
			}
		}


		public function delete_admin( $id = NULL )
		{
			$this->db->where( 'id',$id );
			$delete_admin = $this->db->delete( 'admin' );
			if ( $delete_admin ) 
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function approve( $id, $status )
		{	
			$id = $_GET['id'];
			$status = $_GET['status'];
			if ( $status == 1 ) 
			{
				$this->db->set( 'status', 2 );
				$this->db->where( 'id',$id );
				$this->db->update( 'admin' );
				
			}else
			{
				$this->db->set( 'status', 1 );
				$this->db->where( 'id',$id );
				$this->db->update( 'admin' );
			}
			return TRUE;
		}

		public function checkemail()
		{
		
			$email = $this->input->post( 'email' );
			$password = md5( $this->input->post( 'password' ) );

			$data = array(
				'email' => $email,
				'password' => $password,				
				);
			$result = $this->db->get_where( 'admin', $data );

			if ( $result->num_rows() == 1 )
			{
				return TRUE;
			} 
			else
			{
				return FALSE; 
			}

			
		}
	
	}
?>