<!-- header -->
<header class="site-head" id="site-head">
    <ul class="list-unstyled left-elems">
        <!-- nav trigger/collapse -->
        <li>
            <a href="javascript:;" class="nav-trigger ion ion-drag"></a>
        </li>

        <li>
            <div class="form-search hidden-xs">
                <form id="site-search" action="javascript:;">
                    <input type="search" class="form-control" placeholder="Type here for search...">
                    <button type="submit" class="ion ion-ios-search-strong"></button>
                </form>
            </div>
        </li>

        <!-- site-logo for mobile nav -->
        <li>
            <div class="site-logo visible-xs">
                <a href="javascript:;" class="text-uppercase h3">
                    <span class="text">Mail test</span>
                </a>
            </div>
        </li> <!-- #end site-logo -->

        <!-- fullscreen -->
        <li class="fullscreen hidden-xs">
            <a href="javascript:;"><i class="ion ion-qr-scanner"></i></a>

        </li>	<!-- #end fullscreen -->

        <!-- notification drop -->
        <li class="notify-drop hidden-xs dropdown">
            <a href="javascript:;" data-toggle="dropdown">
                <i class="ion ion-speakerphone"></i>
                <span class="badge badge-danger badge-xs circle">3</span>
            </a>

            <div class="panel panel-default dropdown-menu">
                <div class="panel-heading">
                    You have 3 new notifications
                    <a href="javascript:;" class="right btn btn-xs btn-pink mt-3">Show All</a>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <a href="javascript:;">
                                <span class="ion ion-archive left bg-success"></span>
                                <div class="desc">
                                    <strong>App downloaded</strong>
                                    <p class="small text-muted">1 min ago</p>
                                </div>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="javascript:;">
                                <span class="ion ion-alert-circled left bg-danger"></span>
                                <div class="desc">
                                    <strong>Application Error</strong>
                                    <p class="small text-muted">4 hours ago</p>
                                </div>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="javascript:;">
                                <span class="ion ion-person left bg-info"></span>
                                <div class="desc">
                                    <strong>New User Registered</strong>
                                    <p class="small text-muted">2 days ago</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </li>	<!-- #end notification drop -->

    </ul>

    <ul class="list-unstyled right-elems">
        <!-- profile drop -->
        <li class="profile-drop hidden-xs dropdown">
            <a href="javascript:;" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/images/admin.jpg" alt="admin-pic">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="javascript:;"><span class="ion ion-person">&nbsp;&nbsp;</span>Profile</a></li>
                <li><a href="javascript:;"><span class="ion ion-settings">&nbsp;&nbsp;</span>Settings</a></li>
                <li class="divider"></li>
                <li><a href="javascript:;"><span class="ion ion-lock-combination">&nbsp;&nbsp;</span>Lock Screen</a></li>
                <li><a href="javascript:;"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
            </ul>
        </li>
        <!-- #end profile-drop -->

        <!-- sidebar contact -->
        <li class="floating-sidebar">
            <a href="javascript:;">
                <i class="ion ion-grid"></i>
            </a>
            <div class="sidebar-wrap" data-perfect-scrollbar="">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#sidebar-chat-tab" data-toggle="tab">Chat</a>
                    </li>
                    <li>
                        <a href="#sidebar-info-tab" data-toggle="tab">Info</a>
                    </li>
                </ul> <!-- #end nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="sidebar-chat-tab">
                        <div class="chat-tab tab clearfix">
                            <h5 class="title mt0 mb20">Online</h5>
                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/1.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">John Wick</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;San Franciso, USA</p>

                                </div>
                                <span class="ion ion-record avail right on"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/2.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">George K.</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;California, USA</p>
                                </div>
                                <span class="ion ion-record avail right on"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/3.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Shello Dse.</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;Berlin, Germany</p>
                                </div>
                                <span class="ion ion-record avail right away"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/4.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Lucas Tower</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;Paris, France</p>
                                </div>
                                <span class="ion ion-record avail right away"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/5.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Hey Win</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;Hongkong, China</p>
                                </div>
                                <span class="ion ion-record avail right on"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/6.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Kelvin L.</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;Moscow, Russia</p>
                                </div>
                                <span class="ion ion-record avail right on"></span>
                            </div>

                            <h5 class="title mt0 mb20">Offline</h5>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/7.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Martin Xx.</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;xxx, yyy</p>
                                </div>
                                <span class="ion ion-record avail right off"></span>
                            </div>

                            <div class="user-container mb15">
                                <img src="<?php echo base_url();?>assets/images/sample/2.jpg" alt="">
                                <div class="desc">
                                    <p class="mb0">Lorem Ipsum</p>
                                    <p class="xsmall"><span class="ion ion-location"></span>&nbsp;Virginia, USA</p>
                                </div>
                                <span class="ion ion-record avail right off"></span>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="sidebar-info-tab">
                        <div class="info-tab tab clearfix">
                            <h5 class="title mt0 mb20">Work in Progress</h5>
                            <ul class="list-unstyled mb15 clearfix">
                                <li>
                                    <div class="clearfix mb10">
                                        <small class="left">App Upload</small>
                                        <small class="right">80%</small>
                                    </div>
                                    <div class="progress-xs progress">
                                        <div class="progress-bar progress-bar-primary" style="width: 80%;"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix mb10">
                                        <small class="left">Creating Assets</small>
                                        <small class="right">50%</small>
                                    </div>
                                    <div class="progress-xs progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 50%;"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix mb10">
                                        <small class="left">New UI 2.0</small>
                                        <small class="right">90%</small>
                                    </div>
                                    <div class="progress-xs progress">
                                        <div class="progress-bar progress-bar-success" style="width: 90%;"></div>
                                    </div>
                                </li>
                            </ul>

                            <h5 class="title mt0 mb20">Settings</h5>
                            <div class="clearfix mb15">
                                <div class="left">
                                    <p>Show me online</p>
                                </div>

                                <div class="right">
                                    <div class="ui-toggle ui-toggle-success ui-toggle-xs">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb15">
                                <div class="left">
                                    <p>Notifications</p>
                                </div>

                                <div class="right">
                                    <div class="ui-toggle ui-toggle-success ui-toggle-xs">
                                        <label>
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb15">
                                <div class="left">
                                    <p>Enable History</p>
                                </div>

                                <div class="right">
                                    <div class="ui-toggle ui-toggle-success ui-toggle-xs">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- #end tab content -->
            </div> <!-- #end sidebar-wrap -->
        </li>

    </ul>

</header>
<!-- #end header -->

<!-- main-container -->
<div class="main-container clearfix">
    <!-- main-navigation -->
    <aside class="nav-wrap" id="site-nav" data-perfect-scrollbar="">
        <div class="nav-head">
            <!-- site logo -->
            <a href="<?php echo  site_url('Admincontroller/composeemail')?>" class="site-logo text-uppercase">
                <i class="ion ion-disc"></i>
                <span class="text">Mailer</span>
            </a>
        </div>

        <nav class="site-nav clearfix" role="navigation">
            <div class="profile clearfix mb15">
                <img src="<?php echo base_url();?>assets/images/admin.jpg" alt="admin">
                <div class="group">
                    <h5 class="name"><?php echo  $this->session->userdata['email'];?>/h5>
                    <small class="desig text-uppercase">UX Designer</small>
                </div>
            </div>

            <!-- navigation -->
            <ul class="list-unstyled clearfix nav-list mb15">
                <li class="active">
                    <a href="<?php echo  site_url('Admincontroller/composeemail')?>">
                        <i class="ion ion-ios-people"></i>
                        <span class="text">Compose</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo  site_url('Admincontroller/addemailaccount')?>">
                        <i class="ion ion-ios-people"></i>
                        <span class="text">Add Email Account</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo  site_url('Systemcontroller/logout')?>">
                        <i class="ion ion-ios-people"></i>
                        <span class="text">Logout</span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- nav-foot -->
        <footer class="nav-foot">
            <p><?php echo date('Y-m-d');?> &copy; <span>ART</span></p>
            <!--H:i:s-->
        </footer>

    </aside>