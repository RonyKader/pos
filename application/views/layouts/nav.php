<aside class="leftbar material-leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container">
            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                    <img src="<?php echo base_url();?>/assets/images/avatar/jaman_01.jpg" alt="admin">
                </div>

                <div class="admin-user-info">
                    <ul>
                        <li><a href="#">
                        <?php 
                            $username = $this->session->userdata('logininfo');
                               if ( isset( $username )) {
                                  echo $username['username'];
                               }
                             ?>
                        </a></li>                        
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="<?php echo base_url();?>auth/logout"><i class="zmdi zmdi-power"></i>
                    </a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>auth/adminlist"><i class="zmdi zmdi-account"></i>
                    </a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>auth/changepassword_form"><i class="zmdi zmdi-key"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-settings"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="list-accordion">
            <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">MENU SECTION</span></a>
                <ul>
                    <?php 
                        $data = array(
                            'status' => 2
                            );

                        $shwo_menu = $this->db->get_where( 'pos_menu',$data );
                        foreach ($shwo_menu->result() as $menu ) {
                        ?>    
                        <li><a href="<?php echo base_url() . $menu->link;?>"><?php echo $menu->name;?></a></li>
                        <?php }
                     ?>
                </ul>
            </li>
<!--             <li class="list-title">Forms</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-web"></i><span class="list-label">From Elements</span></a>
                <ul>
                    <li><a href="form-all-elements.html">All Form Elements</a></li>
                    <li><a href="form-basic-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-material-elements.html">Material Form Elements</a></li>
                    <li><a href="form-icons-label.html">All Icons Labels</a></li>
                    <li><a href="form-clone-element.html">Clone Form ELements </a></li>
                    <li><a href="form-autocomplete.html">Autocomplete </a></li>
                    <li><a href="form-currency-format.html">Currency Format</a></li>
                    <li><a href="form-success-state.html">Form Success State </a></li>
                    <li><a href="form-error-state.html">Form Error State </a></li>
                    <li><a href="form-disable-state.html">Form Disable State </a></li>
                    <li><a href="form-grid.html">Form Grid </a></li>
                    <li><a href="form-tooltips.html">Form Tooltips </a></li>
                    <li><a href="tags-input.html">Tags Input</a></li>
                    <li><a href="input-mask.html">Input Mask </a></li>
                    <li><a href="select2.html">Select2</a></li>
                    <li><a href="file-styles.html">File Styles</a></li>
                    <li><a href="spinner.html">Spinner</a></li>
                    <li><a href="icheck.html">iCheck</a></li>
                    <li><a href="form-ui-datepicker.html">UI Datepickers</a></li>
                    <li><a href="form-timepicker.html">UI Timepickers</a></li>
                    <li><a href="form-spectrum-colorpickers.html">Spectrum Colorpickers</a></li>
                    <li><a href="date-pickers.html">Bootstrap Datepickers</a></li>
                    <li><a href="color-pickers.html">Bootstrap &amp; jqColorPickers</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-check"></i><span class="list-label">From Validations</span></a>
                <ul>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-booking.html">Booking Form</a></li>
                    <li><a href="form-call-me.html">Call Me Form </a></li>
                    <li><a href="form-call-me-captcha.html">Call Me Cptacha Form </a></li>
                    <li><a href="form-checkout.html">Checkout Form </a></li>
                    <li><a href="form-order-check-radio.html">Order Form </a></li>
                    <li><a href="form-order-field.html">Order Form With Quantity </a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-swap"></i><span class="list-label">From Wizard</span></a>
                <ul>
                    <li><a href="wizard-default-style.html">Default Style Wizard</a></li>
                    <li><a href="wizard-tab-style.html">Tab Style Wizard</a></li>
                    <li><a href="wizard-number-style.html">Number Style Wizard</a></li>
                    <li><a href="wizard-checkout.html">Checkout Form Wizard</a></li>
                </ul>
            </li>
            <li class="list-title">Tables</li>
            <li>
                <a href="#"><i class="zmdi zmdi-grid"></i><span class="list-label">Table Styles</span></a>
                <ul>
                    <li><a href="basic-tables.html">Basic Styles</a></li>
                    <li><a href="foo-tables.html">Responsive FooTables </a></li>
                    <li><a href="data-tables.html">Data Tables</a></li>
                    <li><a href="exportable-data-tables.html">Exportable Data Tables</a></li>
                </ul>
            </li>
            <li class="list-title">Charts</li>
            <li>
                <a href="#"><i class="zmdi zmdi-chart"></i><span class="list-label">Charts & Graphs</span></a>
                <ul>
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                    <li><a href="chart-js.html">Chart Js</a></li>
                    <li><a href="chart-nvd3.html">nvd3.js</a></li>
                </ul>
            </li>
            <li class="list-title">Ui Kits</li>
            <li>
                <a href="#"><i class="zmdi zmdi-apps"></i><span class="list-label">Ui Elements</span></a>
                <ul>
                    <li><a href="header.html">Page Header</a></li>
                    <li><a href="buttons-icons.html">Buttons &amp; Icons</a></li>
                    <li><a href="noty.html">Noty</a></li>
                    <li><a href="bootbox.html">Bootbox</a></li>
                    <li><a href="sweet-alerts.html">SweetAlert</a></li>
                    <li><a href="no-ui-slider.html">NoUI Slider</a></li>
                    <li><a href="on-off-switch.html">On/Off Switch</a></li>
                </ul>
            </li>
            <li><a href="ui-widgets.html"><i class="zmdi zmdi-widgets"></i><span class="list-label">Ui Widgtes</span></a></li>
            <li><a href="calendar.html"><i class="zmdi zmdi-calendar-alt"></i><span class="list-label">Calendar</span></a></li>
            <li><a href="typography.html"><i class="zmdi zmdi-format-size"></i><span class="list-label">Typography</span></a></li>
            <li><a href="grid.html"><i class="zmdi zmdi-border-all"></i><span class="list-label">Grid</span></a></li>
            <li class="list-title">Pages</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Extra Pages</span></a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login-boxed.html">Boxy Login</a></li>
                    <li><a href="login-social.html">Social Login</a></li>
                    <li><a href="404-error.html">404 Error Page</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</aside>