        <div class="row">
            <div class="col-md-6">
                <div class="widget-wrap">
                    <div class="widget-header block-header">
                        <h3>Change Your Password</h3>
                        <div class="alert-danger">
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                        <?php 
                            $data = array(
                                'class' => 'j-forms'
                                );
                            echo form_open( 'auth/changepassword_check', $data );
                         ?>
                            <div class="form-content">
                                    <!-- start email phone -->
                                        <div class="unit">
                                            <div class="input">
                                                <label class="icon-left" for="email">
                                                    <i class="fa fa-envelope-o"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'email',
                                                        'name' => 'email',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Email'
                                                        );
                                                    echo form_input( $data );
                                                 ?>
                                            </div>
                                        </div>

                                        <div class="unit">
                                            <div class="input">
                                                <label class="icon-left" for="phone">
                                                    <i class="zmdi zmdi-key"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'password',
                                                        'name' => 'password',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Old password'
                                                        );
                                                    echo form_password( $data );
                                                 ?>
                                            </div>
                                        </div>
                                    
                                    <!-- end email phone -->
     

                                    <!-- start guests -->
                                        <div class="unit">
                                            <div class="input">
                                                <label class="icon-left" for="adults">
                                                <i class="zmdi zmdi-key"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'password',
                                                        'name' => 'password',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'New Password'
                                                        );
                                                    echo form_password( $data );
                                                 ?>
                                            </div>
                                        </div>
                                    <!-- end guests -->
                                </div>
                                <!-- end /.content -->

                                <div class="form-footer">
                                <?php 
                                    $data = array(
                                        'type' => 'submit',
                                        'name' => 'change_password',
                                        'class' => 'btn btn-success primary-btn',
                                        'value' => 'Change password'
                                        );
                                    echo form_submit( $data );
                                 ?>
                                </div>
                                <!-- end /.footer -->
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>