        <div class="row">
            <div class="col-md-6">
                <div class="widget-wrap">
                    <div class="widget-header block-header">
                        <h3>Admin Registration</h3>
                       
                        <div class="alert-danger">
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                        <?php if ( $admin_data ): ?>

                            <?php foreach ( $admin_data as $admin_info ) : ?>              
                                                    
                        <?php 

                            $data = array(
                                'class' => 'j-forms'
                                );
                            echo form_open( 'auth/update_admin/'.$admin_info->id, $data );
                         ?>
                            <div class="form-content">
                                    <!-- start name -->
                                    <div class="unit">
                                        <div class="input">
                                            <label class="icon-left" for="name">
                                                <i class="fa fa-user"></i>
                                            </label>

                                            <?php 
                                                $data = array(
                                                    'type' => 'text',
                                                    'name' => 'name',
                                                    'class' => 'form-control',
                                                    'value' => $admin_info->name,
                                                    'placeholder' => 'Name'
                                                    );
                                                echo form_input( $data );
                                             ?>
                                        </div>
                                    </div>
                                    <!-- end name -->

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
                                                        'value'  => $admin_info->email,
                                                        'placeholder' => 'Email'
                                                        );
                                                    echo form_input( $data );
                                                 ?>
                                            </div>
                                        </div>

                                        <div class="unit">
                                            <div class="input">
                                                <label class="icon-left" for="phone">
                                                    <i class="fa fa-male"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'text',
                                                        'name' => 'username',
                                                        'class' => 'form-control',
                                                        'value' => $admin_info->username,
                                                        'placeholder' => 'Username'
                                                        );
                                                    echo form_input( $data );
                                                 ?>
                                            </div>
                                        </div>
                                   <?php 
                                        $selected = $admin_info->account_type;
                                    ?>
                                    <!-- end email phone -->
                                    <div class="unit">
                                        <div class="input">
                                            <select class="form-control" name="account_type">
                                                <option selected="seleted" disabled>Select Admin Label</option>
                                                <option <?php if( $selected == 1 ){ echo "selected='selected'";} ?> value="1">Super Admin</option>
                                                <option <?php if( $selected == 2 ) {echo "selected='selected'";} ?> value="2">Admin</option>
                                                <option <?php if( $selected == 3 ) {echo "selected='selected'";} ?> value="3">Editor</option>
                                            </select>
                                        </div>
                                    </div>        
                             

                                </div>
                                <h2>Page Permission</h2>
                                <label><input type="checkbox" id="checkAll"/>Selecte All Permission</label>
                                <div class="divider gap-bottom-25"></div>

                                <!-- start message -->
                                <div class="unit">
                                    <div class="input">
                                        <ul class="list-unstyled list-inline">
                                        <?php 
                                        $permission_data = $admin_info->permission;
                                         $permission = explode( ",", $permission_data);

                                         
                                            $data = array(
                                                'status' => 2
                                                );
                                            
                                            $shwo_menu = $this->db->get_where( 'admin_menu',$data );
                                            foreach ($shwo_menu->result() as $menu ) {
                                            ?>    
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="permission[]" <?php if( in_array( $menu->id,$permission )){ echo 'checked'; } ;?> value="<?php echo $menu->id;?>" /> <?php echo $menu->menu_name;?>
                                                </label>
                                            </li>
                                            <?php }
                                         ?>

                                            
                                        </ul>                                      
                                       
                                    </div>
                                </div>
                                
                                  
                                   
                                <!-- end /.content -->

                                <div class="form-footer">
                                <?php 
                                    $data = array(
                                        'type' => 'submit',
                                        'name' => 'create_admin',
                                        'class' => 'btn btn-success primary-btn',
                                        'value' => 'Update Info'
                                        );
                                    echo form_submit( $data );
                                 ?>
                                </div>
                                <!-- end /.footer -->
                            <?php echo form_close(); ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>