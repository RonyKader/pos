<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Menu_model extends CI_Model {
	
		public function create_menu()
		{
			$menu_parent = $this->input->post( 'menu_parent' );	
			$name = $this->input->post( 'menu_name' );	
			$link = $this->input->post( 'menu_link' );	
			$menu_sorting = $this->input->post( 'menu_sorting' );	
			$created_time = date( 'Y-m-d H:i:s');

			$data = array(
				'menu_parent' => $menu_parent,
				'menu_name' => $name,
				'menu_link' => $link,
				'menu_sorting' => $menu_sorting,
				'created_time' => $created_time
				);
			$result = $this->db->insert( 'admin_menu',$data );

			if ( $result )
			{
			 return TRUE;
			}else
			{
				return FALSE;
			}
		}

		public function menuData()
		{
					
			$query = $this->db->get( 'admin_menu' );
			return $query->result();
		}

		public function approve( $id, $status )
		{	
			$id = $_GET['id'];
			$status = $_GET['status'];
			if ( $status == 1 ) 
			{
				$this->db->set( 'status', 2 );
				$this->db->where( 'id',$id );
				$this->db->update( 'admin_menu' );
				
			}else
			{
				$this->db->set( 'status', 1 );
				$this->db->where( 'id',$id );
				$this->db->update( 'admin_menu' );
			}
			return TRUE;
		}
	
	}


 ?>