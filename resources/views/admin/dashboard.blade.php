
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>云校园 - 协同办公平台</title>

    <!--CSS-->
    <!-- 字体 -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
    <!--Bootstrap-->
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('back/css/nifty.min.css')}}" rel="stylesheet">
    <!--图标-->
    <link href="{{asset('back/themify-icons/themify-icons.min.css')}}" rel="stylesheet">

    <!--JAVASCRIPT-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('back/css/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('back/js/pace.min.js')}}"></script>
    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('back/js/jquery-2.2.4.min.js')}}"></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>
    <!--主题模版-->
    <script src="{{asset('back/js/nifty.min.js')}}"></script>

</head>

<!--TIPS-->
<!-- 你可能要删除有demo- 的ID或者类，它们只用作示例中 -->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="{{asset('back/img/logo.png')}}" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">云校园 - <span style="font-size:12px">协同办公平台</span></span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="ti-view-list icon-lg"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="ti-bell icon-lg"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">You have 3 notifications.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Progressbar</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <i class="ti-truck icon-lg"></i>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">With Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <i class="ti-plug icon-lg"></i>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">With Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">

									<span class="icon-wrap icon-circle bg-primary">
									    <i class="ti-layout icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="badge badge-success pull-right">90%</span>
									                <div class="media-left">

									<span class="icon-wrap icon-circle bg-danger">
									    <i class="ti-crown icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle icon with badge</div>
									                    <small class="text-muted">50 minutes ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">

									<span class="icon-wrap bg-info">
									    <i class="ti-camera icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square Icon</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>

									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="label label-danger pull-right">New</span>
									                <div class="media-left">

									<span class="icon-wrap bg-purple">
									    <i class="ti-bolt icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square icon with label</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="ti-angle-right pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->

                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="ti-view-grid icon-lg"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="clearfix">
                                    <div class="col-sm-12 col-md-3">

                                        <!--Mega menu widget-->
                                        <div class="text-center bg-info pad-all">
                                            <h4 class="text-light mar-no">Weekend shopping</h4>
                                            <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                                                    <i class="ti-shopping-cart-full icon-4x"></i>
                                                </span>
                                            </div>
                                            <p class="pad-btm">
                                                Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                            </p>
                                            <a href="#" class="btn btn-info">Learn More...</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Pages</li>
									        <li><a href="#">Profile</a></li>
									        <li><a href="#">Search Result</a></li>
									        <li><a href="#">FAQ</a></li>
									        <li><a href="#">Sreen Lock</a></li>
									        <li><a href="#" class="disabled">Disabled</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Icons</li>
									        <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
									        <li><a href="#">Skycons</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Mailbox</li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
									        <li><a href="#">Read Message</a></li>
									        <li><a href="#">Compose</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Featured</li>
									        <li><a href="#">Smart navigation</a></li>
									        <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
									        <li><a href="#">Lot of themes</a></li>
									        <li><a href="#">Transition effects</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Components</li>
									        <li><a href="#">Tables</a></li>
									        <li><a href="#">Charts</a></li>
									        <li><a href="#">Forms</a></li>
									        <li class="divider"></li>
                                            <li>
                                                <form role="form" class="form">
                                                    <div class="form-group">
                                                        <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                        <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="{{asset('back/img/flags/united-kingdom.png')}}" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu">
						        <li>
						            <!--English-->
						            <a href="#" class="active">
						                <img class="lang-flag" src="{{asset('back/img/flags/united-kingdom.png')}}" alt="English">
						                <span class="lang-id">EN</span>
						                <span class="lang-name">English</span>
						            </a>
						        </li>
						        <li>
						            <!--France-->
						            <a href="#">
						                <img class="lang-flag" src="{{asset('back/img/flags/france.png')}}" alt="France">
						                <span class="lang-id">FR</span>
						                <span class="lang-name">Fran&ccedil;ais</span>
						            </a>
						        </li>

                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!-- You may use image instead of an icon.
                                    <!--<img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">-->
                                    <i class="ti-face-smile ic-user"></i>
                                </span>
                                <div class="username hidden-xs">John Doe</div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="ti-user icon-fw icon-lg"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="ti-email icon-fw icon-lg"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="ti-settings icon-fw icon-lg"></i> Settings
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="pages-login.html" class="btn btn-primary">
                                        <i class="ti-unlock icon-fw"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                        <li>
                            <a href="#" class="aside-toggle navbar-aside-icon">
                                <i class="pci-ver-dots"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Expanded Navigation</h1>

                    <!--Searchbox-->
                    <div class="searchbox">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="ti-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->




                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">


					<!-- QUICK TIPS -->
					<!-- ==================================================================== -->
					<h3>Your content here...</h3>
					<br>
					<a href="index.html" class="btn btn-dark">Back</a>
					<br><br><br>
					<h3>Quick Tips</h3>
					<p>You may remove all ID or Class names which contain <code>demo-</code>, they are only used for demonstration.</p>
					<br>

					<h4>Boxed Layout <span class="label label-info">New</span></h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Boxed Layout</td>
					                <td>Add <code>.boxed-layout</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fluid Layout</td>
					                <td>Remove <code>.boxed-layout</code> from the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Boxed Layout with background image</td>
					                <td>
					                    <p class="text-main text-semibold">Add it in your own custom CSS Files</p>
					                    You may add your own class in your css custom file with path to your image.
					                    <pre>#container.boxed-layout {<br>&#09;background-image: url("path-to-my-image.jpg");<br>&#09;background-repeat: no-repeat;<br>&#09;background-size: cover;<br>}</pre>
					                    <br>
					                    <p class="text-main text-semibold">Re-compiling using CSS preprocessors</p>
					                    <p>Fill the the variable <code>@boxed-bg-img</code> in <code>_variable.less</code> (LESS, SASS or SCSS) with the path to your image.</p>
					                    <pre>..<br>@boxed-bg-img    : "path-to-my-image.jpg"<br>...</pre>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<br>

					<h4>Navigation</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Expanded the navigation by default</td>
					                <td>Add <code>.mainnav-lg</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fixed navigation</td>
					                <td>Add <code>.mainnav-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Create a ToggleButton for navigation</td>
					                <td>Add <code>.mainnav-toggle</code> to the button.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td>
					                    <button class="btn btn-lg btn-primary mainnav-toggle">Toggle Navigation</button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>

					<h4>Aside</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Make Aside visible by default</td>
					                <td>Add <code>.aside-in</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Fixed aside</td>
					                <td>Add <code>.aside-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Floating Aside <label class="label label-info">New</label></td>
					                <td>Add <code>.aside-float</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Aside on the left side</td>
					                <td>Add <code>.aside-left</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Use the bright color schemes</td>
					                <td>Add <code>.aside-bright</code> to the <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Create a ToggleButton for aside</td>
					                <td>Add <code>.aside-toggle</code> to the button.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td>
					                    <button class="btn btn-success btn-lg aside-toggle">Toggle Aside</button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Navbar</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Fixed navbar</td>
					                <td>Add <code>.navbar-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Footer</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Fixed footer</td>
					                <td>Add <code>.footer-fixed</code> to the <code>#container</code>.</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Color Schemes</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Apply a different color scheme</td>
					                <td>You can change whole color scheme of your website by adding a color scheme stylesheet into the <code>&lt;head></code>.</td>
					            </tr>
					            <tr>
					                <td></td>
					                <td><pre>&lt;head><br>	...<br>	&lt;link href="path-to-the-color-scheme.css" rel="stylesheet"><br>&lt;/head></pre></td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<h4>Animation</h4>
					<div class="table-responsive">
					    <table class="table">
					        <tbody>
					            <tr>
					                <td style="width:70ex">Remove animation</td>
					                <td>Remove the class <code>.effect</code> from <code>#container</code>.</td>
					            </tr>
					            <tr>
					                <td>Add different slide transitions to the Navigation and Aside</td>
					                <td>
					                    Add <code>.effect</code> to the <code>#container</code> and then combined with the class name of the transition function.
					                    <br>
					                    <br>
					                    <table>
					                        <thead>
					                            <tr>
					                                <th style="width: 250px;">Transition function</th>
					                                <th>Class name</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                                <td>easeInQuart</td>
					                                <td><code>.easeInQuart</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeOutQuart</td>
					                                <td><code>.easeOutQuart</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeInBack</td>
					                                <td><code>.easeInBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeOutBack</td>
					                                <td><code>.easeOutBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>easeInOutBack</td>
					                                <td><code>.easeInOutBack</code></td>
					                            </tr>
					                            <tr>
					                                <td>steps</td>
					                                <td><code>.steps</code></td>
					                            </tr>
					                            <tr>
					                                <td>jumping</td>
					                                <td><code>.jumping</code></td>
					                            </tr>
					                            <tr>
					                                <td>rubber</td>
					                                <td><code>.rubber</code></td>
					                            </tr>
					                        </tbody>
					                    </table>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
					<!-- ==================================================================== -->
					<!-- END QUICK TIPS -->



                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            <span class="label label-success pull-right">New</span>
                                            <img class="img-circle img-sm img-border" src="{{asset('back/img/profile-photos/1.png')}}" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Aaron Chavez</p>
                                            <span class="mnp-desc">aaron.cha@themeon.net</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="ti-medall icon-lg icon-fw"></i> Link 1
                                        </a>

                                    </div>
                                </div>

                                <!-- 左边的导航列表 -->
                                <ul id="mainnav-menu" class="list-group">
						            <!--课题选择环节-->
						            <li>
						                <a href="#">
						                    <i class="ti-receipt"></i>
						                    <span class="menu-title">
												<strong>课题选择环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">课题申报</a></li>
											<li><a href="#">课题审核</a></li>
											<li><a href="#">选题情况汇总</a></li>
											<li><a href="#">指导教师安排</a></li>
                                            <li><a href="#">课题汇总</a></li>
                                            <li><a href="#">课题参与人确定</a></li>
                                            <li><a href="#">课题修改申请审核</a></li>
						                </ul>
						            </li>

                                    <li>
						                <a href="#">
						                    <i class="ti-files"></i>
						                    <span class="menu-title">
												<strong>开题报告环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">开题报告审核</a></li>
											<li><a href="#">开题答辩记录表</a></li>
											<li><a href="#">开题答辩PPT</a></li>
											<li><a href="#">开题答辩分组</a></li>
						                </ul>
						            </li>

                                    <li>
						                <a href="#">
						                    <i class="ti-book"></i>
						                    <span class="menu-title">
												<strong>中期检查环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">中期检查报告</a></li>
											<li><a href="#">浏览周记</a></li>
						                </ul>
						            </li>


                                    <li>
						                <a href="#">
						                    <i class="ti-smallcap"></i>
						                    <span class="menu-title">
												<strong>程序测试环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">测试记录表</a></li>
											<li><a href="#">系统测试答辩结果</a></li>
                                            <li><a href="#">系统源代码</a></li>
						                </ul>
						            </li>


                                    <li>
						                <a href="#">
						                    <i class="ti-comments-smiley"></i>
						                    <span class="menu-title">
												<strong>论文答辩环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">答案记录</a></li>
											<li><a href="#">论文答辩PPT</a></li>
                                            <li><a href="#">论文答辩分组</a></li>
                                            <li><a href="#">审核论文初稿</a></li>
                                            <li><a href="#">查看论文</a></li>
                                            <li><a href="#">答辩评分汇总</a></li>
						                </ul>
						            </li>


                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="ti-receipt"></i>
                                            <span class="menu-title">论文成绩</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">

                                            <li>
                                                <a href="#">录入<i class="arrow"></i></a>

                                                <!--Submenu-->
                                                <ul class="collapse">
                                                    <li><a href="#">指导教师成绩评审</a></li>
                                                    <li><a href="#">评阅教师成绩评审</a></li>
                                                    <li><a href="#">答辩委员会决议书</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">统计</a></li>
                                            <li><a href="#">成绩修改</a></li>
                                        </ul>
                                    </li>


                                    <li>
						                <a href="#">
						                    <i class="ti-pencil-alt2"></i>
						                    <span class="menu-title">
												<strong>课题任务环节</strong>
											</span>
											<i class="arrow"></i>
						                </a>

						                <!--子项目-->
						                <ul class="collapse">
						                    <li><a href="#">时间段任务下达</a></li>
											<li><a href="#">任务书审核</a></li>
                                            <li><a href="#">任务书下达</a></li>
						                </ul>
						            </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="ti-comments"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="ti-info-alt"></i>
                                        Reports
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="ti-settings"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-lg">First tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab-->


                                <!--Second tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">
                                    <p class="pad-all text-lg">Second tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--End second tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <p class="pad-all text-lg">Third tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2016 Your Company</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->


    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    </body>
</html>
