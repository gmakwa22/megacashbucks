<!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="admin">ATLANT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{asset('admin_asset/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{asset('admin_asset/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <!-- <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div> -->
                        </div>
                    </li>
                    <!-- <li class="xn-title">Navigation</li> -->

                    <li class="active">
                        <a href="{{ url('/admin/') }}"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboards</span></a>
                        <!-- <ul>
                            <li class="active"><a href="index.html"><span class="xn-text">Dashboard 1</span></a></li>
                            <li><a href="dashboard.html"><span class="xn-text">Dashboard 2</span></a></li>
                            <li><a href="dashboard-dark.html"><span class="xn-text">Dashboard 3</span></a></li>
                        </ul> -->
                    </li>
                    <!-- <li>
                        <a href="{{ url('/admin/users') }}"><span class="fa fa-users"></span> <span class="xn-text">Users</span></a>
                    </li> -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Users</span></a>
                        <ul>
                            <li class="active"><a href="{{ url('/admin/adminagents') }}"><span class="xn-text">Agency</span></a></li>
                            <!-- <li><a href="{{ url('/admin/simpleagents') }}"><span class="xn-text">Agent</span></a></li> -->
                            <li><a href="{{ url('/admin/customers') }}"><span class="xn-text">Buyer</span></a></li>
                            <li class="active"><a href="{{ url('/admin/users/create') }}"><span class="xn-text">Add New</span></a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-random"></span> <span class="xn-text">Subscription</span></a>
                        <ul>
                            <li class="active"><a href="{{ url('/admin/add-subscription') }}"><span class="xn-text">Add Subscription</span></a></li>
                            <li><a href="{{ url('/admin/view-subscription') }}"><span class="xn-text">Subscription List</span></a></li>
                            <li><a href="{{ url('/admin/view-transaction') }}"><span class="xn-text">Transactions</span></a></li>
                        </ul>
                    </li>  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-question-circle"></span> <span class="xn-text">Faq</span></a>
                        <ul>
                            <li class="active"><a href="{{ url('/admin/add-faq') }}"><span class="xn-text">Add Faq</span></a></li>
                            <li><a href="{{ url('/admin/view-faq') }}"><span class="xn-text">Faq List</span></a></li>
                        </ul>
                    </li>  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-code-o"></span> <span class="xn-text">Page</span></a>
                        <ul>
                            <li class="active"><a href="{{ url('/admin/add-page') }}"><span class="xn-text">Add Page</span></a></li>
                            <li><a href="{{ url('/admin/view-page') }}"><span class="xn-text">Page List</span></a></li>
                        </ul>
                    </li> 
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-cog"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li class="active"><a href="{{ url('/admin/general') }}"><span class="xn-text">General</span></a></li>
                            <li class="active"><a href="{{ url('/admin/edit-profile') }}"><span class="xn-text">Edit Profile</span></a></li>
                            
                        </ul>
                    </li>    -->                  
                    <!--<li class="xn-openable">
>>>>>>> 5abe51eb87b154b642204fa7ee89a792d5e24d51
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li><a href="pages-invoice.html"><span class="fa fa-dollar"></span> Invoice</a></li>
                            <li><a href="pages-edit-profile.html"><span class="fa fa-wrench"></span> Edit Profile</a></li>
                            <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-file"></span> Blog</a>
                                
                                <ul>                                    
                                    <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>                                                                        
                                    <li><a href="pages-login.html">Login v1</a></li>
                                    <li><a href="pages-login-v2.html">Login v2</a></li>
                                    <li><a href="pages-login-inside.html">Login v2 Inside</a></li>
                                    <li><a href="pages-login-website.html">Website Login</a></li>
                                    <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-plus"></span> Registration</a>
                                <ul>                                                                        
                                    <li><a href="pages-registration.html">Default</a></li>
                                    <li><a href="pages-registration-login.html">With Login</a></li>                                    
                                </ul>
                            </li>
                            <li><a href="pages-forgot-password.html"><span class="fa fa-question"></span> Forgot Password</a></li>                            
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>                                    
                                    <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li> -->
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-toggled-hover.html">Nav Toggled (Hover)</a></li>
                            <li><a href="layout-nav-toggled-item-hover.html">Nav Toggled (Item Hover)</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-nav-top-custom.html">Custom Top Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>
                            <li><a href="layout-page-sidebar.html">Page Sidebar</a></li>
                            <li><a href="layout-page-loading.html">Page Loading</a></li>
                            <li><a href="layout-rtl.html">Layout RTL</a></li>
                            <li><a href="layout-tabbed.html">Page Tabbed</a></li>
                            <li><a href="layout-custom-header.html">Custom Header</a></li>
                            <li><a href="layout-adaptive-panels.html">Adaptive Panels</a></li>                            
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="xn-title">Components</li> -->
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                            <li><a href="ui-nestable.html"><span class="fa fa-sitemap"></span> Nestable List</a></li>
                            <li><a href="ui-autocomplete.html"><span class="fa fa-search-plus"></span> Autocomplete</a></li>
                            <li><a href="ui-slide-menu.html"><span class="fa fa-angle-right"></span> Slide Menu</a></li>
                        </ul>
                    </li> -->                    
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>                                
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                            
                        </ul>
                    </li> -->
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-nvd3.html">NVD3</a></li>
                            <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                            <li><a href="charts-other.html">Other</a></li>
                        </ul>
                    </li> -->                    
                    <!-- <li>
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li> -->                    
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li> -->
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR