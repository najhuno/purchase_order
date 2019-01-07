<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<!--html-->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PURCHASE ORDER | Dashboard</title>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}"  type="text/css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('{{ asset('css/plugins/toastr/toastr.min.css') }}" type="text/css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" type="text/css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/style2.css') }}" type="text/css') }}" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/re.jpg" style="width: 80px;/>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ asset('#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">johan agum gumelar</strong>
                             </span> <span class="text-muted text-xs block">Directure<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ asset('profile.html">Profile</a></li>
                                <li><a href="{{ asset('contacts.html">Contacts</a></li>
                                <li><a href="{{ asset('mailbox.html">Mailbox</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            PO+
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{ asset('#"><i class="fa fa-th-large"></i><span class="nav-label">User Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('{{ url('/coba') }}">Group</a></li>
                            <li><a href="{{ asset('{{ url('/role') }}">Role</a></li>
                            <li><a href="{{ asset('">Registration For Employee</a></li>
                            <li><a href="{{ asset('">Privallage</a></li>
                        </ul>
                    </li>
					 <li class="active">
						 <a href="{{ asset('#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Catalog management</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="{{ asset('{{ url('/upload') }}">Upload</a></li>
							<li><a href="{{ asset('{{ url('/uproval') }}">Aproval</a></li>
							<li><a href="{{ asset('{{ url('/categori') }}">Category</a></li>
						</ul>
					</li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-th-large"></i><span class="nav-label">Vendor Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('{{ url('/registrasi') }}">Registrasi</a></li>
                            <li><a href="{{ asset('{{ url('/verifikasi') }}">Verification</a></li>
                            <li><a href="{{ asset('{{ url('/blacklist')  }}">Black list</a></li>
                            <li><a href="{{ asset('{{ url('/Whitelist')  }}">White list</a></li>
                        </ul>
                    </li>
                    <li>
						<a href="{{ asset('#"><i class="fa fa-th-large"></i><span class="nav-label">Order Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('{{ url('/planning') }}">Planning</a></li>
                            <li><a href="{{ asset('{{ url('/inisiasi') }}">Inisiasi</a></li>
                            <li><a href="{{ asset('{{ url('/executing') }}">executing</a></li>
                            <li><a href="{{ asset('{{ url('/closing') }}">closing</a></li>
                        </ul>
                    </li>
					<li>
						<a href="{{ asset('#"><i class="fa fa-th-large"></i><span class="nav-label">Administration Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('{{ url('/planning') }}">Data Perusahaan</a></li>
                            <li><a href="{{ asset('{{ url('/inisiasi') }}">Data </a></li>
                        </ul>
                    </li>
                    <li>
                    <li>
						<a href="{{ asset('{{ url('/monitoring') }}"><i class="fa fa-drivers-license-o"></i><span class="nav-label">Vendor Monitoring</span>
						</a>
					</li>
                <a href="{{ asset('#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('graph_flot.html">Flot Charts</a></li>
                            <li><a href="{{ asset('graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="{{ asset('graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="{{ asset('graph_chartjs.html">Chart.js</a></li>
                            <li><a href="{{ asset('graph_chartist.html">Chartist</a></li>
                            <li><a href="{{ asset('c3.html">c3 charts</a></li>
                            <li><a href="{{ asset('graph_peity.html">Peity Charts</a></li>
                            <li><a href="{{ asset('graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('mailbox.html">Inbox</a></li>
                            <li><a href="{{ asset('mail_detail.html">Email view</a></li>
                            <li><a href="{{ asset('mail_compose.html">Compose email</a></li>
                            <li><a href="{{ asset('email_template.html">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                    </li>
                    <li>
                        <a href="{{ asset('widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('form_basic.html">Basic form</a></li>
                            <li><a href="{{ asset('form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="{{ asset('form_wizard.html">Wizard</a></li>
                            <li><a href="{{ asset('form_file_upload.html">File Upload</a></li>
                            <li><a href="{{ asset('form_editors.html">Text Editor</a></li>
                            <li><a href="{{ asset('form_autocomplete.html">Autocomplete</a></li>
                            <li><a href="{{ asset('form_markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('contacts.html">Contacts</a></li>
                            <li><a href="{{ asset('profile.html">Profile</a></li>
                            <li><a href="{{ asset('profile_2.html">Profile v.2</a></li>
                            <li><a href="{{ asset('contacts_2.html">Contacts v.2</a></li>
                            <li><a href="{{ asset('projects.html">Projects</a></li>
                            <li><a href="{{ asset('project_detail.html">Project detail</a></li>
                            <li><a href="{{ asset('activity_stream.html">Activity stream</a></li>
                            <li><a href="{{ asset('teams_board.html">Teams board</a></li>
                            <li><a href="{{ asset('social_feed.html">Social feed</a></li>
                            <li><a href="{{ asset('clients.html">Clients</a></li>
                            <li><a href="{{ asset('full_height.html">Outlook view</a></li>
                            <li><a href="{{ asset('vote_list.html">Vote list</a></li>
                            <li><a href="{{ asset('file_manager.html">File manager</a></li>
                            <li><a href="{{ asset('calendar.html">Calendar</a></li>
                            <li><a href="{{ asset('issue_tracker.html">Issue tracker</a></li>
                            <li><a href="{{ asset('blog.html">Blog</a></li>
                            <li><a href="{{ asset('article.html">Article</a></li>
                            <li><a href="{{ asset('faq.html">FAQ</a></li>
                            <li><a href="{{ asset('timeline.html">Timeline</a></li>
                            <li><a href="{{ asset('pin_board.html">Pin board</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('search_results.html">Search results</a></li>
                            <li><a href="{{ asset('lockscreen.html">Lockscreen</a></li>
                            <li><a href="{{ asset('invoice.html">Invoice</a></li>
                            <li><a href="{{ asset('login.html">Login</a></li>
                            <li><a href="{{ asset('login_two_columns.html">Login v.2</a></li>
                            <li><a href="{{ asset('forgot_password.html">Forget password</a></li>
                            <li><a href="{{ asset('register.html">Register</a></li>
                            <li><a href="{{ asset('404.html">404 Page</a></li>
                            <li><a href="{{ asset('500.html">500 Page</a></li>
                            <li><a href="{{ asset('empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('toastr_notifications.html">Notification</a></li>
                            <li><a href="{{ asset('nestable_list.html">Nestable list</a></li>
                            <li><a href="{{ asset('agile_board.html">Agile board</a></li>
                            <li><a href="{{ asset('timeline_2.html">Timeline v.2</a></li>
                            <li><a href="{{ asset('diff.html">Diff</a></li>
                            <li><a href="{{ asset('pdf_viewer.html">PDF viewer</a></li>
                            <li><a href="{{ asset('i18support.html">i18 support</a></li>
                            <li><a href="{{ asset('sweetalert.html">Sweet alert</a></li>
                            <li><a href="{{ asset('idle_timer.html">Idle timer</a></li>
                            <li><a href="{{ asset('truncate.html">Truncate</a></li>
                            <li><a href="{{ asset('password_meter.html">Password meter</a></li>
                            <li><a href="{{ asset('spinners.html">Spinners</a></li>
                            <li><a href="{{ asset('spinners_usage.html">Spinners usage</a></li>
                            <li><a href="{{ asset('tinycon.html">Live favicon</a></li>
                            <li><a href="{{ asset('google_maps.html">Google maps</a></li>
                            <li><a href="{{ asset('datamaps.html">Datamaps</a></li>
                            <li><a href="{{ asset('social_buttons.html">Social buttons</a></li>
                            <li><a href="{{ asset('code_editor.html">Code editor</a></li>
                            <li><a href="{{ asset('modal_window.html">Modal window</a></li>
                            <li><a href="{{ asset('clipboard.html">Clipboard</a></li>
                            <li><a href="{{ asset('text_spinners.html">Text spinners</a></li>
                            <li><a href="{{ asset('forum_main.html">Forum view</a></li>
                            <li><a href="{{ asset('validation.html">Validation</a></li>
                            <li><a href="{{ asset('tree_view.html">Tree view</a></li>
                            <li><a href="{{ asset('loading_buttons.html">Loading buttons</a></li>
                            <li><a href="{{ asset('chat_view.html">Chat view</a></li>
                            <li><a href="{{ asset('masonry.html">Masonry</a></li>
                            <li><a href="{{ asset('tour.html">Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('typography.html">Typography</a></li>
                            <li><a href="{{ asset('icons.html">Icons</a></li>
                            <li><a href="{{ asset('draggable_panels.html">Draggable Panels</a></li> <li><a href="{{ asset('resizeable_panels.html">Resizeable Panels</a></li>
                            <li><a href="{{ asset('buttons.html">Buttons</a></li>
                            <li><a href="{{ asset('video.html">Video</a></li>
                            <li><a href="{{ asset('tabs_panels.html">Panels</a></li>
                            <li><a href="{{ asset('tabs.html">Tabs</a></li>
                            <li><a href="{{ asset('notifications.html">Notifications & Tooltips</a></li>
                            <li><a href="{{ asset('helper_classes.html">Helper css classes</a></li>
                            <li><a href="{{ asset('badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ asset('grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('table_basic.html">Static Tables</a></li>
                            <li><a href="{{ asset('table_data_tables.html">Data Tables</a></li>
                            <li><a href="{{ asset('table_foo_table.html">Foo Tables</a></li>
                            <li><a href="{{ asset('jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('ecommerce_products_grid.html">Products grid</a></li>
                            <li><a href="{{ asset('ecommerce_product_list.html">Products list</a></li>
                            <li><a href="{{ asset('ecommerce_product.html">Product edit</a></li>
                            <li><a href="{{ asset('ecommerce_product_detail.html">Product detail</a></li>
                            <li><a href="{{ asset('ecommerce-cart.html">Cart</a></li>
                            <li><a href="{{ asset('ecommerce-orders.html">Orders</a></li>
                            <li><a href="{{ asset('ecommerce_payments.html">Credit Card form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ asset('basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="{{ asset('slick_carousel.html">Slick Carousel</a></li>
                            <li><a href="{{ asset('carousel.html">Bootstrap Carousel</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ asset('#" id="damian">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ asset('#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="{{ asset('#">Second Level Item</a></li>
                            <li>
                                <a href="{{ asset('#">Second Level Item</a></li>
                            <li>
                                <a href="{{ asset('#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="{{ asset('landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="{{ asset('package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="{{ asset('#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to PURCHASE ORDER Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{ asset('#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="{{ asset('profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="{{ asset('profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="{{ asset('profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="{{ asset('mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{ asset('#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="{{ asset('mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ asset('profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ asset('grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="{{ asset('notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ asset('login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row  border-bottom white-bg dashboard-header">

                    <div class="row">@yield('content')</div>   

            </div>


        </div>
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    02.19.2015
                </small>
                Small chat
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Monica Jackson <small class="chat-date">
                        10:02 am
                    </small>
                    </div>
                    <div class="chat-message active">
                        Lorem Ipsum is simply dummy text input.
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        Mick Smith
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        Lorem Ipsum is simpl.
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Alice Novak
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        Check this stock char.
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        Anna Lamson
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        The standard chunk of Lorem Ipsum
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Mick Lane
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        I belive that. Lorem Ipsum is simply dummy text.
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">Send
                </button> </span></div>
            </div>

        </div>
        <div id="small-chat">

            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>

            </a>
        </div>
        <div id="right-sidebar" class="animated">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active"><a data-toggle="tab" href="{{ asset('#tab-1">
                        Notes
                    </a></li>
                    <li><a data-toggle="tab" href="{{ asset('#tab-2">
                        Projects
                    </a></li>
                    <li class=""><a data-toggle="tab" href="{{ asset('#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="{{ asset('#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Global search
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-content">
                            <h4>Settings</h4>
                            <div class="small">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- Mainly scripts -->
 <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src=" {{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Flot -->
    <script src=" {{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script src=" {{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src=" {{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src=" {{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src=" {{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src=" {{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src=" {{ asset('js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src=" {{ asset('js/inspinia.js') }}"></script>
    <script src=" {{ asset('js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src=" {{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src=" {{ asset('js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src=" {{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  >
    <!-- ChartJS-->
    <script src=" {{ asset('js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src=" {{ asset('js/plugins/toastr/toastr.min.js') }}"></script>


</body>
</html>

<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->
