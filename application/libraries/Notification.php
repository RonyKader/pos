<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Notification
	{	

	    public function success( $message )
	    {
	        return '<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Well done!</strong> '.$message.'</div>';
	    }

	    public function danger( $message )
	    {
	    	return '<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Well done ! </strong>' .$message. '</div>';
	    }
	}
 ?>