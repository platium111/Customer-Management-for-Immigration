<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo base_url('client/views/favicon.ico') ?>" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('client/views/css/theme-default.css') ?>"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

        <!-- EOF CSS INCLUDE -->   



    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Joli Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                   
                    <!--HIEP-class="xn-openable" de co dau +-->
                    <li class="active">
                        <a href="./viewCustomers"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Customers</span></a>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <!--HIEP-search customers-->
                    <!--                    <li class="xn-search">
                                            <form role="form" action="./getCustomerByFirstName">
                                                <input type="text" name="search" placeholder="Search ..."/>
                                            </form>
                                        </li>   -->
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="./viewCustomers">View Customers</a></li>
                    <li class="active">Add New Customer</li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!--HIEP-table for display customers-->
                    <div class ="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8"> 
                                <?php $attForms = array('class' => 'form-horizontal'); ?>
                                <?php echo form_open('customercontroller/addCustomer', $attForms); ?>
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input name="firstName" type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input name="lastName" type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
                                    <div class="col-sm-10">
                                        <input name="dob" type="text" class="form-control" id="dob" placeholder="Date Of Birth">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="country" class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <select name = "country"
                                                class="form-control" id="country">
                                            <option value="vietnam" <?php echo set_select('country', 'vietnam', TRUE); ?> >Vietnam</option>
                                            <option value="australia" <?php echo set_select('country', 'australia', FALSE); ?> >Australia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="streetName" class="col-sm-2 control-label">Street Name</label>
                                    <div class="col-sm-10">
                                        <input name="streetName" type="text" class="form-control" id="streetName" placeholder="Street Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="suburb" class="col-sm-2 control-label">Suburb</label>
                                    <div class="col-sm-10">
                                        <input name="suburb" type="text" class="form-control" id="suburb" placeholder="Suburb">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city" class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <input name="city" type="text" class="form-control" id="city" placeholder="City">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <input name="state" type="text" class="form-control" id="state" placeholder="State">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="postCode" class="col-sm-2 control-label">PostCode</label>
                                    <div class="col-sm-10">
                                        <input name="postCode" type="text" class="form-control" id="postCode" placeholder="Post Code">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phoneNo" class="col-sm-2 control-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input name="phoneNumber" type="text" class="form-control" id="phoneNo" placeholder="Phone No">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email0" class="col-sm-2 control-label">First Email</label>
                                    <div class="col-sm-10">
                                        <input name="email0" type="text" class="form-control" id="email0" placeholder="1st Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email1" class="col-sm-2 control-label">Secondary Email</label>
                                    <div class="col-sm-10">
                                        <input name="email1" type="text" class="form-control" id="email1" placeholder="2nd Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email2" class="col-sm-2 control-label">Third Email</label>
                                    <div class="col-sm-10">
                                        <input name="email2" type="text" class="form-control" id="email2" placeholder="3rd Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="facebook" class="col-sm-2 control-label">Facebook Link</label>
                                    <div class="col-sm-10">
                                        <input name="facebookLink" type="text" class="form-control" id="facebook" placeholder="Facebook Link">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="documents" class="col-sm-2 control-label">Documents</label>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="row documentContain">
                                                <input name = "documents0" type="text" class="form-control" id="documents0" placeholder="Document">
                                                <select name = "typeOfScan0"
                                                        class="form-control" id="selectTypeOfDoc">
                                                    <option value="scan" <?php echo set_select("typeOfScan0", "scan", TRUE); ?> >Scan</option>
                                                    <option value="original" <?php echo set_select("typeOfScan0", "original", FALSE); ?> >Original</option>
                                                </select>

                                            </div>
                                            <button id="btnAddDocument" type="button" class="btn btn-primary">+ Add More</button>
                                            <button id="btnDeleteDocument" type="button" class="btn btn-primary">- Delete</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Requirement Status</label>
                                    <div class="col-sm-10">
                                        <select name = "requirementStatus"
                                                class="form-control" id="requirementStatus">
                                            <option value="completed" <?php echo set_select('requirementStatus', 'completed', FALSE); ?> >Completed</option>
                                            <option value="in process" <?php echo set_select('requirementStatus', 'in process', TRUE); ?> >Processing</option>
                                            <option value="potential" <?php echo set_select('requirementStatus', 'potential', FALSE); ?> >Potential</option>
                                            <option value="cancel" <?php echo set_select('requirementStatus', 'cancel', FALSE); ?> >Cancel</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="staffTaken" class="col-sm-2 control-label">Staff Taken</label>
                                    <div class="col-sm-10">
                                        <select name = "staffTaken"
                                                class="form-control" id="staffTaken">
                                                    <?php
                                                    if (isset($staffs)) {
                                                        foreach ($staffs as $staff) {
                                                            echo "<option value='".$staff->staffId."'".set_select('staffTaken', 'None', TRUE). ">"
                                                                .$staff->firstName . " " . $staff->lastName . "-" . $staff->staffId . "</option>";
                                                        }
                                                    }
                                                     ?>
                                        </select>
                                    </div>
                                </div>
                                


                                <div class="form-group">
                                    <label for="staffReturn" class="col-sm-2 control-label">Staff Return</label>
                                    <div class="col-sm-10">
                                        <select name = "staffReturn"
                                                class="form-control" id="staffReturn">
                                                    <?php
                                                    if (isset($staffs)) {
                                                        foreach ($staffs as $staff) {
                                                            echo "<option value='".$staff->staffId."'".set_select('staffReturn', 'None', TRUE). ">"
                                                                .$staff->firstName . " " . $staff->lastName . "-" . $staff->staffId . "</option>";
                                                        }
                                                    }
                                                    ?>
                                        </select>                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="returnDate" class="col-sm-2 control-label">Return Date</label>
                                    <div class="col-sm-10">
                                        <input name="returnDate" type="text" class="form-control" id="returnDate" placeholder="Return Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                                </form> 
                            </div>
                        </div> 
                    </div>    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url('client/views/audio/alert.mp3') ?>" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url('client/views/audio/fail.mp3') ?>" preload="auto"></audio>
        <!-- END PRELOADS -->                  

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/jquery/jquery-ui.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/bootstrap/bootstrap.min.js') ?>"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->   
        <script type="text/javascript" src="<?php echo base_url('client/views/js/manageCustomer.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/typeahead.js') ?>"></script>
        <script type='text/javascript' src='<?php echo base_url('client/views/js/plugins/icheck/icheck.min.js') ?>'></script>        
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/scrolltotop/scrolltopcontrol.js') ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/morris/raphael-min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/morris/morris.min.js') ?>"></script>       
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/rickshaw/d3.v3.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/rickshaw/rickshaw.min.js') ?>"></script>
        <script type='text/javascript' src="<?php echo base_url('client/views/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
        <script type='text/javascript' src="<?php echo base_url('client/views/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>                
        <script type='text/javascript' src="<?php echo base_url('client/views/js/plugins/bootstrap/bootstrap-datepicker.js') ?>"></script>                
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/owl/owl.carousel.min.js') ?>"></script>                 

        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/moment.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins/daterangepicker/daterangepicker.js') ?>"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!--<script type="text/javascript" src="<?php echo base_url('client/views/js/settings.js') ?>"></script>-->

        <script type="text/javascript" src="<?php echo base_url('client/views/js/plugins.js') ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url('client/views/js/actions.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('client/views/js/demo_dashboard.js') ?>"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->         
    </body>
</html>






