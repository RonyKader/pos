<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Menu extends MY_Controller {

		// List all your items
		public function index()
		{	
			$this->load->model( 'auth_model' );
			$data['nav'] = 'nav';
			$data['navData'] = $this->auth_model->nav_data();			
			$this->load->model( 'menu_model' );
			$data['menuData'] = $this->menu_model->menuData();
			$data['menu_list'] = 'menu_list';
			$this->load->view( 'layouts/main', $data );
		}

		public function createMenuForm()
		{
			$this->load->model( 'auth_model' );
			$data['nav'] = 'nav';
			$data['navData'] = $this->auth_model->nav_data();						
			$data['menu_form'] = 'create_menu';
			$this->load->view( 'layouts/main', $data );
		}
	
		// Add a new menu item
		public function create_menu()
		{
			$this->form_validation->set_rules('menu_name', 'Menu Name', 'trim|required|xss_clean|max_length[30]|is_unique[admin_menu.menu_name]');

			$this->form_validation->set_rules('menu_link', 'Menu Link', 'trim|required|xss_clean|max_length[30]');

			if ( $this->form_validation->run() == FALSE ) 
			{
				$data['menu_form'] = 'create_menu';
				$this->load->view( 'layouts/main', $data );
			} else {
				$this->load->model( 'menu_model' );
				$result = $this->menu_model->create_menu();
				if ( $result )
				{
					$this->session->set_flashdata( 'success', $this->notification->success( 'You have sucessfully add a menu' ));
					$this->load->model( 'auth_model' );
					$data['nav'] = 'nav';
					$data['navData'] = $this->auth_model->nav_data();						
					$data['menu_form'] = 'create_menu';
					$this->load->view( 'layouts/main', $data );
				}else{
					echo "bad news";
				}
			}

		}
	
		//Update one item
		public function update( $id = NULL )
		{
	
		}
	
		//Delete one item
		public function delete( $id = NULL )
		{
	
		}


		public function approve( $id = NULL, $status = NUll )
		{
			$this->load->model( 'menu_model' );
			$status = $this->menu_model->approve( $id, $status );
			if ( $status == TRUE ) {
			 	$this->session->set_flashdata( 'menuupdate', $this->notification->success( 'Change your status' ) );
				redirect( 'menu' );
			}
			else{
				 	$this->session->set_flashdata( 'menuupdate', $this->notification->danger( 'Sorry can\'t change status' ) );
					redirect( 'menu' );
			}
		}



	}
	


 ?>