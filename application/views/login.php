<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>POS SYSTEM</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/pages.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/common.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/responsive.css">
</head>
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
<?php 
    $data = array(
        'class' => 'j-forms'
        );
    echo form_open( 'auth/check_login', $data );
 ?>

        <div class="login-form-header">
            <div class="logo">
                <h2>POS SYSTEM</h2>
            </div>
        </div>
        <div class="alert-danger">
            <?php 
                $error = $this->session->flashdata( 'errorinfo' );
                if ( isset( $error ))
                 {
                    echo $error;
                 }
             ?>
        </div>
        <div class="login-form-content">

            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <?php 
                        $data = array(
                            'type' => 'email',
                            'name'  => 'email',
                            'class' => 'form-control login-frm-input',
                            'placeholder' => 'Username / Email'
                            );
                        echo form_input( $data );
                     ?>
                   
                </div>
            </div>
            <!-- end login -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>

                    <?php 
                        $data = array(
                            'type' => 'password',
                            'name'  => 'password',
                            'class' => 'form-control login-frm-input',
                            'placeholder' => 'password'
                            );
                        echo form_password( $data );
                     ?>
                     	<span class="hint">
							<a href="#" class="link">Forgot password?</a>
						</span>
                </div>
            </div>
            <!-- end password -->


            <!-- start keep logged -->
            <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div>
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
        <?php 
            $data = array(
                'type' => 'submit',
                'class' => 'btn-block btn btn-primary',
                'name'  => 'login',
                'value' => 'Sign in'
                );
            echo form_submit( $data );
         ?>
        </div>
<?php echo form_close(); ?>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">all rights reserved <i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="">CODE NINJA</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="<?php echo base_url();?>/assets/js/lib/jquery.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery-migrate.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jRespond.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/hammerjs.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.hammer.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/smoothscroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/smart-resize.js"></script>

<script src="<?php echo base_url();?>/assets/js/lib/jquery.validate.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.form.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/j-forms.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/login-validation.js"></script>
</body>

</html>