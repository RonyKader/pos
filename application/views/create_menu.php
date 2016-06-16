    <!-- <div class="col-md-3"></div> -->
<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="alert-danger">
            <?php echo validation_errors(); ?>
        </div>      
            <?php
                 $success = $this->session->flashdata('success');
                 if( isset( $success ))
                 {
                    echo $success;
                 }
             ?>      

    </div>
</div>

<div class="clearfix"></div>
<?php 
    $data = array(
        'class' => 'form-horizontal'
        );
    echo form_open( 'menu/create_menu', $data);
 ?>

     <div class="form-group">
        <label class="col-md-3 control-label">Main Menu</label>
        <div class=" col-md-6">
            <select name="menu_parent" id="" class="form-control">
                <?php 
                   if ( $navData ) {                           
                    foreach ( $navData as $menu ) {
                        ?>    
                    <option value="<?php echo $menu->id;?>"><?php echo $menu->menu_name;?></option>
                    <?php }
         
                        }
                 ?>
            </select>

        </div>
     </div>

    <div class="form-group">
       <label class="col-md-3 control-label">Menu Name</label>
       <div class=" col-md-6">
          <?php 
              $data = array(
                  'type'       => 'text',
                  'name'       => 'menu_name',
                  'class'      => 'form-control',
                  'placeholder'=> 'Enter Menu Name'
                  );

              echo form_input( $data );
           ?>

       </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label">Menu Link</label>
       <div class=" col-md-6">
       <?php 
           $data = array(
               'type'       => 'text',
               'name'       => 'menu_link',
               'class'      => 'form-control',
               'placeholder'=> 'Write Menu Link'
               );
           echo form_input( $data );
        ?>

       </div>
    </div>
    <div class="form-group">
       <label class="col-md-3 control-label">Menu Link</label>
       <div class=" col-md-6">
       <?php 
           $data = array(
               'type'       => 'number',
               'name'       => 'menu_sorting',
               'class'      => 'form-control',
               'placeholder'=> 'Menu Sorting'
               );
           echo form_input( $data );
        ?>

       </div>
    </div>


  <div class="form-group">
     <label class="col-md-3 control-label">&nbsp;</label>
     <div class="col-md-6">
        <div class="form-actions">
        <?php 
            $data = array(
                'type'   => 'submit',
                'name'   => 'create_menu',
                'class'  => 'btn btn-primary',
                'value'  => 'Create Menu'
                );

            echo form_submit( $data );
         ?>

         <?php 
             $data = array(
                 'type'   => 'reset',
                 'name'   => 'create_menu',
                 'class'  => 'btn btn-default',
                 'value'  => 'Reset'
                 );

             echo form_submit( $data );
          ?>
        </div>
     </div>
  </div>
<?php echo form_close(); ?>