        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header">
                        <h3>Admin Registration</h3>
                       
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
                            echo form_open( 'auth/create_admin', $data );
                         ?>
                            <div class="form-content">
                                    <!-- start name -->
                                    <!-- end email phone -->
                                    <div class="unit col-lg-12 col-md-12 col-sm-12">
                                        <div class="input">
                                            <select class="form-control" name="account_type">
                                                <option selected="seleted" disabled>Select Company Name</option>
                                                <option value="1">Company One<ption>
                                                <option value="2">Company Two</option>
                                                <option value="3">Company Three</option>
                                            </select>
                                        </div>
                                    </div>        
                                    <div class="unit col-lg-6 col-md-6 col-sm-12">
                                        <div class="input">
                                            <label class="icon-left" for="name">
                                                <i class="fa fa-user"></i>
                                            </label>

                                            <?php 
                                                $data = array(
                                                    'type' => 'text',
                                                    'name' => 'name',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Name'
                                                    );
                                                echo form_input( $data );
                                             ?>
                                        </div>
                                    </div>
                                    <!-- end name -->

                                    <!-- start email phone -->
                                        <div class="unit col-lg-6 col-md-6 col-sm-12">
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

                                        <div class="unit col-lg-6 col-md-6 col-sm-12">
                                            <div class="input">
                                                <label class="icon-left" for="phone">
                                                    <i class="fa fa-male"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'text',
                                                        'name' => 'username',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Username'
                                                        );
                                                    echo form_input( $data );
                                                 ?>
                                            </div>
                                        </div>

                                        <div class="unit col-lg-6 col-md-6 col-sm-12">
                                            <div class="input">
                                                <label class="icon-left" for="phone">
                                                    <i class="fa fa-male"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'text',
                                                        'name' => 'phone_number',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Phone Number'
                                                        );
                                                    echo form_input( $data );
                                                 ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 unit">
                                            <div class="input prepend-small-btn">
                                                <div class="file-button">
                                                    Browse
                                                    <input type="file" name="image" id="image" onchange="document.getElementById('image-input').value = this.value;" class="btn btn-success">
                                                </div>
                                                <input type="text" placeholder="no file selected" readonly="" id="image-input" class="form-control">
                                            </div>
                                        </div>
                                    

                                    <!-- start guests -->
                                        <div class="unit col-lg-6 col-md-6 col-sm-12">
                                            <div class="input">
                                                <label class="icon-left" for="adults">
                                                <i class="zmdi zmdi-key"></i>
                                                </label>
                                                <?php 
                                                    $data = array(
                                                        'type' => 'password',
                                                        'name' => 'password',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Password'
                                                        );
                                                    echo form_password( $data );
                                                 ?>
                                            </div>
                                        </div>
                                    <!-- end guests -->
                                </div>
                                      
          <div class="clearfix"></div>
                                   
                                <!-- end /.content -->
<!-- Start of Access level -->
<div class="">
    <div class="table-responsive">
        <table class="table-bordered data-tbl">
            <tr>
                <td>
                    <label class="checkbox">
                    <input type="checkbox" name="menu_id[]" id="menu_id1" value="1" onClick="menuChk(1)"  /><i></i> 
                    <b>Admin</b>
                    </label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="1" ><i></i> List</label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="2" ><i></i>Add</label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="3" ><i></i> View</label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="4" ><i></i> Edit</label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="5" ><i></i> Activity</label>
                </td>
                <td name="optionTd1" align="right" style="width:80px; padding:0 5px;">
                    <label class="checkbox"><input type="checkbox" name="permission[]" value="6" ><i></i> Delete</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="checkbox"><input type="checkbox" name="menu_id[2]" id="menu_id2" value="2" onClick="menuChk(2)"  /><i></i> 
                    <b>Settings</b></label>
                </td>
                <td colspan="6" style="width:480px;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7">
                    <div id="sub_div2" style="display:none;">
                        <table class="table-bordered data-tbl">
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[3]" id="menu_id3" value="3" onClick="menuChk(3)"  /><i></i> 
                                    <b>Company</b></label>
                                </td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd3" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[3][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[4]" id="menu_id4" value="4" onClick="menuChk(4)"  /><i></i> 
                                    <b>Supplier</b></label>
                                </td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd4" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[4][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[5]" id="menu_id5" value="5" onClick="menuChk(5)"  /><i></i> 
                                    <b>Customer</b></label>
                                </td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd5" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[5][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[12]" id="menu_id12" value="12" onClick="menuChk(12)"  /><i></i> 
                                    <b>Unit</b></label>
                                </td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd12" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[12][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label class="checkbox"><input type="checkbox" name="menu_id[6]" id="menu_id6" value="6" onClick="menuChk(6)"  /><i></i> 
                    <b>POS</b></label>
                </td>
                <td colspan="6" style="width:480px;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7">
                    <div id="sub_div6" style="display:none;">
                        <table class="table-bordered data-tbl">
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[7]" id="menu_id7" value="7" onClick="menuChk(7)"  /><i></i> 
                                    <b>Item</b></label>
                                </td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd7" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[7][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[8]" id="menu_id8" value="8" onClick="menuChk(8)"  /><i></i> 
                                    <b>Purchase (Stock In)</b></label>
                                </td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd8" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[8][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[9]" id="menu_id9" value="9" onClick="menuChk(9)"  /><i></i> 
                                    <b>Purchase Return List</b></label>
                                </td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd9" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[9][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[10]" id="menu_id10" value="10" onClick="menuChk(10)"  /><i></i> 
                                    <b>Sell (Stock Out)</b></label>
                                </td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd10" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[10][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                            <tr>
                                <td style="width:20px; border-right:none;">&nbsp;</td>
                                <td><label class="checkbox"><input type="checkbox" name="menu_id[11]" id="menu_id11" value="11" onClick="menuChk(11)"  /><i></i> 
                                    <b>Sell Return List</b></label>
                                </td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="1" ><i></i> List</label></td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="2" ><i></i> Add</label></td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="3" ><i></i> View</label></td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="4" ><i></i> Edit</label></td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="5" ><i></i> Activity</label></td>
                                <td name="optionTd11" align="right" style="width:80px; padding:0 5px;"><label class="checkbox"><input type="checkbox" name="menu_option[11][]" value="6" ><i></i> Delete</label></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- End of Access level -->
                                
                                <div class="form-footer">
                                <?php 
                                    $data = array(
                                        'type' => 'submit',
                                        'name' => 'create_admin',
                                        'class' => 'btn btn-success primary-btn',
                                        'value' => 'Create Admin'
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