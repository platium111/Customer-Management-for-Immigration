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
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('client/views/css/bootstrap.min.css') ?>"/>
        <!-- EOF CSS INCLUDE -->  
        <script>
            
        </script>
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
                        <a href="../viewCustomers"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Customers</span></a>       
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
                    <li><a href="../viewCustomers">View Customers</a></li>
                    <li class="active">View Requirements</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <table class="table table-hover">
                                      <tr>
                                        <th>Customer ID</th> 
                                        <td> <?php echo $customers[0]->customerId; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>Code</th>
                                        <td><?php echo $customers[0]->uniqueCode; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>First Name</th>
                                        <td><?php echo $customers[0]->firstName; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>Last Name</th>
                                        <td><?php echo $customers[0]->lastName; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>DOB</th>
                                        <td> <?php echo $customers[0]->birthDate; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>Phone Number</th>
                                        <td> <?php echo $customers[0]->phoneNumber; ?></td>
                                      </tr>
                                      <tr>
                                        <th>First Email</th>
                                        <td><?php echo $customers[0]->email0; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>Second Email</th>
                                        <td><?php echo $customers[0]->email1; ?> </td>
                                      </tr>
                                      <tr>
                                        <th>Third Email</th>
                                        <td><?php echo $customers[0]->email2; ?> </td>
                                      </tr>
                                      <tr>
                                        <th> Facebook Link </th>
                                        <td> <?php echo $customers[0]->facebookLink; ?></td>
                                      </tr>
                                      <tr>
                                        <th> Street Name </th>
                                        <td><?php echo $customers[0]->streetName; ?> </td>
                                      </tr>
                                      <tr>
                                        <th> Suburb </th>
                                        <td> <?php echo $customers[0]->suburb; ?></td>
                                      </tr>
                                      <tr>
                                        <th> City </th>
                                        <td> <?php echo $customers[0]->city; ?></td>
                                      </tr>
                                      <tr>
                                        <th> State </th>
                                        <td> <?php echo $customers[0]->state; ?></td>
                                      </tr>
                                      <tr>
                                        <th> Country </th>
                                        <td> <?php echo $customers[0]->country; ?></td>
                                      </tr>
                                      <tr>
                                        <th> Postcode </th>
                                        <td><?php echo $customers[0]->postCode; ?> </td>
                                      </tr>         
                                    
                                </table>
                                
                                
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>Req ID</th> 
                                        <th>Status</th>
                                        <th>Submitted Date</th>
                                        <th>Staff Taken</th>
                                        <th>Staff Return</th>
                                        <th>Return Date</th>
                                        <th>Documents</th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($customers)) {
                                                foreach ($customers as $customer) {
                                                   echo '<tr>';
                                                   echo '<td id="requirementId">'.$customer->requirementId .'</td>';
                                                   echo '<td >'.$customer->status .'</td>';
                                                   echo '<td >'.$customer->submitByCusDate .'</td>';
                                                   echo '<td >'.$customer->staffTaken.'</td>'; //  echo '<td >'.($customer->staffTaken != '') ? $customer->staffTaken : 'None'.'</td>';
                                                   echo '<td >'.$customer->staffReturn .'</td>';
                                                   echo '<td >'.$customer->returnDate .'</td>';
                                                   echo '<td > <a data-toggle="modal"'. "id='clickView''.'>View </a></td>";
                                                   echo "<td scope=\"row\">". anchor('RequirementController/editRequirementById/'.$customer->requirementId.'/'.$customer->customerId, 'Edit') ."</td>";
                                                   echo '</tr>';
                                                }
                                            }
                                        ?>                
                                    </tbody>
                                  </table>
                            </div>
                            
                            <!-- Modal -->
                            <div id="myViewModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Documents</h4>
                                  </div>
                                  <div class="modal-body">
                                      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
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






