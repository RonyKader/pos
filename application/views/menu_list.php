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
                                        $upaderMsg = $this->session->flashdata( 'menuupdate' );
                                        if ( isset( $upaderMsg )) :?>
                                        <?php echo $this->session->flashdata( 'menuupdate' );?>                                 
                                    <?php endif;?>                                        
                                    <h3>All Admin List</h3>
                                   
                                </div>
                            </div>
                                <?php $access = $this->session->userdata( 'logininfo' ); ?>
                                <?php if ( $access['account_type'] == 1 || $access['account_type'] == 2 ) : ?>
                                    <div class="col-md-6">
                                        <div class="widget-header pull-right">
                                            <h3><a href="<?php echo base_url();?>menu/createMenuForm" class="btn btn-primary">Create Menu</a></h3>
                                        </div>
                                    </div>                           

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped data-tbl">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th class="td-center">Created Date</th>
                            <th>Status</th>
                            <th class="td-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php                                
                            foreach ($menuData as $menuinfo ) {
                            ?>
                            <tr>
                                <td><?php echo $menuinfo->menu_name;?></td>
                                <td><?php echo $menuinfo->menu_link;?></td>
                                <td class="td-center">
                                <?php
                                    $basDate = $menuinfo->created_time;
                                    $data = date( 'F j, Y, g:i,A', strtotime( $basDate ));

                                     echo $data;
                                 ?>
                                </td>
                                <?php
                                    if ( $menuinfo->status == 2 ) 
                                    { ?>
                                        <td>
                                        <label class="label label-success">
                                            <a href="<?php echo base_url();?>/menu/approve?id=<?php echo $menuinfo->id;?>&status=<?php echo $menuinfo->status;?>">Approved</a>
                                        </label>
                                        </td>
                                        
                                    <?php }else{ ?>
                                        <td>
                                        <label class="label label-warning">
                                            <a href="<?php echo base_url();?>/menu/approve?id=<?php echo $menuinfo->id;?>&status=<?php echo $menuinfo->status;?>">Pending</a>
                                        </label>
                                        </td>
                                    <?php }

                                ?>

                                <td class="td-center">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-default btn-sm m-user-edit"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="#" class="btn btn-default btn-sm m-user-delete"><i class="zmdi zmdi-close"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php }

                         ?>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>