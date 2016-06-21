<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap  material-table-widget">
            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <div class="data-action-bar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget-header">
                                    <?php 
                                        $upaderMsg = $this->session->flashdata( 'adminupdate' );
                                        if ( isset( $upaderMsg )) :?>
                                        <?php echo $this->session->flashdata( 'adminupdate' );?>                                 
                                    <?php endif;?>                                       
                                    <h3>All Admin List</h3>
                                   
                                </div>
                            </div>
                                <?php $access = $this->session->userdata( 'logininfo' ); ?>
                                <?php if ( $access['account_type'] == 1 || $access['account_type'] == 2 ) : ?>
                                    <div class="col-md-6">
                                        <div class="widget-header pull-right">
                                            <h3><a href="<?php echo base_url();?>auth/registration_form" class="btn btn-primary">Add admin</a></h3>
                                        </div>
                                    </div>                          

                                <?php endif; ?>      


                        </div>
                    </div>
                    <table class="table table-striped data-tbl">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Admin Type</th>
                            <th>Created Date</th>                      
                            <th class="td-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if ( $adminlistData ) {
                                foreach ( $adminlistData as $admininfo ) { ?>
                            <tr>
                                <td><?php echo $admininfo->name;?></td>
                                <td><?php echo $admininfo->email;?></td>
                                <td><?php echo $admininfo->username;?></td>
                                <td>
                                <?php 
                                    if ( $admininfo->account_type == 1 ) : ?>
                                        Super Admin
                                <?php endif; ?>

                                <?php 
                                    if ( $admininfo->account_type == 2 ) : ?>
                                        Admin
                                <?php endif; ?>

                                <?php 
                                    if ( $admininfo->account_type == 3 ) : ?>
                                        Editor
                                <?php endif; ?>

                                </td>

                                <td>
                                <?php 
                                    $basDate = $admininfo->created_time;
                                    $data = date( 'F j, Y, g:i,A', strtotime( $basDate ));
                                     echo $data;                                 
                                ?>
                                    
                                </td>
                                <td class="td-center">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group" role="group">

                                    <?php
                                        if ( $admininfo->status == 2 ) 
                                        { ?>
                                           <a href="<?php echo base_url();?>/auth/approve?id=<?php echo $admininfo->id;?>&status=<?php echo $admininfo->status;?>"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a>
                                            
                                        <?php }else{ ?>
                                        <a href="<?php echo base_url();?>/auth/approve?id=<?php echo $admininfo->id;?>&status=<?php echo $admininfo->status;?>"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                        <?php }

                                    ?>
                                            <a href="<?php echo base_url();?>auth/edit_admin/<?php echo $admininfo->id;?>"><i class="zmdi zmdi-edit"></i></a>
                                      <?php $currentuser =  $this->session->userdata( 'logininfo' );?>
                                       <?php if( $currentuser['username'] != $admininfo->username ) :?>
                                            <a href="<?php echo base_url();?>auth/delete_admin/<?php echo $admininfo->id;?>"><i class="zmdi zmdi-close"></i></a>
                                        <?php else: ?>
                                            <a href="javascript:void(0);" class="disabled"><i class="zmdi zmdi-close"></i></a>                                      
                                       <?php endif;?>     
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                    
                                <?php }
                            }

                         ?>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>