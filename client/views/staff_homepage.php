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
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('client/views/css/theme-white.css') ?>"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('client/views/css/bootrap/bootstrap.min.css') ?>"/>
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
                        <?php
//                            if(!empty($identifyPage) && $identifyPage!='edit') 
                        if(empty($identifyPage)) {
                                echo '<a href="./viewCustomers"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Customers</span></a>';
                        } else {
//                            else 
                                echo '<a href="../../viewCustomers"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Customers</span></a>';
                        }
                        ?>
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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!--HIEP-table for display customers-->
                    <div class ="container">
                        <div class="row">
                            <div class = "col-md-10 col-lg-10"> 
                               
                                <a class="btn btn-large btn-info" href="./loadAddCustomerView">Add New Customer</a>
                            </div>
                        </div>
                        <div class ="row">
                            <div class = "col-md-10 col-lg-10"> 
                                <?php echo form_open('customercontroller/getCustomersBy'); ?>
                                <div class="form-inline">
                                    First Name:<input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" class="form-control" placeholder="Input ...">
                                    <div class="form-inline">
                                        <label for="typeOfSearch">Search by type:</label>
                                        <select name = "typeOfSearch"
                                                class="form-control" id="typeOfSearch">
                                            <option value="none" <?php echo set_select('typeOfSearch', 'none', TRUE); ?> >None</option>
                                            <option value="completed" <?php echo set_select('typeOfSearch', 'completed', FALSE); ?> >Completed</option>
                                            <option value="in process" <?php echo set_select('typeOfSearch', 'in process', FALSE); ?> >Processing</option>
                                            <option value="potential" <?php echo set_select('typeOfSearch', 'potential', FALSE); ?> >Potential</option>
                                            <option value="cancel" <?php echo set_select('typeOfSearch', 'cancel', FALSE); ?> >Cancel</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col-md-10 col-lg-10"> 
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer ID</th> 
                                            <th>Code</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>DOB</th>
                                            <th>Phone Number</th>
                                            <th>Primary Email</th>
                                            <th>View Detail</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($customers)) {
                                            foreach ($customers as $customer) {
                                                echo '<tr>';
                                                echo '<td scope="row">' . $customer->customerId . '</td>';
                                                echo '<td scope="row">' . $customer->uniqueCode . '</td>';
                                                echo '<td scope="row">' . $customer->firstName . '</td>';
                                                echo '<td scope="row">' . $customer->lastName . '</td>';
                                                echo '<td scope="row">' . $customer->birthDate . '</td>';
                                                echo '<td scope="row">' . $customer->phoneNumber . '</td>';
                                                echo '<td scope="row">' . $customer->email0 . '</td>';
                                                echo "<td scope'row'> <a class='btn btn-success' href='". base_url()."index.php/customerController/getCustomerReqById/$customer->customerId'" . '>View Detail' . '</a></td>';
                                                echo "<td scope'row'> <a class='btn btn-danger'  href='". base_url()."index.php/customerController/deleteCustomerReqById/$customer->customerId'" . '>Delete' . '</a></td>';
//                                                echo "<th scope=\"row\"> <a href=./editCustomerById/$customer->customerId" . '>Edit' . '</a></th>';
                                                echo '</tr>';
                                            }
                                        }
                                        ?>                
                                    </tbody>
                                </table>
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
        <script type="text/javascript" src="<?php // echo base_url('client/views/js/manageCustomer.js') ?>"></script>
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






